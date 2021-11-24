@extends('dashboard.layouts.main')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-teal">
            <div class="card-header">
                <h1 class="card-title">Pencarian Data Operasi</h1>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Date:</label>
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
                            <select name="operasi" id="operasi" class="custom-select form-control-border">
                                <option hidden>Tindakan Operasi</option>
                                <option value="" >Semua Tindakan</option>
                                <option value="sc">Sectio Caesaria / SC</option>
                                <option value="curetage">Curetage</option>
                            </select>
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
                                        <th>Tanggal Operasi</th>
                                        <th>Nama Operasi</th>
                                        <th>Dokter Operator</th>
                                        <th>Dokter Anestesi</th>
                                        <th>Dokter Anak</th>
                                        <th>Asisten</th>
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
            ajax: {
                url:'operasi/json',
                data: {
                    tgl_pertama:tgl_pertama,
                    tgl_kedua:tgl_kedua,
                    operasi:operasi
                }
            },
            processing: true,   
            serverSide: true,
            lengthChange: true,
            ordering: false,
            scrollY: "350px",
            scrollX: true,
            paging:true,
            dom: 'Blfrtip',
            scroller : {
                loadingIndicator: true
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
                {extend: 'copy', text:'<i class="fas fa-copy"></i> Salin',className:'btn btn-info', title: 'laporan-kunjungan-pasien-rawat-jalan{{date("dmy")}}'},
                {extend: 'csv',  text:'<i class="fas fa-file-csv"></i> CSV',className:'btn btn-info', title: 'laporan-kunjungan-pasien-rawat-jalan{{date("dmy")}}'},
                {extend: 'excel', text:'<i class="fas fa-file-excel"></i> Excel',className:'btn btn-info', title: 'laporan-kunjungan-pasien-rawat-jalan{{date("dmy")}}'},
            ],
            columns: [
                { data: 'no_rawat', name: 'no_rawat',},
                { data: 'tgl_operasi', name: 'tgl_operasi',},
                { data: 'nama_operasi', name: 'nama_operasi',},
                { data: 'dokter', name: 'dokter',},
                { data: 'dokterAnestesi', name: 'dokterAnestesi',},
                { data: 'dokterAnak', name: 'dokterAnak',},
                
                {
                    target:[4],
                    data: 'asisten1',
                    render: function(data, type, row, meta){
                        return '<ul class="m-0"><li><b>Asisten 1 </b>: '+row.asisten1+'</li>'+
                        '<li><b>Asisten 2</b> : '+row.asisten2+'</li>'+
                        '<li><b>Asisten Anes.</b> : '+row.asistenAnestesi+'</li>'+
                        '<li><b>Onloop</b> : '+row.omloop+'</li></ul>'
                    },
                    name:'asisten1'

                },
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