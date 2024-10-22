<?php

include("dbcon.php");



$sql = "SELECT visit.visit_date, visit.visit_time , patient.Firstname AS PatientFirstname, patient.Surname AS PatientSurname,
doctor.Firstname AS DrFirstName, Doctor.surname AS DrLastName, doctor.specialism

FROM visit
INNER JOIN patient ON
visit.patient_id = patient.id
INNER JOIN doctor ON
visit.doctor_id = doctor.id";


$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result)) {
    $vdate = $row['visit_date'];
    $vtime = $row['visit_time'];
    //$pid = $row['patient_id'];
    $pfn = $row['PatientFirstname'];
    $psn = $row['PatientSurname'];
    $dfn = $row['DrFirstName'];
    $dsn = $row['DrLastName'];

    echo "<TR><TD>$vdate</TD><TD>$vtime</TD><TD>$pfn</TD><TD>$psn</TD><TD>$dfn</TD><TD>$dsn</TD>";    
}
mysqli_close($conn);
?>