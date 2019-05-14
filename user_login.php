<?php
//普通用户登录
require_once 'user_conn.php';

$conn = connentDb();

/*if (!isset($_POST['submit'])){
    die('no1');
}*/

if (!isset($_POST['username'])||!isset($_POST['Password'])){
    die('no2');
}

$username = $_POST['username'];

$Password = $_POST['Password'];

session_start();
$_SESSION['username'] = $username;
$_SESSION['Password'] = $Password;

header('Location:admin_login.php');

$sql = "SELECT * FROM user WHERE username = '$username' AND  password = '$Password' limit 1";

$che = mysqli_query($conn,$sql);

$result = mysqli_fetch_array($che);


echo $sql;


if ($result){

    //echo '1';
    header('Location:http://localhost/website/user_index.php');
    //header('Location:http://localhost/website/admin/admin.php');
}else{

   die('no');
}