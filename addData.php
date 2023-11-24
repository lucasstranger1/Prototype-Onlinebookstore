<?php
include 'connect.php';
$dbname="myDB";

$sql="INSERT INTO myStudent (id, firstname, lastname, email)
values ('134', 'John', 'Doe','jd123@phpworld.com')";
$sql.="INSERT INTO myStudent (id, firstname, lastname, email)
values ('135', 'Mary', 'Moe','mm123@gmail.com')";
$sql.="INSERT INTO myStudent (id, firstname, lastname, email)
values ('136', 'Julie', 'Dooley','jd321@gmail.com')";


    if(mysqli_multi_query($conn, $sql)){
        echo "New record created successfull";
    }else{
        echo "Error: ".$$sql."<br>".mysqli_error($conn);
    }
mysqli_close($conn);
?>
