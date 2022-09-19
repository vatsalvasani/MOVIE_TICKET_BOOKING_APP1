<?php

include("dbconnection.php");
$con = dbconnection();

if(isset($_POST["moviename"]))
{
    $moviename = $_POST["moviename"];
}
else 
{
    return;
}

if(isset($_POST["date1"]))
{
    $date1 = $_POST["date1"];
}
else 
{
    return;
}

if(isset($_POST["date2"]))
{
    $date2 = $_POST["date2"];
}
else 
{
    return;
}

if(isset($_POST["time"]))
{
    $time = $_POST["time"];
}
else 
{
    return;
}

$query = "SELECT * FROM `booked_ticket` WHERE `m_name`='$moviename' AND (`date`>='$date1' AND `date`<='$date2'>)  ``";
$exe = mysqli_query($con,$query);

$arr = [];

while($row = mysqli_fetch_array($exe))
{
    $arr[] = $row;
}
print(json_encode($arr));

?>