<div class="col-md-10">
    <div class="card">
        <div class="card-header">
            Informasi kategori
        </div>
        <div class="card-body">
            <div id="mygraph"></div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>/assets/js/jquery/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/highcharts/highcharts.js"></script>

<script>
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({

            chart: {
                renderTo: 'mygraph',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Lowongan tersedia '
            },
            tooltip: {
                formatter: function() {
                    return '<b>' +
                        this.point.name + '</b>: ' + this.y;
                }
            },

            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: 'green',
                        formatter: function() {
                            return '<b>' + this.point.name + '</b>: ' + Highcharts.numberFormat(this.percentage, 2) + ' % ';
                        }
                    }
                }
            },

            series: [{
                type: 'pie',
                data: [
                    <?php for ($i = 0; $i < count($data_low); $i++) { ?> {
                            name: '<?php echo $data_low[$i]["nama"]; ?>',
                            y: <?php echo $data_low[$i]["nilai"]; ?>
                        },
                    <?php } ?>
                ]
            }]
        });
    });
</script>