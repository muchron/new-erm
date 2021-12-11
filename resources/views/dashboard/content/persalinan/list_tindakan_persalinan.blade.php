@extends('dashboard.layouts.main')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-teal">
            <div class="card-header">
                <h3 class="card-title">{{$title}}</h3>
                <div class="card-tools mr-4" id="bulan">
                    <span><strong>{{$month}}</strong></span>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="tanggal" name="tanggal" autocomplete="off"/>
                            </div>
                        </div>        
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Dokter</label>
                            <div class="input-group">
                                <select name="dokter" id="dokter" class="custom-select form-control-border">
                                    <option value="">Semua Dokter</option>
                                    <option value="1.101.1112">dr. Himawan Budityastomo, SpOG</option>
                                    <option value="1.109.1119">dr. Siti Pattihatun Nasyiroh, SpOG</option>
                                </select>
                            </div>
                        </div>        
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="">Pembiayaan</label>
                            <div class="input-group">
                                <select name="pembiayaan" id="pembiayaan" class="custom-select form-control-border">
                                    <option value="">BPJS & UMUM</option>
                                    <option value="bpjs">BPJS</option>
                                    <option value="umum">UMUM</option>
                                </select>
                            </div>
                        </div>        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive text-sm">
                            <table id="tabel-persalinan" class="table table-bordered dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr role="row">
                                        <th>Nomor Rawat</th>
                                        <th>Tanggal Persalinan</th>
                                        <th>Jenis Persalinan</th>
                                        <th>Dokter</th>
                                        <th>Pembiayaan</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>

  @include('dashboard.content.persalinan.diagram_persalinan')

@endsection

@push('scripts')
<script>
    
var tgl_pertama='';
var tgl_kedua='';


$(document).ready(function(){
    
    // $('select').prop('disabled', true);
    
    $('#tanggal').daterangepicker({
        locale : {
            language: 'id' ,
            applyLabel: 'Terapkan',
            cancelLabel: 'Batal',
            format:'DD/MM/YYYY',
            daysOfWeek: ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Ming'],
            monthNames: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        },
            startDate: moment().startOf('month'),
            autoclose:true,
            showDropdowns: true,
            minYear: 2019,
            maxYear: {{date('Y')+1}},
    });
    
    $('#tanggal').on('apply.daterangepicker', function (env, picker) {
        
        $('select').prop('disabled', false);

        tgl_pertama = picker.startDate.format('YYYY-MM-DD');
        tgl_kedua = picker.endDate.format('YYYY-MM-DD');
        var bulan = new Array(12);
                    bulan[0] = "Januari";
                    bulan[1] = "Februari";
                    bulan[2] = "Maret";
                    bulan[3] = "April";
                    bulan[4] = "Mei";
                    bulan[5] = "Juni";
                    bulan[6] = "Juli";
                    bulan[7] = "Agustus";
                    bulan[8] = "September";
                    bulan[9] = "Oktober";
                    bulan[10] = "November";
                    bulan[11] = "Desember";
                var tanggal1 = new Date(tgl_pertama);
                var tanggal2 = new Date(tgl_kedua);
                
                hari1 = tanggal1.getDate();
                bulan1 = tanggal1.getMonth();
                tahun1 = tanggal1.getFullYear();

                hari2 = tanggal2.getDate();
                bulan2 = tanggal2.getMonth();
                tahun2 = tanggal2.getFullYear();

                tgl1 = hari1+' '+bulan[bulan1]+' '+tahun1
                tgl2 = hari2+' '+bulan[bulan2]+' '+tahun2

        $('#bulan').html('<strong>'+tgl1+' s/d '+tgl2+'</strong>');
        $('#tabel-persalinan').DataTable().destroy();

        load_data(tgl_pertama, tgl_kedua); 
    });

    load_data();
    

    function load_data(tgl_pertama, tgl_kedua, dokter, pembiayaan ){
        
        var dokter = $('#dokter').val();
        var pembiayaan = $('#pembiayaan').val();

        $('#tabel-persalinan').DataTable({
            processing: true,   
            serverSide: true,
            destroy : false,
            searching : true,
            ajax: {
                url:'persalinan/json',
                data: {
                    tgl_pertama:tgl_pertama,
                    tgl_kedua:tgl_kedua,
                    dokter:dokter,
                    pembiayaan:pembiayaan,
                }
            },
            scrollY: "350px",
            scrollX: true,
            scroller : {
                loadingIndicator: true
            },
            language: {
                    processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i> <span class="sr-only">Loading...</span>'
                },
            paging:true,
            dom: 'Blfrtip',
            initComplete: function(settings, json) {
                                toastr.success('Data telah dimuat', 'Berhasil');
                            },
            language: {
                    processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i> <span class="sr-only">Loading...</span>',
                    zeroRecords: "Tidak Ditemukan Data",
                    infoEmpty:      "",
                    info: "Menampilkan sebanyak _START_ ke _END_ dari _TOTAL_ data",
                    loadingRecords: "Sedang memuat ...",
                    infoFiltered:   "(Disaring dari _MAX_ total baris)",
                    buttons: {
                                copyTitle: 'Data telah disalin',
                                copySuccess: {
                                                _: '%d baris data telah disalin',
                                            },
                            },
                    lengthMenu: '<div class="text-md mt-3">Tampilkan <select>'+
                                    '<option value="50">50</option>'+
                                    '<option value="100">100</option>'+
                                    '<option value="200">200</option>'+
                                    '<option value="250">250</option>'+
                                    '<option value="500">500</option>'+
                                    '<option value="-1">Semua</option>'+
                                    '</select> Baris',
                    paginate: {
                                    "first":      "Pertama",
                                    "last":       "Terakhir",
                                    "next":       "Selanjutnya",
                                    "previous":   "Sebelumnya"
                                },
                                search: 'Cari Dokter : ',
                },
            buttons: [
                {extend: 'copy', text:'<i class="fas fa-copy"></i> Salin',className:'btn btn-info', title: 'laporan-kunjungan-pasien-rawat-jalan{{date("dmy")}}'},
                {extend: 'csv',  text:'<i class="fas fa-file-csv"></i> CSV',className:'btn btn-info', title: 'laporan-kunjungan-pasien-rawat-jalan{{date("dmy")}}'},
                {extend: 'excel', text:'<i class="fas fa-file-excel"></i> Excel',className:'btn btn-info', title: 'laporan-kunjungan-pasien-rawat-jalan{{date("dmy")}}'},
            ],
            columns: [
                { data: 'no_rawat', name: 'no_rawat',},
                { data: 'tgl_perawatan', name: 'tgl_perawatan',},
                { data: 'nm_perawatan', name: 'nm_perawatan',},
                { data: 'dokter', name: 'dokter',},
                { data: 'pembiayaan', name: 'pembiayaan',},
            ],
        });  
    }     

    $('#dokter').change(function(){
        if(tgl_pertama == '' && tgl_kedua == ''){

            var hari1 = moment().startOf('month').date();
            var hari2 = moment().endOf('month').date();
            var bulan = moment().month()+1;
            var tahun = moment().startOf('month').year();
            

            tgl_pertama = tahun+'-'+bulan+'-'+hari1;
            tgl_kedua = tahun+'-'+bulan+'-'+hari2;

        }
        $('#tabel-persalinan').DataTable().destroy();
        load_data(tgl_pertama, tgl_kedua, $(this).val());
    });

    $('#pembiayaan').change(function(){  
        if(tgl_pertama == '' && tgl_kedua == ''){

            var hari1 = moment().startOf('month').date();
            var hari2 = moment().endOf('month').date();
            var bulan = moment().month()+1;
            var tahun = moment().startOf('month').year();


            tgl_pertama = tahun+'-'+bulan+'-'+hari1;
            tgl_kedua = tahun+'-'+bulan+'-'+hari2;

        }
        $('#tabel-persalinan').DataTable().destroy();
        load_data(tgl_pertama, tgl_kedua, dokter, $(this).val());     
    });
});
</script>
@endpush