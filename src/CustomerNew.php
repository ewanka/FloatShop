<?php
require_once("../MySQLConnection.php");

Class CustomerNew
{
    public function __construct($name, $surname, $email, $password)
    {
        setName($name);
        setSurname($surname);
        setEmail($email);
        setPassword($password);
    }
}