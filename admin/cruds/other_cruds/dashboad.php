
<?php require 'dbconnection.php'; ?>
<?php require_once 'progress_religious.php'; ?> 
<?php require 'layout_header.php'; ?>

<div class="card-group">
  <div class="card">
    <div class="card-body">
      
        <div style="text-align:center">
            <h2 class="page-header" >Geral Progress in East Africa </h2>
            <p style="align:center;"><canvas  id="chartjs_bar"></canvas></p>
        </div>    
    
  <script src="graphs/bar/js/jquery.js"></script>
  <script src="graphs/bar/js/Chart.min.js"></script>
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
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Tanzania</h5>
    </div>
  </div>
  <div class="card">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Uganda</h5>
    </div>
  </div>
</div>



<?php require 'layout_footer.php' ;?>

			
	