<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" type="text/css" rel="stylesheet"/>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="lib/bootstrap.js"></script>
    <link rel="stylesheet" href="lib/bootstrap.css">
    <title>website</title>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand"><p style="font-size: 30px"></p></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="user/login.php"><p style="font-size: 25px">
                                <?php
                                session_start();
                                $username = $_SESSION['username'];
                                echo $username;

                                ?>
                            </p></a></li>
                    <li><a href="user/register.php"><p style="font-size: 25px">退出</p></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="biaoqian1"><a href="index.php" style="color: #f4f4f4; text-decoration: none;padding: " >website</a></div>
<body style="padding-top: 50px">
<div id="quanju">
    <nav class="navbar" style=" width: 80%;
    height: auto;
    margin: auto;
    padding: 20px;">
      <!--  <ul class="nav nav-pills">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">Profile</a></li>
            <li role="presentation"><a href="#">Messages</a></li>
        </ul>-->
        <div>
            <ul class="nav navbar-nav" style="font-size: 28px; " >
                <li><a href="" style="color: #1a1a1a; text-decoration: none;">首页</a></li>
                <li><a href="" style="color: #1a1a1a; text-decoration: none;">动画</a></li>
                <li><a href="" style="color: #1a1a1a; text-decoration: none;">番剧</a></li>
                <li><a href="" style="color: #1a1a1a; text-decoration: none;">科技</a></li>
                <li><a href="" style="color: #1a1a1a; text-decoration: none;">鬼畜</a></li>
                <li><a href="" style="color: #1a1a1a; text-decoration: none;">特摄</a></li>
                <li><a href="" style="color: #1a1a1a; text-decoration: none;">电视</a></li>
                <li><a href="" style="color: #1a1a1a; text-decoration: none;">电影</a></li>

            </ul>
        </div>
    </nav>
   <!-- <div id="top"  style=" margin: auto;width: 80%%;height: 45px; background: #e99b8f;font-size: 28px; text-align: center">
        <a id="top biaoqian1" href="index.php">首页</a>
        <a id="top biaoqian1"href="">动画</a>
        <a id="top biaoqian1"href="">番剧</a>
        <a id="top biaoqian1"href="">国创</a>
        <a id="top biaoqian1"href="">科技</a>
        <a id="top biaoqian1"href="">鬼畜</a>
        <a id="top biaoqian1"href="">电影</a>
        <a id="top biaoqian1"href="">电视</a>
        <a id="top biaoqian1" href="">特摄</a> </div>
    <br>-->
    <aside id="right" align="center" style="  width: 45px;   height: auto; background: #bf6900; position: fixed; left: 90%;">
        <a href="index.php">首页</a><br/>
        <a>动画</a><br/>
        <a>番剧</a><br/>
        <a>国创</a><br/>
        <a>科技</a><br/>
        <a>鬼畜</a><br/>
        <a>电影</a><br/>
        <a>电视</a><br/>
        <a>特摄</a><br/>
    </aside>
    <div style="padding-top: 20px ; width: 80%; height: auto; margin: auto; ">
        <div><p id="fqbq1"><a href="" style="color: #1a1a1a;text-decoration: none;">动画</a></p>
        </div>
        <br>
        <div><p id="fqbq1">番剧</p>
        </div><br>
        <div><p id="fqbq1">国创</p>
        </div><br>
        <div><p id="fqbq1">科技</p>
        </div><br>
        <div><p id="fqbq1">鬼畜</p>
        </div><br>
        <div><p id="fqbq1">电影</p>
        </div><br>
        <div><p id="fqbq1">电视</p>
        </div><br>
        <div><p id="fqbq1">特摄</p>
        </div><br>
    </div>
    <div id="dibuneirong" align="center"><br>
        炫098<br>
        qq：931340447<br>
        邮箱：931340447@qq.com<br>
        AV419<br>
        如有问题请联系我！！！！！！！<br>
        <script>
            document.write(Date());
        </script>
    </div>
</div>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: xwr
 * Date: 2019/3/13
 * Time: 16:32
 */