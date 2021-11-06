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
                        <div class="col-3">
                            <input type="date" id="tgl_pertama" class="form-control" name="tgl_pertama">
                        </div>
                        <div class="col-3">
                            <input type="date" id="tgl_kedua" class="form-control" name="tgl_kedua">
                        </div>
                        <div class="col-3">
                            <div class="form-group clearfix mt-2">
                                <div class="icheck-teal d-inline">
                                  <input type="radio" name="status" id="ralan" value="ralan">
                                  <label for="ralan">Rawat Jalan</label>
                                </div>
                                <div class="icheck-teal d-inline">
                                  <input type="radio" name="status" id="ranap" value="ranap">
                                  <label for="ranap">Rawat Inap</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <select class="custom-select form-control-border" id="kategori" name="kategori">
                                  <option selected disabled>Semua Kategori</option>
                                  <option value="anak">Anak</option>
                                  <option value="kandungan">Kandungan dan Kebidanan</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-1">
                            <button class="btn btn-info text-sm" id="cari"><i class="fas fa-search"></i> Cari</button>
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
                    <p class="card-title border-bottom-0">{{$title}}</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="table-diagnosa" style="width: 100%" cellspacing="0">
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
        function load_data(tgl_pertama, tgl_kedua, status, kategori) {
            $('#table-diagnosa').DataTable({
            processing: true,
            serverSide: true,
            ajax: {url:'rekammedis/json', data: {tgl_pertama:tgl_pertama, tgl_kedua:tgl_kedua, status:status, kategori:kategori} },
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
                {data:'kd_penyakit', name:'kd_penyakit'},
                {data:'nm_penyakit', name:'nm_penyakit'},
                {data:'status', name:'status'},
                {data:'jumlah', name:'jumlah'},
                ]
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
            var kategori = '%'+$('#kategori').val()+'%';
            
            if (tgl_pertama != '' &&  tgl_kedua != '' && status!='' && kategori!=''){
                $('#table-diagnosa').DataTable().destroy();
                toastr.success('Pencarian Selesai');
                load_data(tgl_pertama, tgl_kedua, status, kategori);
            }else{
                toastr.info('Lengkapi Pilihan Pencarian');
            }
    });
    });
</script>
    
@endpush