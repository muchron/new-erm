@extends('dashboard.layouts.main')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">{{$title}}</h3>
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
                                        <th>Tanggal Operasi</th>
                                        <th>Nama Operasi</th>
                                        <th>Dokter</th>
                                        <th>Asisten 1</th>
                                        <th>Asisten 2</th>
                                        <th>Dok. Anestesi</th>
                                        <th>Asiten 1</th>
                                        <th>Dok. Anak</th>
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
{{-- <script>
$(function() {
    var table = $('#table-operasi').DataTable({
        processing: true,   
        serverSide: true,
        ajax: 'operasi/json',
        lengthChange: false,
        orderable:false,
        // order:[[1, 'asc']],
        scrollY: "350px",
        scrollX: true,
        scrollCollapse: false,
        responsive: true,
        paging:false,
        dom: 'Bfrtip',
        buttons: [
            {extend: 'copy', className:'btn btn-primary', title: 'Daftar_Pegawai{{date("dmy")}}'},
            {extend: 'csv', className:'btn btn-primary', title: 'Daftar_Pegawai{{date("dmy")}}'},
            {extend: 'excel', className:'btn btn-primary', title: 'Daftar_Pegawai{{date("dmy")}}'},
            {extend: 'pdf', className:'btn btn-primary', title: 'Daftar_Pegawai{{date("dmy")}}', exportOptions: {
                modifier: {
                    search: 'applied',
                    order: 'applied'
                }
            }},
            {extend: 'print', className:'btn btn-primary', title: 'Daftar_Pegawai{{date("dmy")}}'},
        ],
        columns: [
            { data: 'no_rawat', name: 'no_rawat',},
            { data: 'tgl_operasi', name: 'tgl_operasi',},
            { data: 'nama_operasi', name: 'nama_operasi',},
            { data: 'dokter', name: 'dokter',},
            { data: 'asisten1', name: 'asisten1',},
            { data: 'asisten2', name: 'asisten2',},
            { data: 'dokterAnestesi', name: 'dokterAnestesi',},
            { data: 'asistenAnestesi', name: 'asistenAnestesi',},
            { data: 'dokterAnak', name: 'dokterAnak',},
            { data: 'pembiayaan', name: 'pembiayaan',},
        ],
    });    
});
</script> --}}
@endpush