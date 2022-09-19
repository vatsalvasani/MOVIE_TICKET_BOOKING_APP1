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

if(isset($_POST["review1"]))
{
    $review1 = $_POST["review1"];
}
else 
{
    return;
}

if(isset($_POST["review2"]))
{
    $review2 = $_POST["review2"];
}
else 
{
    return;
}



$query = "SELECT * FROM `movies` WHERE `movie_name`='$moviename' AND (`review`>='$review1' AND `review`<='$review2'>)  ``";
$exe = mysqli_query($con,$query);

$arr = [];

while($row = mysqli_fetch_array($exe))
{
    $arr[] = $row;
}
print(json_encode($arr));

?>