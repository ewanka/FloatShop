<?
session_start();
require_once("../MySQLConnection.php");
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Products </title>

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
        <div class="btn-group btn-group-justified">
            <a href="#" class="btn btn-default"> New   </a>
            <a href="#" class="btn btn-default"> hot price! </a>
            <a href="#" class="btn btn-default">  </a>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading"><strong> Flaming </strong></div>
                <div class="panel-body">
                    <img src="slider/flaming.jpg" alt="flaming" height="100%" width="100%"></a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor nibh lorem, ac hendrerit nunc volutpat quis. Donec convallis, ante vel vulputate interdum,                        arcu risus tincidunt neque, et maximus ante lorem dignissim tellus. Donec sagittis viverra velit nec maximus. Nam et tempor metus, vitae elementum nunc.
                    </p>


                    Price
                    Details
                    Add to basket
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading"><strong> Black swan </strong></div>
                <div class="panel-body">
                    <img src="slider/black_swan.jpg" alt="black_swan" height="100%" width="100%"></a>

                    Price
                    Details
                    Add to basket
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading"><strong> Unicorn </strong></div>
                <div class="panel-body">
                    <img src="slider/unicorn.jpg" alt="unicorn" height="100%" width="100%"></a>

                    Price
                    Details
                    Add to basket
                </div>
            </div>
        </div>
    </div>
</body>
</html>


