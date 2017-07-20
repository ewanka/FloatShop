<?php

//Stwórz (w katalogu /src) klasę dla przedmiotu.
//
//Przedmiot ma mieć nazwę, cenę, opis, i dostępność (liczbę na stanie – int).
//
//Przygotuj wszystkie funkcje, które mogą być przydatne dla tej klasy.
//
//Przygotuj relację jeden do wielu z tabelką, która trzyma zdjęcia w bazie danych.

Class Product
{
    private $id;
    private $name;
    private $price;
    
    public function __construct($name, $price, $id=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        
    }

        public static function findAll(PDO $connection) // przekazać połączenie
    {
        $products[];
        $result = $connection->query('SELECT * FROM `product`');
        
        foreach ($result->fetchAll() as $row){
            $products[] = new Product($row['name'], 
                                      $row['price'], 
                                      $row['id']
                                      );
        }
        
        return $products;
    }

        public function getName()
    {
        return 'Szachy'; //ma być pobierane z atrybutu
        
    }
    
    function getId()
    {
        return $this->id;
    }

    function getPrice()
    {
        return $this->price;
    }


}