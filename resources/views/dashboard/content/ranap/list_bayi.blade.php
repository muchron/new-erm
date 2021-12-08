@extends('dashboard.layouts.main')

@section('content')
    <div class="row">
        <div class="col-6">
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
                            <div class="row">
                                <div class="col-6">
                                    <label>Tahun</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="tahun-addon"><i class="fas fa-calendar"></i></span>
                                        </div>
                                        <input type="text" id="yearpicker" class="form-control datetimepicker-input" data-toggle="datetimepicker" aria-describedby="tahun-addon" data-target="#yearpicker" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped"  id="table-kunjungan" style="width: 100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Bulan</th>
                                            <th>Bayi Perawatan</th>
                                            <th>Bayi Sehat</th>
                                            <th>Total Pasien Bayi</th>
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

        
        $('#yearpicker').datetimepicker({
            format: "YYYY",
            useCurrent: false,
            viewMode: "years"
        });

    
        load_data();
        function load_data(tahun) {
          $('#table-kunjungan').DataTable({
            ajax: {
                url:'/ranap/bayi/json',
                dataType:'json',
                data: {
                        tahun:tahun,
                    },
                },
            processing: true,
            serverSide: true,
            destroy: false,
            deferRender:true,
            lengthChange: false,
            ordering:false,
            searching : false,
            stateSave: true,
            paging:false,
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
                },
            buttons: [
                {extend: 'copy', text:'<i class="fas fa-copy"></i> Salin',className:'btn btn-info', title: 'laporan-jumlah-pasien-bayi-{{date("dmy")}}'},
                {extend: 'csv',  text:'<i class="fas fa-file-csv"></i> CSV',className:'btn btn-info', title: 'laporan-jumlah-pasien-bayi-{{date("dmy")}}'},
                {extend: 'excel', text:'<i class="fas fa-file-excel"></i> Excel',className:'btn btn-info', title: 'laporan-jumlah-pasien-bayi-{{date("dmy")}}'},
            ],
            columns:[
                {data:'bulan', name:'bulan'},
                {data:'bayiPerawatan', name:'bayiPerawatan'},
                {data:'bayiSehat', name:'bayiSehat'},
                {data:'semuaBayi', name:'semuaBayi'},
                ],
            });
        }

        $('#cari').click(function(){
            var tgl_pertama = $('#tgl_pertama').val();
            var tgl_kedua = $('#tgl_kedua').val();
            var poli= $('#poli option:selected').text();

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