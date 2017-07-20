<?
session_start();
require_once("../MySQLConnection.php");
//require_once("../src/Customer.php");
//$customer = new Customer(null, "Ewa", "Nowak", "email@email.com", "lubieplacki");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Profile </title>

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

<!--DATA-->

    <!--If data set-->

            <div>
                <p>
                    <strong> Name </strong><br>
                    <!--Dane z $customer->getName()-->
                    <strong> Surname </strong><br>
                    <!--Dane z $customer->getSurname()-->
                    <strong> Email </strong><br>
                    <!--Dane z $customer->getEmail()-->
                </p>
            </div>
            <div>
                <button type="submit" class="btn btn-default" style="float: right" name="data_edit"> Edit </button><br><br><br>
            </div>

    <!--Edit data-->

        <!--Name-->

            <!--Default-->

            <div class="form-group">
                <label class="control-label" for="inputDefault"> Name </label>
                <input type="text" class="form-control" id="inputDefault" name="name" placeholder="Your name">
            </div>

            <!--If empty-->

            <div class="form-group has-warning">
                <label class="control-label" for="inputWarning"> Type your name here </label>
                <input type="text" class="form-control" id="inputWarning" name="name" placeholder="Your name">
            </div>

        <!--Surname-->

            <!--Default-->

            <div class="form-group">
                <label class="control-label" for="inputDefault"> Surname </label>
                <input type="text" class="form-control" id="inputDefault" name="surname" placeholder="Your surname">
            </div>

            <!--If empty-->

            <div class="form-group has-warning">
                <label class="control-label" for="inputWarning"> Type your surname here </label>
                <input type="text" class="form-control" id="inputWarning" name="surname" placeholder="Your surname">
            </div>

        <!--Email-->

            <!--Default-->

            <div class="form-group">
                <label class="control-label" for="inputDefault"> Email </label>
                <input type="email" class="form-control" id="inputDefault" name="email" placeholder="Your email">
            </div>

            <!--If empty-->

            <div class="form-group has-warning">
                <label class="control-label" for="inputWarning"> Type your email here </label>
                <input type="email" class="form-control" id="inputWarning" name="email" placeholder="Your email">
            </div>

            <!--If somebody uses same email-->

            <div class="form-group has-error">
                <label class="control-label" for="inputError"> Somebody already uses this email </label>
                <input type="email" class="form-control" id="inputError" name="email" placeholder="Your email">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" style="float: right" name="data_submit"> Save </button><br><br><br>
            </div>

<!--ADDRESS-->

    <!--If address set-->
            <div>
                <p>
                    <strong> Address </strong><br>
                        <!--Dane z $customer->getAddress()-->
                    <strong> Postal code </strong><br>
                        <!--Dane z $customer->getPostalCode()-->
                    <strong> City </strong><br>
                        <!--Dane z $customer->getCity()-->
                </p>
            </div>
            <div>
                <button type="submit" class="btn btn-default" style="float: right" name="address_edit"> Edit </button><br><br><br>
            </div>

    <!--Edit address-->

        <!--Address-->

            <!--Default-->

            <div class="form-group">
                <label class="control-label" for="inputDefault"> Address </label>
                <input type="text" class="form-control" id="inputDefault" name="address" placeholder="Your address">
            </div>

            <!--If empty-->

            <div class="form-group has-warning">
                <label class="control-label" for="inputWarning"> Type your address here </label>
                <input type="text" class="form-control" id="inputWarning" name="address" placeholder="Your name">
            </div>

        <!--Postal code-->

            <!--Default-->

            <div class="form-group">
                <label class="control-label" for="inputDefault"> Postal code </label>
                <input type="text" class="form-control" id="inputDefault" name="postal_code" placeholder="Your postal code">
            </div>

            <!--If empty-->

            <div class="form-group has-warning">
                <label class="control-label" for="inputWarning"> Type your postal code here </label>
                <input type="text" class="form-control" id="inputWarning" name="postal_code" placeholder="Your postal code">
            </div>

        <!--City-->

            <!--Default-->

            <div class="form-group">
                <label class="control-label" for="inputDefault"> City </label>
                <input type="text" class="form-control" id="inputDefault" name="city" placeholder="Your city">
            </div>

            <!--If empty-->

            <div class="form-group has-warning">
                <label class="control-label" for="inputWarning"> Type your city here </label>
                <input type="text" class="form-control" id="inputWarning" name="city" placeholder="Your city">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" style="float: right" name="address_submit"> Save </button><br><br><br>
            </div>

<!--PASSWORD-->

    <!--If password set-->

        <!--Password-->

            <div>
                <p>
                    <strong> Password </strong><br>
                    <!--Dane z $customer->getPassword()-->
                </p>
            </div>
            <div>
                <button type="submit" class="btn btn-default" style="float: right" name="password_edit"> Edit </button><br><br><br>
            </div>

    <!--Edit password-->

        <!--Password-->

            <!--Default-->

            <div class="form-group">
                <label class="control-label" for="inputDefault"> Password </label>
                <input type="password" class="form-control" id="inputDefault" name="password" placeholder="Your password">
            </div>

            <!--If empty-->

            <div class="form-group has-warning">
                <label class="control-label" for="inputWarning"> Type your password here </label>
                <input type="password" class="form-control" id="inputWarning" name="password" placeholder="Your password">
            </div>

        <!--Password confirmation-->

            <!--Default-->

            <div class="form-group">
                <label class="control-label" for="inputDefault"> Password confirmation </label>
                <input type="password" class="form-control" id="inputDefault" name="password_confirmation" placeholder="Your password">
            </div>

            <!--If empty-->

            <div class="form-group has-warning">
                <label class="control-label" for="inputWarning"> Type your password confirmation here </label>
                <input type="password" class="form-control" id="inputWarning" name="password_confirmation" placeholder="Your password">
            </div>

            <!--Wrong password confirmation-->

            <div class="form-group has-error">
                <label class="control-label" for="inputError"> Confirmation does not match your password </label>
                <input type="password" class="form-control" id="inputError" name="password_confirmation" placeholder="Your password">
            </div>

            <div class="form-group">
                <button type="password" class="btn btn-primary" style="float: right" name="password_submit"> Save </button><br><br><br>
            </div>

<!--DELETE ACCOUNT-->

            <p>
                <br><a href="order.php" class="btn btn-default btn-lg btn-block"> Show history of my orders </a>
                <br><a href="index.php" class="btn btn-default btn-lg btn-block"> Delete account </a>
            </p>

        </div>
    </div>
</body>
</html>
