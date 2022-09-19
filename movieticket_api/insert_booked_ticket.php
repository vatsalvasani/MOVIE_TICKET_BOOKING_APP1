<?php
include("dbconnection.php");
$con = dbconnection();

if(isset($_POST["c_name"]))
{
    $c_name = $_POST["c_name"];
}
else 
{
    return;
}

if(isset($_POST["m_name"]))
{
    $m_name = $_POST["m_name"];
}
else 
{
    return;
}

if(isset($_POST["date"]))
{
    $date = $_POST["date"];
}
else 
{
    return;
}

if(isset($_POST["price"]))
{
    $price = $_POST["price"];
}
else 
{
    return;
}
if(isset($_POST["timing"]))
{
    $timing = $_POST["timing"];
}
else 
{
    return;
}

if(isset($_POST["screenno"]))
{
    $screenno = $_POST["screenno"];
}
else 
{
    return;
}
if(isset($_POST["seatno"]))
{
    $seatno = $_POST["seatno"];
}
else 
{
    return;
}

if(isset($_POST["no_of_seats"]))
{
    $no_of_seats = $_POST["no_of_seats"];
}
else 
{
    return;
}

$query = "INSERT INTO `booked_ticket`(`c_name`, `m_name`, `date`, `price`, `timing`, `screenno`, `seatno`, `no_of_seats`) VALUES ('$c_name','$m_name','$date','$price','$timing','$screenno','$seatno','$no_of_seats')";
$exe = mysqli_query($con,$query);
$arr=[];
if($exe)
{
    $arr["success"] = "true";
}
else
{
    $arr["success"] = "false";
}
print(json_encode($arr));

?>