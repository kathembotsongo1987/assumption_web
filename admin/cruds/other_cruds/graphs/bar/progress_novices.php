<?php
$con  = mysqli_connect("localhost","root","","newaadb");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM statistics";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
            $year[]  = $row['year'];
            $novices[] = $row['novices'];
        }
 
 
 }
 
 
?>