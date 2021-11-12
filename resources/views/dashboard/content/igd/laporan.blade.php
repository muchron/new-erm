@extends('dashboard.layouts.main')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-teal">
            <div class="card-header">
                <h1 class="card-title">Pencarian Data IGD</h1>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Date:</label>
                    <div class="row">

                        <div class="col-4">
                            <div class="input-group">
                                <input type="date" class="form-control" id="tgl_pertama" name="tgl_pertama" value="{{$dateStart}}"/>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-group">
                                <input type="date" class="form-control" id="tgl_kedua" name="tgl_kedua" value="{{$dateNow}}"/>
                            </div>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-info" id="cari"><i class="fas fa-search"></i> Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-6">
            <div class="card card-teal">
                <div class="card-header">
                    <h3 class="card-title">{{$title}} : Rawat Jalan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-2">
                    <p class="m-0 text-center">Jumlah Kunjungan</p>
                    <p class="m-0 text-center tanggal" ><strong>{{$month}}</strong></p>
                    <h1 id="ralan" class="mt-0 text-center"></h1>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card card-teal">
                <div class="card-header">
                    <h3 class="card-title">{{$title}} : Rawat Inap</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-2">
                    <p class="m-0 text-center">Jumlah Kunjungan</p>
                    <p class="m-0 text-center tanggal"><strong>{{$month}}</strong></p>
                    <h1 id="ranap" class="mt-0 text-center"></h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){

        load_data();

        function load_data(tgl_pertama='', tgl_kedua=''){
            $.ajax({ 
                    url: '/igd/json', 
                    data: { tgl_pertama: tgl_pertama, tgl_kedua: tgl_kedua },
                    dataType: 'json',
                    success: function (data) { 
                        $.each(data, function(index, element) {
                            document.getElementById('ranap').innerHTML = element.ranap;
                            document.getElementById('ralan').innerHTML = element.ralan;
                        });
                    }
            });
        }

        $('#cari').click(function(){

            var tgl_pertama = $('#tgl_pertama').val();
            var tgl_kedua = $('#tgl_kedua').val();
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
                
            toastr.success('Pencarian Selesai');
            $('.tanggal').html('<strong>'+day1+' '+months[month1]+' '+year1+' s/d '+day2+' '+months[month2]+' '+year2+'</strong>');
            load_data(tgl_pertama, tgl_kedua);

        });

    });
</script>
@endpush