<?php
include("dbconnection.php");
$con = dbconnection();

if(isset($_POST["name"]))
{
    $name = $_POST["name"];
}
else 
{
    return;
}

if(isset($_POST["email"]))
{
    $email = $_POST["email"];
}
else 
{
    return;
}

if(isset($_POST["phone"]))
{
    $phone = $_POST["phone"];
}
else 
{
    return;
}

if(isset($_POST["password"]))
{
    $password = $_POST["password"];
}
else 
{
    return;
}
if(isset($_POST["recovery"]))
{
    $recovery = $_POST["recovery"];
}
else 
{
    return;
}

$query = "INSERT INTO `user_table` (`uname`,`uemail`,`uphone`,`upassword`,`urecovery`) VALUES ('$name','$email','$phone','$password','$recovery')";
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