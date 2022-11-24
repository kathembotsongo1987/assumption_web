<?php   session_start(); ?>
<!DOCTYPE html>  
<html>  
<head>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
<link href="../../../css/styles.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>  
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
  
   events: "events.php",  
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
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <?php  
            if(isset($_SESSION["username"]))  
            {  
             echo '<h3 style="color:white;">Welcome - '.$_SESSION["username"].', enjoy our service</h3>'; 
            }  
            else  
                {  
                header("location:../../../login_religious.php");  
                }  
                ?>
            </nav>
 <h2> Upcoming Events in the Vice Province </h2>  
 <br/>  
 <div id='calendar'></div>  
</body>  
  
</html>  