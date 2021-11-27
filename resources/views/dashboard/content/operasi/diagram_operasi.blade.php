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
            <div class="col-2">
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" id="yearpicker" class="form-control datetimepicker-input" data-toggle="datetimepicker" data-target="#yearpicker" autocomplete="off" />
                </div>
            </div>
            <div class="chart">
                <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
            
    </div>
</div>
@push('scripts')
<script>
    
    var scData = {!!json_encode($dataCaesar)!!};
    var curetageData = {!!json_encode($dataCuretage)!!};
    var lineChart;
    

    $('#yearpicker').datetimepicker({
        format: "YYYY",
        useCurrent: false,
        viewMode: "years"
    });

    
    $('#yearpicker').on('change.datetimepicker', function(){
        const tahun = $(this).val();
        $.ajax({
                url: '/diagram/operasi/'+tahun,
                type: "GET",
                data : {"_token":"{{ csrf_token() }}"},
                dataType: "json",
                success: function(data) {
                    scData = data.sc;
                    curetageData = data.curetage;
                    lineChart.destroy();
                    loadDiagram(scData, curetageData)
                }
        });
    });
    
    // console.log(curetageData)

    loadDiagram(scData, curetageData);

   
    function loadDiagram(scData, curetageData) {
        var diagramPenytakit = document.getElementById("lineChart");
        var dataFirst = {
            label: "Sectio Caesaria / SC",
            data: scData,
            lineTension: 0,
            borderWidth : 2,
            fill: false,
            borderColor: 'teal'
        };

        var dataSecond = {
            label: "Curetage",
            data: curetageData,
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

        lineChart = new Chart(diagramPenytakit, {
            type: 'line',
            data: dataPenyakit,
            options: chartOptions
        });
    }
    
</script>
@endpush