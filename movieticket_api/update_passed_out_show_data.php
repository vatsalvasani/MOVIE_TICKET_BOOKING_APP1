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
if(isset($_POST["totalcollection"]))
{
    $totalcollection = $_POST["totalcollection"];
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
if(isset($_POST["date"]))
{
    $date = $_POST["date"];
}
else 
{
    return;
}
$query = "INSERT INTO `passedout_shows`(`movie_name`, `screenno`, `total_seats`, `booked_seats`, `price`, `total_collection`, `timing`, `movie_caption`, `movie_image`, `date`) VALUES ('$moviename','$screenno','$totalseats','$bookedseats','$price','$totalcollection','$timing','$moviecaption','$movieimage','$date')";

$query = "UPDATE `passedout_shows` SET `screenno`= '$screenno',`total_seats`= '$total_seats',`booked_seats`= '$booked_seats',`price`= '$price',`total_collection`='$total_collection',`timing`='$timing',`movie_caption`='$movie_caption',`movie_image`='movie_image',`date`='$data', WHERE `moviename`='$moviename'";

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