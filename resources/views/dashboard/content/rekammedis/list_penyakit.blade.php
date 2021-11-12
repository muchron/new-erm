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
                            <input type="date" id="tgl_pertama" class="form-control" name="tgl_pertama" required value="{{$dateStart}}">
                        </div>
                        <div class="col-4">
                            <input type="date" id="tgl_kedua" class="form-control" name="tgl_kedua" required value="{{$dateNow}}">
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
                url:'/rekammedis/penyakit/json',
                data: {
                    tgl_pertama:tgl_pertama,
                    tgl_kedua:tgl_kedua,
                    status:status,
                    }
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
                $('#bulan').html('<strong style="font-size:1.2em">'+day1+' '+months[month1]+' '+year1+' s/d '+day2+' '+months[month2]+' '+year2+'</strong>');
                toastr.success('Pencarian Selesai');
                load_data(tgl_pertama, tgl_kedua, status);
            }else{
                toastr.error('Lengkapi Pilihan Pencarian');
            }
    });
    });
</script>
    
@endpush