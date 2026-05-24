<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "2526_01" && $password == "12345678"){

    $_SESSION['login'] = true;

    header("location:index.php");

}else{

    echo "Login gagal";

}

?>