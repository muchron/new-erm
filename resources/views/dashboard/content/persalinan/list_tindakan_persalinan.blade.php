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
                        <div class="col-2">
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
@endsection

@push('scripts')
<script>
$(document).ready(function(){

    load_data();

    function load_data(tgl_pertama='', tgl_kedua='', operasi=''){
        $('#table-operasi').DataTable({
            processing: true,   
            serverSide: true,
            destroy : false,
            searching : false,
            ajax: {url:'persalinan/json', data: {tgl_pertama:tgl_pertama, tgl_kedua:tgl_kedua, operasi:operasi} },
            lengthMenu: [[50, 100, -1], [50, 100, "Semua"]],
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
            
            buttons: [
                {extend: 'copy', className:'btn btn-info', title: 'List-Tindakan-Operasi {{date("dmy")}}'},
                {extend: 'csv', className:'btn btn-info', title: 'List-Tindakan-Operasi {{date("dmy")}}'},
                {extend: 'excel', className:'btn btn-info', title: 'List-Tindakan-Operasi {{date("dmy")}}'},
                {extend: 'pdf', className:'btn btn-info', title: 'List-Tindakan-Operasi {{date("dmy")}}', exportOptions: {
                    modifier: {
                        search: 'applied',
                        order: 'applied'
                    }
                }},
                {extend: 'print', className:'btn btn-info', title: 'List-Tindakan-Operasi {{date("dmy")}}'},
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
        var operasi = $('#operasi').val();
     
        if (tgl_pertama != '' &&  tgl_kedua != ''){
            $('#table-operasi').DataTable().destroy();
                toastr.success('Pencarian Selesai');
                load_data(tgl_pertama, tgl_kedua, operasi);           
        }else{
            alert('Both Date is required');
        }
    });

});
</script>
@endpush