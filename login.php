<?php
if(isset($_POST['submit'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $us= 'admin';
    $pas= 'admin';
    if(($user== $us) && ($pass== $pas)){
        header("Location: index.html");
die();
    }
    else{
        echo("Username or Password are wrong");
    }
}
?>