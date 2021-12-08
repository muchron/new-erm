@extends('dashboard.layouts.main')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-teal">
            <div class="card-header">
                <h1 class="card-title">Pencarian Data {{$bigTitle}}</h1>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Tanggal :</label>
                    <div class="row">
                        <div class="col-3">
                            <div class="input-group">
                                <input type="date" class="form-control" id="tgl_pertama" name="tgl_pertama" value="{{$dateStart}}"/>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group">
                                <input type="date" class="form-control" id="tgl_kedua" name="tgl_kedua" value="{{$dateNow}}"/>
                            </div>
                        </div>
                        <div class="col-3">
                            <select name="dokter" id="dokter" class="custom-select form-control-border">
                                <option value="">Semua Dokter</option>
                                <option value="1.101.1112">dr. Himawan Budityastomo, SpOG</option>
                                <option value="1.109.1119">dr. Siti Pattihatun Nasyiroh, SpOG</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <select name="pembiayaan" id="pembiayaan" class="custom-select form-control-border">
                                <option value="">BPJS & UMUM</option>
                                <option value="bpjs">BPJS</option>
                                <option value="umum">UMUM</option>
                            </select>
                        </div>
                        <div class="col-1">
                            <button class="btn btn-info" id="cari"><i class="fas fa-search"></i> Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <div class="col-sm-12">
                        <div class="table-responsive text-sm">
                            <table id="table-operasi" class="table table-bordered dataTable" width="100%" cellspacing="0">
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

$(document).ready(function(){
    
   
    load_data();

    function load_data(tgl_pertama='', tgl_kedua='', dokter='', pembiayaan='' ){
        $('#table-operasi').DataTable({
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

    $('#cari').click(function(){
        var tgl_pertama = $('#tgl_pertama').val();
        var tgl_kedua = $('#tgl_kedua').val();
        var dokter = $('#dokter').val();
        var pembiayaan = $('#pembiayaan').val();
        if (tgl_pertama != '' &&  tgl_kedua != ''){
            $('#table-operasi').DataTable().destroy();
                toastr.success('Pencarian Selesai');
                load_data(tgl_pertama, tgl_kedua, dokter, pembiayaan);           
        }else{
            alert('Both Date is required');
        }
    });
});
</script>
@endpush