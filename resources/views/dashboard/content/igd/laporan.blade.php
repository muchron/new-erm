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
                                <input type="date" class="form-control" id="tgl_pertama" name="tgl_pertama" value="{{date('Y-m-d')}}"/>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-group">
                                <input type="date" class="form-control" id="tgl_kedua" name="tgl_kedua" value="{{date('Y-m-d')}}"/>
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
                <div class="card-body">
                    <p class="mb-1 text-center">Jumlah Kunjungan</p>
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
                <div class="card-body">
                    <p class="mb-1 text-center">Jumlah Kunjungan</p>
                    <h1 id="ranap" class="mt-0 text-center"></h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function(){
        $.ajax({ 
                type: 'GET', 
                url: '/igd/json', 
                /*data: { tgl_pertama: tgl_pertama, tgl_kedua: tgl_kedua }, */
                dataType: 'json',
                success: function (data) { 
                    $.each(data, function(index, element) {
                        document.getElementById('ranap').innerHTML = element.ranap;
                        document.getElementById('ralan').innerHTML = element.ralan;
                    });
                }
            });
    });
</script>
@endpush