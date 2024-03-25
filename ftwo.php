<?php
$sadmno = $_POST['sadmno'];
$sname = $_POST['sname'];
$con = new mysqli("localhost", "root", "jMm@0000", "kirinyaga");
if(!$con)
{
    echo "COULD NOT CONNECT TO THE DATABASE";
}
$sql = "INSERT INTO student VALUES('$sadmno', '$sname')";
$result = $con->query($sql);
echo "record successfully added";
?>