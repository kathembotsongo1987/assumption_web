<?php require_once 'progress_religious.php'; ?>
<!DOCTYPE html>

    <body>
        <div style="width:60%;hieght:20%;text-align:center">
            <h2 class="page-header" >Augustinians of the assumption Progress </h2>
            <p style="align:center;"><canvas  id="chartjs_bar"></canvas></p>
        </div>    
    </body>
  <script src="js/jquery.js"></script>
  <script src="js/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($year); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969aa",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750","#AAFFFF","#FFAA55","#D42AFF","#2AFF7F","#2AFFFF"
                            ],
                            data:<?php echo json_encode($religious); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: false,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
</html>