<?php

include("dbconnection.php");
$con = dbconnection();

$query = "SELECT * FROM `passedout_shows`";
$exe = mysqli_query($con,$query);

$arr = [];

while($row = mysqli_fetch_array($exe))
{
    $arr[] = $row;
}
print(json_encode($arr));

?>