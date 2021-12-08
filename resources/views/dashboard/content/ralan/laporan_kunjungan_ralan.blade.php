@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-teal">
                <div class="card-header">
                    <p class="card-title border-bottom-0">Pencarian</p>
                </div>
                <div class="card-body">
                    <div class="row m-0">
                        <div class="col-4">
                            <label for="">Tanggal</label>

                        </div>
                        <div class="col-2">
                            <label for="">Poli</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <input type="date" id="tgl_pertama" class="form-control" name="tgl_pertama" required value={{$tglAwal}}>
                        </div>
                        <div class="col-2">
                            <input type="date" id="tgl_kedua" class="form-control" name="tgl_kedua" required value="{{$tglSekarang}}">
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <select class="custom-select form-control-border" id="poli" name="poli">
                                  <option value="">Semua Poli</option>
                                  <option value="anak">Anak</option>
                                  <option value="kandungan">Kebidanan dan Kandungan</option>
                                </select>
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
                            <div class="table-responsive text-sm">
                                <table class="table table-bordered"  id="table-kunjungan" style="width: 100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No Rawat</th>
                                            <th>Tanggal Registrasi</th>
                                            <th>NIK Pasien</th>
                                            <th>Nama Pasien</th>
                                            <th>No Kartu BPJS</th>
                                            <th>Alamat</th>
                                            <th>No. HP</th>
                                            <th>Dokter PJ</th>
                                            <th>Poli</th>
                                            <th>Diagnosa</th>
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
        function load_data(tgl_pertama, tgl_kedua, poli='') {
          $('#table-kunjungan').DataTable({
            ajax: {
                url:'/ralan/laporan/json',
                dataType:'json',
                data: {
                        tgl_pertama:tgl_pertama,
                        tgl_kedua:tgl_kedua,
                        poli:poli,
                    },
                },
            processing: true,
            serverSide: true,
            destroy: false,
            deferRender:true,
            lengthChange: true,
            ordering:false,
            searching : true,
            stateSave: true,
            scrollY: 300,
            scrollX: true,
            scroller : {
                loadingIndicator: true
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
                                search: 'Cari Pasien : ',
                },
            buttons: [
                {extend: 'copy', text:'<i class="fas fa-copy"></i> Salin',className:'btn btn-info', title: 'laporan-kunjungan-pasien-rawat-jalan{-{date("dmy")}}'},
                {extend: 'csv',  text:'<i class="fas fa-file-csv"></i> CSV',className:'btn btn-info', title: 'laporan-kunjungan-pasien-rawat-jalan-{{date("dmy")}}'},
                {extend: 'excel', text:'<i class="fas fa-file-excel"></i> Excel',className:'btn btn-info', title: 'laporan-kunjungan-pasien-rawat-jalan-{{date("dmy")}}'},
            ],
            columns:[
                {data:'no_rawat', name:'no_rawat'},
                {data:'tgl_registrasi', name:'tgl_registrasi'},
                {data:'no_ktp', name:'no_ktp'},
                {data:'nm_pasien', name:'nm_pasien'},
                {data:'no_peserta', name:'no_peserta'},
                {data:'alamat', name:'alamat'},
                {data:'no_tlp', name:'no_tlp'},
                {data:'nm_dokter', name:'nm_dokter'},
                {data:'nm_sps', name:'nm_sps'},
                {data:'diagnosa', name:'diagnosa'},
                ],
            });
        }

        $('#cari').click(function(){
            var tgl_pertama = $('#tgl_pertama').val();
            var tgl_kedua = $('#tgl_kedua').val();
            var poli= $('#poli').val();

            if (tgl_pertama != '' &&  tgl_kedua != ''){
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
                $('#table-kunjungan').DataTable().destroy();
                $('#bulan').html('<strong>'+day1+' '+months[month1]+' '+year1+' s/d '+day2+' '+months[month2]+' '+year2);
                load_data(tgl_pertama, tgl_kedua, poli);                

            }else{
                toastr.error('Lengkapi Pilihan Pencarian');
            }
    });
});
</script>
    
@endpush