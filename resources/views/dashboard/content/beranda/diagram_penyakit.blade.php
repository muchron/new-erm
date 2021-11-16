@extends('dashboard.layouts.main')

@section('content')
<div class="col-md-12">
    <!-- LINE CHART -->
    <div class="card card-teal">
      <div class="card-header">
        <h3 class="card-title">Line Chart</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="chart">
          <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection

@push('scripts')
<script>
    var diagramPenytakit = document.getElementById("lineChart");
    var dataFirst = {
        label: "Car A - Speed (mph)",
        data: [0, 59, 75, 20, 20, 55, 40],
        lineTension: 0,
        borderWidth : 2,
        fill: false,
        borderColor: 'teal'
    };

    var dataSecond = {
        label: "Car B - Speed (mph)",
        data: [20, 15, 60, 60, 65, 30, 70],
        lineTension: 0,
        borderWidth : 2,
        fill: false,
        borderColor: 'salmon'
    };

    var dataPenyakit = {
    labels: ["0s", "10s", "20s", "30s", "40s", "50s", "60s"],
    datasets: [dataFirst, dataSecond]
    };

    var chartOptions = {
    legend: {
        display: true,
        position: 'top',
        labels: {
            boxWidth: 12,
            fontColor: 'black'
        }
    }
    };

    var lineChart = new Chart(diagramPenytakit, {
    type: 'line',
    data: dataPenyakit,
    options: chartOptions
    });
</script>
@endpush