<div class="col-12">
    <div class="card card-teal">
        <div class="card-header">
            <h3 class="card-title">Diagram Tindakan Operasi</h3>
            <div class="card-tools" id="bulan">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="chart">
                <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
            
    </div>
</div>
@push('scripts')
<script>
    var diagramPenytakit = document.getElementById("lineChart");
    var dataFirst = {
        label: "Sectio Caesaria / SC",
        data: {!!json_encode($dataCaesar)!!},
        lineTension: 0,
        borderWidth : 2,
        fill: false,
        borderColor: 'teal'
    };

    var dataSecond = {
        label: "Curetage",
        data: {!!json_encode($dataCuretage)!!},
        lineTension: 0,
        borderWidth : 2,
        fill: false,
        borderColor: 'salmon'
    };

    var dataPenyakit = {
    labels: {!!json_encode($label)!!},
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