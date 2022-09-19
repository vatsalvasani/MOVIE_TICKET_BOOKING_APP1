<?php

function dbconnection(){
    $con = mysqli_connect("localhost","root","","movieticket");
    return $con;
}

?>