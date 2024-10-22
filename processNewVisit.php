<?php

include("dbcon.php");
$vdate = $_POST['visitDate'];
$vtime = $_POST['visitTime'];
$docid = $_POST['docid'];
$ptntid = $_POST['ptntid'];
$cost = $_POST['cost'];


$sql = " Insert into visit(visit_date,visit_time,doctor_id,patient_id,cost) values('$vdate','$vtime','$docid','$ptntid',$cost)";
//echo $sql;
mysqli_query($conn,$sql);




?>