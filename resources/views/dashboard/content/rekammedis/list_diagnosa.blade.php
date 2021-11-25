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
                            <input type="date" id="tgl_pertama" class="form-control" name="tgl_pertama" value="{{$dateStart}}">
                        </div>
                        <div class="col-3">
                            <input type="date" id="tgl_kedua" class="form-control" name="tgl_kedua" value="{{$dateNow}}">
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
                                  <option value="">Semua Kategori</option>
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
                    <div class="card-tools mr-4" id="bulan">
                        <span style="font-size: 1.2em"><strong>{{$month}}</strong></span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-bordered text-sm" id="table-diagnosa" style="width: 100%" cellspacing="0">
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
            ajax: {
                url:'rekammedis/json',
                data: {
                    tgl_pertama:tgl_pertama,
                    tgl_kedua:tgl_kedua,
                    status:status,
                    kategori:kategori
                    }
                },
            processing: true,
            serverSide: true,
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
            var kategori = '%'+$('#kategori').val()+'%';
            
            if (tgl_pertama != '' &&  tgl_kedua != '' && status!='' && kategori!=''){
                $('#table-diagnosa').DataTable().destroy();
                toastr.success('Pencarian Selesai');
                load_data(tgl_pertama, tgl_kedua, status, kategori);
            }else{
                toastr.error('Lengkapi Pilihan Pencarian');
            }
    });
    });
</script>
    
@endpush