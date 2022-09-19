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

if(isset($_POST["screenno"]))
{
    $screenno = $_POST["screenno"];
}
else 
{
    return;
}

if(isset($_POST["totalseats"]))
{
    $totalseats = $_POST["totalseats"];
}
else 
{
    return;
}

if(isset($_POST["bookedseats"]))
{
    $bookedseats = $_POST["bookedseats"];
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

if(isset($_POST["date"]))
{
    $date = $_POST["date"];
}
else 
{
    return;
}

if(isset($_POST["moviecaption"]))
{
    $moviecaption = $_POST["moviecaption"];
}
else 
{
    return;
}
if(isset($_POST["movieimage"]))
{
    $movieimage = $_POST["movieimage"];
}
else 
{
    return;
}


$query = "INSERT INTO `upcoming_shows`(`moviename`, `screenno`, `total_seats`, `booked_seats`, `price`, `timing`, `date`, `movie_caption`, `movie_image`) VALUES ('$moviename','$screenno','$totalseats','$bookedseats','$price','$timing','$date','$moviecaption','$movieimage')";
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