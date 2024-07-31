<?php

echo " Welcome to the stage where we are ready";

$servername = "localhost";
$username = "root";
$password = ""
$databse = "form"

$conn = mysqli_connect($servername,$username,$password,$databse);
if (!$conn){
    die("Sorry we are failed :". mysqli_connect_error());
}
echp "Connection was successful";

?>