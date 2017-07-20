<?php

//if (isset($_SESSION["login"]) && ($_SESSION["login"] = true)) { - jakieś wariacje tego warunku, żeby w zależności od wyniku, wyświetlić odpowiedni pasek. session_start jest w każdej podstronie, nie tutaj, bo musi być na samej górze kodu.

//      Dla zalogowanych - OPCJA 1

echo '<nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"> Toggle navigation </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <a class="navbar-brand" href="index.php"> Homepage </a> 
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="product.php"> Products </a></li>
                </ul>
                <form action="" method="post" class="navbar-form navbar-right">
                    <button class="btn btn-primary" type="submit" name="logoff"> Log off </button>                    
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="customer.php"> Profile </a></li>                                           
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="basket.php"> Basket <span class="badge">3</span></a></li>
                </ul>
            </div>
        </div>
    </nav>';

//      Dla niezalogowanych - OPCJA 2

echo '<nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"> Toggle navigation </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <a class="navbar-brand" href="index.php"> Homepage </a>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="product.php"> Products </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="register.php"> Register </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php"> Log in </a></li>
                </ul>
            </div>
        </div>
    </nav>';

//      Dla niezalogowanych podczas logowania lub rejestracji - OPCJA 3

echo '<nav class="navbar navbar-inverse">
        <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <a class="navbar-brand" href="index.php"> Homepage </a>
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="product.php"> Products </a></li>
                </ul>
            </div>
        </div>
    </nav>';

?>