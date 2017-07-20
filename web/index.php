<?php
session_start();
require_once("../MySQLConnection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Homepage </title>

    <link href="../bootstrap/css/bootstrap.flatly.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

<?php
include_once("header.php");
?>

    <div class="container">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="slider/S_01.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="slider/S_02.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="slider/S_03.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="slider/S_05.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="slider/S_07.jpg" alt="...">
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>



<!--    Linki do grup produktów-->

<!--    <div>-->
<!--        <div class="container">-->
<!--            <p>-->
<!--                <a href="product.php"> Single matresses </a> <br>-->
<!--                <a href="product.php"> Double matresses </a> <br>-->
<!--                <a href="product.php"> Family matresses </a> <br>-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->

</body>
</html>
