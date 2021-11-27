<div class="col-12">
    <div class="card card-teal">
        <div class="card-header">
            <h3 class="card-title">Diagram Persalinan Tahun {{date('Y')}}</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="chart">
                <canvas id="diagramPersalinan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>

    var dokter;
    var tahun;
    load_diagram(dokter, tahun);

    function load_diagram(dokter, tahun){


        var labels = ['1', '1', '1','1','1','1','1'];

        var dataDokter1 = {
            label: "Dokter1",
            data: [20,41,38,79,56,32,47],
            backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(255, 159, 64, 0.2)',
            'rgba(255, 205, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
            ],
            borderWidth: 1
        };

        var dataDokter2 = {
            label: "Dokter2",
            data: [95,68,41,96,65,74,90],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
            'rgb(255, 99, 132)',
            'rgb(255, 159, 64)',
            'rgb(255, 205, 86)',
            'rgb(75, 192, 192)',
            'rgb(54, 162, 235)',
            'rgb(153, 102, 255)',
            'rgb(201, 203, 207)'
            ],
            borderWidth: 1
        };

        var dataPersalinan = {
            label : labels,
            datasets : [dataDokter1, dataDokter2],
        }

        var myChart = new Chart(document.getElementById('diagramPersalinan'), 
        {
            type: 'bar',
            data: dataPersalinan,
            options: {
                scales: {
                y: {
                    beginAtZero: true
                }
                }
            },
        });
    }


    
</script>
@endpush