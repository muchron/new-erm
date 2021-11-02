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
                        <div class="col-2">
                            <input type="date" id="tgl_pertama" class="form-control" name="tgl_pertama">
                        </div>
                        <div class="col-2">
                            <input type="date" id="tgl_kedua" class="form-control" name="tgl_kedua">
                        </div>
                        <div class="col-3">
                            <div class="form-group clearfix mt-2">
                                <div class="icheck-teal d-inline">
                                  <input type="radio" name="status" id="ralan">
                                  <label for="ralan">Rawat Jalan</label>
                                </div>
                                <div class="icheck-teal d-inline">
                                  <input type="radio" name="status" id="ranap">
                                  <label for="ranap">Rawat Inap</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <select class="custom-select form-control-border" id="kategori" name="kategori">
                                  <option selected disabled>Semua Kategori</option>
                                  <option value="anak">Anak</option>
                                  <option value="kandungan">Kandungan dan Kebidanan</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-1">
                            <button class="btn btn-info" style="width: 100%"><i class="fas fa-search"></i> Cari</button>
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
                <div class="card-body"></div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    
@endpush