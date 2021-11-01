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
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped dataTable" width="100%">
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
                                <tbody>
                                    @foreach ($data as $data )
                                    <tr role="row">
                                        <td>{{$data->no_rawat}}</td>
                                        <td>{{$data->tgl_operasi}}</td>
                                        <td>{{$data->paketOperasi->nm_perawatan}}</td>
                                        <td>{{$data->dokter->nama}}</td>
                                        <td>{{$data->assisten1->nama}}</td>
                                        <td>{{$data->assisten2->nama}}</td>
                                        <td>{{$data->dokterAnestesi->nama}}</td>
                                        <td>{{$data->asistenAnestesi->nama}}</td>
                                        <td>{{$data->dokterAnak->nama}}</td>
                                        <td>{{$data->pembiayaan->png_jawab}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
  </div>
@endsection