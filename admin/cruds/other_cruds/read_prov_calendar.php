

<?php require 'layout_header.php' ?>

				<!DOCTYPE html>  
<html>  
<head>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />  
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
</head>  
  
<body>
	<div class="wrapper">	
		<div class="container">			
			<div class="col-lg-12">  
 				<h2> Event Manipulation </h2>  
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
  
   						eventRender: function(event, element, view) {  
   							if (event.allDay === 'true') {  
     							event.allDay = true;  
    						} else {  
     							    event.allDay = false;  
    							}  
   						},  
   						selectable: true,  
   						selectHelper: true,  
   						select: function(start, end, allDay) {  
   						var title = prompt('Event Title:');  
  
   							if (title) {  
   								var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");  
   								var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");  
   								$.ajax({  
      									url: 'events/add_events.php',  
       								data: 'title='+ title+'&start='+ start +'&end='+ end,  
       								type: "POST",  
       								success: function(json) {  
      						    	alert('Added Successfully');
      						    	}  
   								});  
   								calendar.fullCalendar('renderEvent',  
   								{  
      							 title: title,  
       							 start: start,  
       							 end: end,  
       							 allDay: allDay  
   								},  
   								true  
   								);  
   							}  
   								calendar.fullCalendar('unselect');  
   								},  
  
   								editable: true,  
   								eventDrop: function(event, delta) {  
   								var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");  
   								var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");  
   								$.ajax({  
       								url: 'events/update_events.php',  
       								data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,  
       								type: "POST",  
      								success: function(json) {  
        							alert("Updated Successfully");  
       								}  
   								});  
   							},  
   								eventClick: function(event) {  
    							var decision = confirm("Do you really want to do that?");   
    							if (decision) {  
    							$.ajax({  
       							type: "POST",  
        						url: "events/delete_event.php",  
        						data: "&id=" + event.id,  
         						success: function(json) {  
            					$('#calendar').fullCalendar('removeEvents', event.id);  
              					alert("Updated Successfully");}  
    							});  
    						}  
   						 },  
   						eventResize: function(event) {  
      						 var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");  
       						 var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");  
       					$.ajax({  
        					url: 'events/update_events.php',  
        					data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,  
        					type: "POST",  
        					success: function(json) {  
         					alert("Updated Successfully");  
        				}  
       				});  
    			}     
  			});   
 		});  
	</script>
   </div>        
  </div>    
</div>
</body>  

<?php require 'layout_footer.php' ?>