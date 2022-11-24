
<?php   session_start(); ?>
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
            <?php  
            if(isset($_SESSION["username"]))  
            {  
             echo '<h3 style="color:white;">Welcome - '.$_SESSION["username"].', enjoy our service</h3>'; 
            }  
            else  
                {  
                header("location:../../../login/login_religious.php");  
                }  
                ?>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
            <a class="nav-link" href="../../../index.php"><i class="fas fa-home fa-fw" style="color:blue; font-size:40px;"></i></a>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">                               
                <?php echo '<br /><br /><a style="color:white;" href="../../../login/logout.php"><i class="fas fa-lock fa-fw"></i></a>'; ?>
            </ul>
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