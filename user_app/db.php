<?php
$con=new mysqli('db','root','password','users_app');
if(!$con){
    die(mysqli_error($con));
}