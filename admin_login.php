<?php
//№ЬАнФ±µЗВј
require_once 'user_conn.php';

$conn = connentDb();

session_start();

$username = $_SESSION['username'];

$password = $_SESSION['Password'];

$sql = "SELECT * FROM admin WHERE username='$username' AND password = '$password'";

$che = mysqli_query($conn,$sql);

$result = mysqli_fetch_array($che);

if ($result){
    //echo '55';
    header('Location:http://localhost/website/admin/admin.php');

}else{
    header('Location:user_login.php');
}