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

    <title> Log in </title>

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
        <div class="col-sm-6">
            <form action="" method="post">

    <!--Email input-->

                <!--Default-->

                <div class="form-group">
                    <label class="control-label" for="inputDefault"> Email </label>
                    <input type="email" class="form-control" id="inputDefault" name="login_email" placeholder="Your email">
                </div>

                <!--If empty-->

                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning"> Type your email here </label>
                    <input type="text" class="form-control" id="inputWarning" name="login_email" placeholder="Your email">
                </div>

                <!--If somebody uses same email-->

                <div class="form-group has-error">
                    <label class="control-label" for="inputError"> Somebody already uses this email </label>
                    <input type="text" class="form-control" id="inputError" name="login_email" placeholder="Your email">
                </div>

    <!--Password input-->

                <!--Dafault-->

                <div class="form-group">
                    <label class="control-label" for="inputDefault"> Password </label>
                    <input type="password" class="form-control" id="inputDefault" name="login_passsword" placeholder="Your password">
                </div>

                <!--If empty-->

                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning"> Type your password here </label>
                    <input type="text" class="form-control" id="inputWarning" name="login_passsword" placeholder="Your password">
                </div>

                <!--Wrong password-->

                <div class="form-group has-error">
                    <label class="control-label" for="inputError"> Wrong password </label>
                    <input type="text" class="form-control" id="inputError" name="login_passsword" placeholder="Your password">
                </div>

    <!--Radio button-->

                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="login_admin">
                        Log in as administrator.
                    </label>
                </div>

    <!--Submit button-->

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" style="float: right" name="login_submit"> Log in </button>
                </div>
            </form>
            <br>
            <br>
            <br>

    <!--If looged in corectly, hide all inputs and show following links  -->
            <p>
                <br><a href="product.php" class="btn btn-default btn-lg btn-block"> Show products </a>
                <br><a href="basket.php" class="btn btn-default btn-lg btn-block"> Show my basket </a>
                <br><a href="customer.php" class="btn btn-default btn-lg btn-block"> Show my profile </a>
                <br><a href="order.php" class="btn btn-default btn-lg btn-block"> Show history of my orders </a>
            </p>
        </div>
    </div>
</body>
</html>





