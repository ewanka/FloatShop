<?php
session_start();
require_once("../MySQLConnection.php");
require_once("../src/Customer.php");

//        $registerCustomer = "INSERT INTO Customers VALUES (null, :name, :surname, :email, :password)";
//
//        try {
//            $stmt = $conn->prepare($registerCustomer);
//            $stmt->execute([
//                    "name" => $name,
//                    "surname" => $surname,
//                    "email" => $email,
//                    "password" => $password
//            ]);
//        } catch (PDOException $e) {
//            return $message = $e->getMessage();
//            var_dump($message);
//        }
//    }
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Register </title>

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

            <?php

            $customer = new Customer();

            if ($_SERVER["REQUEST_METHOD"] !== "POST") {
                echo'
                    <div class="form-group">
                        <label class="control-label" for="inputDefault"> Name </label>
                        <input type="text" class="form-control" id="inputDefault" name="register_name" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputDefault"> Surname </label>
                        <input type="text" class="form-control" id="inputDefault" name="register_surname" placeholder="Your surname">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputDefault"> Email </label>
                        <input type="email" class="form-control" id="inputDefault" name="register_email" placeholder="Your email">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="inputDefault"> Password </label>
                        <input type="password" class="form-control" id="inputDefault" name="register_password" placeholder="Your password">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="disabledInput"> Confirm password </label>
                        <input type="password" class="form-control" id="inputDefault" name="register_password_confirmation" placeholder="Conform your password">
                    </div>                   
                    <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="float: right" name="register_submit"> Register </button><br><br><br>
                    </div>';

            } elseif
                (($_SERVER["REQUEST_METHOD"] === "POST")
                && (in_array("", $_POST))
                && (isset($_POST["register_name"]))
                && (isset($_POST["register_surname"]))
                && (isset($_POST["register_email"]))
                && (isset($_POST["register_password"]))
                && (isset($_POST["register_password_confirmation"]))
                ||
                (($_SERVER["REQUEST_METHOD"] === "POST")
                && (!in_array("", $_POST))
                && (($_POST["register_password"]) !== ($_POST["register_password_confirmation"]))))
                {

                $name = $_POST["register_name"];
                $surname = $_POST["register_surname"];
                $email = $_POST["register_email"];
                $password = $_POST["register_password"];
                $passwordConfirmation = $_POST["register_password_confirmation"];
                $passwordHash = str_repeat("*", strlen($password));
                $passwordConfirmationHash = str_repeat("*", strlen($passwordConfirmation));

                echo'
                    <div class="alert alert-dismissible alert-warning">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <h4>Warning!</h4>
                        <p> 
                            Please fill out all form fields.
                        </p>
                    </div>';

//    Name
//                var_dump($name);
                if ($name === "") {
                    echo'
                        <div class="form-group">
                            <label class="control-label" for="inputDefault"> Name </label>
                            <input type="text" class="form-control" id="inputDefault" name="register_name" placeholder="Your name">
                        </div>';
                } else {
                    echo'
                        <div class="form-group">
                            <label class="control-label" for="inputDefault"> Name </label>
                            <input type="text" class="form-control" id="inputDefault" name="register_name"
                                placeholder="' . $name . '"
                                value="' . $name . '">
                        </div>';
                }

//    Surname

                if ($surname === "") {
                    echo'
                        <div class="form-group">
                            <label class="control-label" for="inputDefault"> Surname </label>
                            <input type="text" class="form-control" id="inputDefault" name="register_surname" placeholder="Your surname">
                        </div>';
                } else {
                    echo'
                        <div class="form-group">
                            <label class="control-label" for="inputDefault"> Surname </label>
                            <input type="text" class="form-control" id="inputDefault" name="register_surname"
                                placeholder="' . $surname . '"
                                value="' . $surname . '">
                        </div>';
                }

//    Email

                if ($email === "") {
                    echo'
                        <div class="form-group">
                            <label class="control-label" for="inputDefault"> Email </label>
                            <input type="email" class="form-control" id="inputDefault" name="register_email" placeholder="Your email">
                        </div>';
                } else {
                    if ($customer->setEmail($email) === true) {
                        echo'
                            <div class="form-group has-error">
                                <label class="control-label" for="inputError"> Somebody already uses this email </label>
                                <input type="email" class="form-control" id="inputError" name="register_email" placeholder="Your email">
                            </div>';
                    } else {
                        echo '
                            <div class="form-group">
                                <label class="control-label" for="inputDefault"> Email </label>
                                <input type="email" class="form-control" id="inputDefault" name="register_email"
                                    placeholder="' . $email . '"
                                    value="' . $email . '">
                            </div>';
                    }
                }

//    Password

                if ($password === "") {
                    echo'
                        <div class="form-group">
                            <label class="control-label" for="inputDefault"> Password </label>
                            <input type="password" class="form-control" id="inputDefault" name="register_password" placeholder="Your password">
                        </div>';
                } else {
                    echo'
                        <div class="form-group">
                            <label class="control-label" for="inputDefault"> Password </label>
                            <input type="password" class="form-control" id="inputDefault" name="register_password"
                                placeholder="' . $passwordHash . '"
                                value="' . $passwordHash . '">
                        </div>';
                }

//    Password confirmation

                if ($passwordConfirmation === "") {
                    echo'
                        <div class="form-group">
                            <label class="control-label" for="inputDefault"> Password confirmation </label>
                            <input type="password" class="form-control" id="inputDefault" name="register_password_confirmation" placeholder="Confirm your password">
                        </div>';
                } else {
                    if ($password !== $passwordConfirmation) {
                        echo'
                            <div class="form-group has-error">
                                <label class="control-label" for="inputError"> Confirmation does not match password </label>
                                <input type="password" class="form-control" id="inputError" name="register_password_confirmation" placeholder="Confirm your password">
                            </div>';
                    } else {
                        echo '
                            <div class="form-group">
                                <label class="control-label" for="inputDefault"> Password confirmation </label>
                                <input type="password" class="form-control" id="inputDefault" name="register_password_confirmation"
                                    placeholder="' . $passwordConfirmationHash . '"
                                    value="' . $passwordConfirmationHash . '">
                            </div>';
                    }
                }

//    Radio button & submit

                echo' 
                    <div class="form-group">
                            <button type="submit" class="btn btn-primary" style="float: right" name="register_submit" value="register"> Register </button><br><br><br>
                    </div>
                </form>';

                echo "<pre>";
                print_r($_POST);
                echo "</pre>";

//    Link buttons

            } else {

                echo'
                    <div>
                        <p>
                            <br><a href="product.php" class="btn btn-default btn-lg btn-block"> Show products </a>
                            <br><a href="basket.php" class="btn btn-default btn-lg btn-block"> Show my basket </a>
                            <br><a href="customer.php" class="btn btn-default btn-lg btn-block"> Show my profile </a>
                            <br><a href="order.php" class="btn btn-default btn-lg btn-block"> Show history of my orders </a>
                        </p>
                    </div>';
            }

            ?>

        </div>
    </div>
</body>
</html>