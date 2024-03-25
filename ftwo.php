<?php
$sadmno = $_POST['sadmno'];
$sname = $_POST[ 'sname' ];
$con = new mysqli("localhost", "", "kirinyaga");
if(!$con)
{
    echo "COULD NOT CONNECT TO THE DATABASE";
}
$sql = "INSERT INTO student VALUES('$sadmno', '$name')";
$result = SCON-