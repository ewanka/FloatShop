<?php
//require_once("../MySQLConnection.php");

//Stwórz (w katalogu /src) klasę dla użytkownika.
//
//Użytkownik ma mieć wszystkie typowe informacje: imię, nazwisko, mail i hasło.
//
//Przygotuj wszystkie potrzebne funkcje przydatne dla tej klasy.

Class Customer
{
    private $id;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $address;
    private $postalCode;
    private $city;

    public function __construct($id = null, $name, $surname, $email, $password)
    {
        setName($name);
        setSurname($surname);
        setEmail($email);
        setPassword($password);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getPostalCode()
    {
        return $this->postalCode;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    private function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    private function setAddress($address)
    {
        $this->address = $address;
    }

    private function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    private function setCity($city)
    {
        $this->city = $city;
    }

    protected function showHistoryOfOrders(PDO $conn)
    {
        $orders = [];
        $result = $conn->query("SELECT * FROM customers JOIN orders
            ON customers.customer_id=orders.customer_id"); //join where customer_id = ?
    }
    
    public function saveToDB(PDO $conn)
    {
         if ($this->id == -1) { //
            $sql = "INSERT INTO customers (name, surname, email, password, address, postalCode, city) VALUES (:name, :surname :email, :password, :address, :postalCode, :city)";

            $stmt = $conn->prepare($sql);

            $stmt->execute([
                ':name' => $this->name,
                ':surname'=> $this->surname,
                ':email' => $this->email,
                ':password' => $this->password,
                ':address'=> $this->address,
                ':postalCode'=> $this->postalCode,
                ':city'=> $this->city
                    
            ]);

            $this->id = $conn->lastInsertId();

            return true;
        }
        else {
            
            $sql = "UPDATE customers SET name=:name, surname=:surname, email=:email,
                    password=:password, address=:address, potalCode=:postalCode, city=:city WHERE id=:id";

            $stmt = $conn->prepare($sql);

            return $stmt->execute([
                        ':name' => $this->name,
                        ':surname'=> $this->surname,
                        ':email' => $this->email,
                        ':password' => $this->password,
                        ':address'=> $this->address,
                        ':postalCode'=> $this->postalCode,
                        ':city'=> $this->city
                        ':id' => $this->id
            ]);
        }
    }

    

    private function login($password, $email)
    {
        connectDB();
        if ($_POST === ['REQUEST_METHOD']) {

            if (!isset($_POST['password']) && !isset($_POST['username'])) {
                echo 'Enter proper username and password';
                
                return false;
            } else {
                
                $dbPassword = "SELECT id FROM customers";
                $dbUsername;
                
                if (($_POST['password'] === $dbPassword) && ($_POST['username'] === $dbUsername)) {
                    echo 'Logged in'; // przekierowanie do strony...?
                    
                    return true;
                }
            }
        }
    }

}
