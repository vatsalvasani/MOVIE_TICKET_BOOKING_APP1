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

if(isset($_POST["releasedate"]))
{
    $releasedate = $_POST["releasedate"];
}
else 
{
    return;
}

if(isset($_POST["review"]))
{
    $review = $_POST["review"];
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
if(isset($_POST["lastdate"]))
{
    $lastdate = $_POST["lastdate"];
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

if(isset($_POST["actor1"]))
{
    $actor1 = $_POST["actor1"];
}
else 
{
    return;
}

if(isset($_POST["actor2"]))
{
    $actor2 = $_POST["actor2"];
}
else 
{
    return;
}
if(isset($_POST["actor3"]))
{
    $actor3 = $_POST["actor3"];
}
else 
{
    return;
}

if(isset($_POST["director"]))
{
    $director = $_POST["director"];
}
else 
{
    return;
}

if(isset($_POST["singer"]))
{
    $singer = $_POST["singer"];
}
else 
{
    return;
}
if(isset($_POST["producer"]))
{
    $producer = $_POST["producer"];
}
else 
{
    return;
}

if(isset($_POST["composer"]))
{
    $composer = $_POST["composer"];
}
else 
{
    return;
}

if(isset($_POST["actor1caption"]))
{
    $actor1caption = $_POST["actor1caption"];
}
else 
{
    return;
}

if(isset($_POST["actor1image"]))
{
    $actor1image = $_POST["actor1image"];
}
else 
{
    return;
}

if(isset($_POST["actor2caption"]))
{
    $actor2caption = $_POST["actor2caption"];
}
else 
{
    return;
}

if(isset($_POST["actor2image"]))
{
    $actor2image = $_POST["actor2image"];
}
else 
{
    return;
}

if(isset($_POST["actor3caption"]))
{
    $actor3caption = $_POST["actor3caption"];
}
else 
{
    return;
}

if(isset($_POST["actor3image"]))
{
    $actor3image = $_POST["actor3image"];
}
else 
{
    return;
}

$query = "UPDATE `movies` SET `release_date`='$releasedate', `review` = '$review', `total_collection` = '$totalcollection', `last_date` = '$lastdate', `movie_caption`='$moviecaption', `movie_image`='$movieimage', `actor1`='$actor1', `actor2`='$actor2', `actor3`='$actor3', `director`='$director', `singer`='$singer', `producer`='$producer', `composer`='$composer', `actor1_caption`='$actor1caption', `actor1_image`='$actor1image', `actor2_caption`='$actor2caption', `actor2_image`='$actor2image', `actor3_caption`='$actor3caption', `actor3_image`='$actor3caption' WHERE `movie_name`='$moviename'";
$exe = mysqli_query($con,$query);
$arr = [];

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
