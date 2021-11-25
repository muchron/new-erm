@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-teal">
                <div class="card-header">
                    <p class="card-title border-bottom-0">Pencarian</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <input type="date" id="tgl_pertama" class="form-control" name="tgl_pertama" required value="{{$tglAwal}}">
                        </div>
                        <div class="col-4">
                            <input type="date" id="tgl_kedua" class="form-control" name="tgl_kedua" value="{{$tglSekarang}}" required>
                        </div>
                        <div class="col-3">
                            <div class="form-group clearfix mt-2">
                                <div class="icheck-teal d-inline">
                                  <input type="radio" name="status" id="ralan" value="ralan" required   >
                                  <label for="ralan">Rawat Jalan</label>
                                </div>
                                <div class="icheck-teal d-inline">
                                  <input type="radio" name="status" id="ranap" value="ranap">
                                  <label for="ranap">Rawat Inap</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-1">
                            <button class="btn btn-info text-sm" id="cari" style="width:100%"><i class="fas fa-search"></i> Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-teal">
                <div class="card-header">
                    <p class="card-title border-bottom-0">{{$title}} </p>
                    <div class="card-tools mr-4" id="bulan">
                        <span><strong>{{$month}}</strong></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered"  id="table-dinkes" style="width: 100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Kode Diagnosa</th>
                                            <th>Nama Penyakit</th>
                                            <th>Status Rawat</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        load_data();
        function load_data(tgl_pertama, tgl_kedua, status) {
            $('#table-dinkes').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url:'/rekammedis/dinkes/json',
                data: {
                    tgl_pertama:tgl_pertama,
                    tgl_kedua:tgl_kedua,
                    status:status,
                    }
                },
            order: [[ 3, "desc" ]],
            lengthChange: true,
            orderable:false,
            scrollY: "350px",
            scrollX: true,
            scroller: false,
            paging:true,
            dom: 'Bfrtip',
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
                                search: 'Cari Penyakit : ',
                },
            buttons: [
                {extend: 'copy', text:'<i class="fas fa-copy"></i> Salin',className:'btn btn-info', title: 'laporan-kunjungan-pasien-rawat-jalan{{date("dmy")}}'},
                {extend: 'csv',  text:'<i class="fas fa-file-csv"></i> CSV',className:'btn btn-info', title: 'laporan-kunjungan-pasien-rawat-jalan{{date("dmy")}}'},
                {extend: 'excel', text:'<i class="fas fa-file-excel"></i> Excel',className:'btn btn-info', title: 'laporan-kunjungan-pasien-rawat-jalan{{date("dmy")}}'},
            ],
            columns:[
                {data:'kd_penyakit', name:'kd_penyakit'},
                {data:'nm_penyakit', name:'nm_penyakit'},
                {data:'status', name:'status'},
                {data:'jumlah', name:'jumlah'},
                ],
            });
        }

        $('#cari').click(function(){
            var tgl_pertama = $('#tgl_pertama').val();
            var tgl_kedua = $('#tgl_kedua').val();
            var status = '';    
            if ($('#ralan').is(":checked"))
            {
                status = 'ralan';    
            }else if($('#ranap').is(":checked")){
                status = 'ranap';    
                
            }
            if (tgl_pertama != '' &&  tgl_kedua != '' && status!='' ){
                var months = new Array(12);
                    months[0] = "Januari";
                    months[1] = "Februari";
                    months[2] = "Maret";
                    months[3] = "April";
                    months[4] = "Mei";
                    months[5] = "Juni";
                    months[6] = "Juli";
                    months[7] = "Agustus";
                    months[8] = "September";
                    months[9] = "Oktober";
                    months[10] = "November";
                    months[11] = "Desember";
                var date1 = new Date(tgl_pertama);
                var date2 = new Date(tgl_kedua);
                
                day1 = date1.getDate();
                month1 = date1.getMonth();
                year1 = date1.getFullYear();

                day2 = date2.getDate();
                month2 = date2.getMonth();
                year2 = date2.getFullYear();
                
                $('#table-dinkes').DataTable().destroy();
                $('#bulan').html('<strong>'+day1+' '+months[month1]+' '+year1+' s/d '+day2+' '+months[month2]+' '+year2+'</strong>');
                load_data(tgl_pertama, tgl_kedua, status);
            }else{
                toastr.error('Lengkapi Pilihan Pencarian');
            }
    });
    });
</script>
    
@endpush