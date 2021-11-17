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
                            <input type="date" id="tgl_pertama" class="form-control" name="tgl_pertama" required>
                        </div>
                        <div class="col-4">
                            <input type="date" id="tgl_kedua" class="form-control" name="tgl_kedua" required>
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
                        <span style="font-size: 1.2em"><strong>{{$month}}</strong></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered"  id="table-kunjungan" style="width: 100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Pasien</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Penanggung Jawab</th>
                                            <th>No. HP</th>
                                            <th>Dokter PJ</th>
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
    $('#table-kunjungan').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url:'/kunjungan/json',
                // data: {
                //         tgl_pertama:tgl_pertama,
                //         tgl_kedua:tgl_kedua,
                //     }
                },
            order: [[ 3, "desc" ]],
            lengthChange: false,
            orderable:false,
            scrollY: "350px",
            scrollX: true,
            scrollCollapse: true,
            paging:false,
            dom: 'Bfrtip',
            buttons: [
                {extend: 'copy', className:'btn btn-info', title: 'daftar-10-besar-penyakit{{date("dmy")}}'},
                {extend: 'csv', className:'btn btn-info', title: 'daftar-10-besar-penyakit{{date("dmy")}}'},
                {extend: 'excel', className:'btn btn-info', title: 'daftar-10-besar-penyakit{{date("dmy")}}'},
                {extend: 'pdf', className:'btn btn-info', title: 'daftar-10-besar-penyakit{{date("dmy")}}', exportOptions: {
                    modifier: {
                        search: 'applied',
                        order: 'applied'
                    }
                }},
                {extend: 'print', className:'btn btn-info', title: 'daftar-10-besar-penyakit{{date("dmy")}}'},
            ],
            columns:[
                {data:'nm_pasien', name:'nm_pasien'},
                {data:'tgl_lahir', name:'tgl_lahir'},
                {data:'alamat', name:'alamat'},
                {data:'p_jawab', name:'p_jawab'},
                {data:'no_tlp', name:'no_tlp'},
                {data:'nm_dokter', name:'nm_dokter'},
                ],
            }
        ); 

});
</script>
    
@endpush