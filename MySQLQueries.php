<?php

$queryCreateDatabaseShop = "CREATE DATABASE shop_ex";

$queryCreateTableCustomers = '  
    CREATE TABLE Customers
    ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (50) NOT NULL,
    surname VARCHAR (50) NOT NULL,
    email VARCHAR (255) NOT NULL,
    password VARCHAR (255) NOT NULL,
    address VARCHAR (255),
    postal_code VARCHAR (50),
    city VARCHAR (50)
    )';

$queryCreateTableProducts = '
    CREATE TABLE Products
    (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR (255) NOT NULL,
    price FLOAT NOT NULL,
    description VARCHAR (1000),
    group VARCHAR (50)
    )';


$registerCustomer = "INSERT INTO Customers VALUES (null, :name, :surname, :email, :password)"
