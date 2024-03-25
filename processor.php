<?php
$con = new $mysqli("localhost", "root", "", "'kirinyaga");
if(!$con)
{
    echo "COULD NOT CONNECT TO THE DATABASE";

}
$sql= "SELECT * FROM student";
$result= $con->query($sql);
echo "<table border=1>";
echo"<th>"; 
echo"sadmno"; 
echo"</th>"; 
echo"<th>"; 
echo"sname"; 
echo"</th>"; 
while($row=$result->fetch_array())
{
    echo"<tr>";
    echo"<td>".$row['sadmno']."</td>";
    echo"<td>".$roe['sname']."</td>";
    echo"<tr>"; } 
    echo"</table>"; 
    ?>
