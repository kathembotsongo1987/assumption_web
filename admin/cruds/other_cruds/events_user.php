
<?php 
include 'dbconnection.php'; 
 session_start();

$religious_id = $_SESSION['religious_id'];

if(!isset($religious_id)){
   header('location:../../../login/login.php');

} 
?>
<!DOCTYPE html>  
<html>  
<head>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" /> 
<link href="../../css/styles.css" rel="stylesheet" />
        <script src="../../js/js_font.js"></script>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>  
<style>  
 body {  
  margin-top: 40px;  
  text-align: center;  
  font-size: 14px;  
  font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;  
  }  
 #calendar {  
  width: 650px;  
  margin: 0 auto;  
  }  
</style>
 <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <h3 style="color: white;">
                  <?php
                      $select_profile = $connection->prepare("SELECT * FROM `religious_tb` WHERE id = ?");
                      $select_profile->execute([$religious_id]);
                      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                  ?>
                <img style="width: 100%; height: 50px; border-radius: 50%;" src="upload/<?= $fetch_profile['image']; ?>" alt="">
                  <h3 style="color: white";><?= $fetch_profile['name']; ?></h3>
                  <a style="color: blue;" href="../../../login/religious_profile_update.php" class="btn"><h4>update profile</h4></a>
            </h3>
    </nav> 
              
    </head>
    <body>
   
</head>  
  
<body>
	<div class="wrapper">	
		<div class="container">			
			<div class="col-lg-12">  
 				<h2> Upcoming Events </h2>  
 				<br/>  
 				<div id='calendar'></div> 
 				<script>  
 $(document).ready(function() {  
  var date = new Date();  
  var d = date.getDate();  
  var m = date.getMonth();  
  var y = date.getFullYear();  
  
  var calendar = $('#calendar').fullCalendar({  
   editable: true,  
   header: {  
    left: 'prev,next today',  
    center: 'title',  
    right: 'month,agendaWeek,agendaDay'  
   },  
  
   events: "events/events.php",  
  });  
    
 });  
  
</script>  
<style>  
 body {  
  margin-top: 40px;  
  text-align: center;  
  font-size: 14px;  
  font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;  
  }  
 #calendar {  
  width: 650px;  
  margin: 0 auto;  
  }  
</style>
</head>  
<body>  
  <div id='calendar'></div>  
 </div>        
  </div>    
</div>
</body>  

<?php require 'layout_footer.php' ?>