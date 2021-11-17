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
                            <input type="date" id="tgl_pertama" class="form-control" name="tgl_pertama" required>
                        </div>
                        <div class="col-3">
                            <input type="date" id="tgl_kedua" class="form-control" name="tgl_kedua" required>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <select class="custom-select form-control-border" id="poli" name="kategori">
                                  <option hidden>Pilih Poli</option>
                                  <option value="S0003">Anak</option>
                                  <option value="S0001">Kandungan dan Kebidanan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <select class="custom-select form-control-border" id="dokter" name="dokter">
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

        // $('#dokter').hide();
        $('#poli').on('change', function() {
               var kd_poli = $(this).val();
               if(kd_poli) {
                   $.ajax({
                       url: '/poli/'+kd_poli,
                       type: "GET",
                       data : {"_token":"{{ csrf_token() }}"},
                       dataType: "json",
                       success:function(data)
                       {
                         if(data){
                            $('#dokter').empty();
                            $('#dokter').append('<option hidden>Pilih Dokter</option>'); 
                            $.each(data, function(key, dokter){
                                $('select[name="dokter"]').append('<option value="'+ dokter.kd_dokter +'">' + dokter.nm_dokter+ '</option>');
                            });
                        }else{
                            $('#dokter').empty();
                        }
                     }
                   });
               }else{
                 $('#dokter').empty();
               }
        });

        load_data();
        function load_data(tgl_pertama, tgl_kedua, kd_dokter='') {
            $('#table-kunjungan').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url:'/kunjungan/json',
                data: {
                    tgl_pertama:tgl_pertama,
                    tgl_kedua:tgl_kedua,
                    kd_dokter:kd_dokter,
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
                {data:'nm_pasien', name:'nm_pasien'},
                {data:'tgl_lahir', name:'tgl_lahir'},
                {data:'alamat', name:'alamat'},
                {data:'p_jawab', name:'p_jawab'},
                {data:'no_tlp', name:'no_tlp'},
                {data:'nm_dokter', name:'nm_dokter'},
                ],
            });
        }

        $('#cari').click(function(){
            var tgl_pertama = $('#tgl_pertama').val();
            var tgl_kedua = $('#tgl_kedua').val();
            var kd_dokter = $('#dokter').val();

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
                
                $('#table-dinkes').DataTable().destroy();
                $('#bulan').html('<strong style="font-size:1.2em">'+day1+' '+months[month1]+' '+year1+' s/d '+day2+' '+months[month2]+' '+year2+'</strong>');
                toastr.success('Pencarian Selesai');
                load_data(tgl_pertama, tgl_kedua, kd_dokter);
            }else{
                toastr.error('Lengkapi Pilihan Pencarian');
            }
    });
    });
</script>
    
@endpush