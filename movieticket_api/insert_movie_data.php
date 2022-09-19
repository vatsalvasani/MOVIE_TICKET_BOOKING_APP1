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



$query = "INSERT INTO `movies`(`movie_name`, `release_date`, `review`, `total_collection`, `last_date`, `movie_caption`, `movie_image`, `actor1`, `actor2`, `actor3`, `director`, `singer`, `producer`, `composer`, `actor1_caption`, `actor1_image`, `actor2_caption`, `actor2_image`, `actor3_caption`, `actor3_image`) VALUES ('$moviename','$releasedate','$review','$totalcollection','$lastdate','$moviecaption','$movieimage','$actor1','$actor2','$actor3','$director','$singer','$producer','$composer','$actor1caption','$actor1image','$actor2caption','$actor2image','$actor3caption','$actor3image')";
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