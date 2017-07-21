<?php

class User
{

    private $id = -1; //by odróżnić od już istniejących w bazie danych
    private $username;
    private $email;
    private $hashPass;

    public function __construct()
    {
        $this->username = '';
        $this->email = '';
        $this->hashPass = '';
    }

    function getId()
    {
        return $this->id;
    }

    function getUsername()
    {
        return $this->username;
    }

    function getEmail()
    {
        return $this->email;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        $this->hashPass = password_hash($password, PASSWORD_BCRYPT);
    }

    public function saveToDb(PDO $conn)   //type hinting - $conn to obiekt klasy PDO,
    {
        if ($this->id == -1) { //
            $sql = "INSERT INTO User (username, email, hash_pass) VALUES (:username, :email, :hash_pass)";

            $stmt = $conn->prepare($sql);

            $stmt->execute([
                ':username' => $this->username,
                ':email' => $this->email,
                ':hash_pass' => $this->hashPass,
            ]);

            $this->id = $conn->lastInsertId();

            return true;
        }
        else {
            //ustaw UPDATE
            $sql = "UPDATE User SET username=:username, email=:email, hash_pass=:hash_pass WHERE id=:id";

            $stmt = $conn->prepare($sql);

            return $stmt->execute([
                ':username' => $this->username,
                ':email' => $this->email,
                ':hash_pass' => $this->hashPass,
                ':id' => $this->id,
            ]);
        }
    }

    public static function loadUserById(PDO $conn, int $id)
    {
        $sql = "SELECT * FROM User WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute(['id' => $id]);

        if ($result && $stmt->rowCount() == 1) {
            $userData = $stmt->fetch(PDO::FETCH_ASSOC);

            $user = new User();

            $user->id = $userData['id'];
            $user->username = $userData ['username'];
            $user->email = $userData['email'];
            $user->hashPass = $userData ['hash_pass'];

            return $user;
        }
        else {
            return null;
        }
    }

    public static function loadAllUsers(PDO $conn)
    {
        $sql = "SELECT * FROM User ORDER BY id ASC";

        $result = $conn->query($sql);

        if ($result && $result->rowCount() > 0) {
            foreach ($result->fetchAll(PDO::FETCH_ASSOC) as $userData) {
                $user = new User();

                $user->id = $userData['id'];
                $user->username = $userData ['username'];
                $user->email = $userData['email'];
                $user->hashPass = $userData ['hash_pass'];

                $users[] = $user;
            }
        }

        return $users;
    }

    public function isNew(): bool
    {
        return $this->id == -1;
    }

    public function delete(PDO $conn) : bool
    {
        if (!$this->isNew()) {
            $sql = "DELETE FROM User WHERE id=:id";

            $stmt = $conn->prepare($sql);

            if ($stmt->execute(['id' => $this->id])) {
                $this->id = -1;

                return true;
            }
        }

        return false;
    }

}