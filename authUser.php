<?php
class User {
    private $name;
    private $password;
    private $role;


    public function __construct($name, $password, $role) {
        $this->name = $name;
        $this->password = $password;
        $this->role = $role;

    }

    public function getName() {
        return $this->name;
    }

    public function getRole() {
        return $this->role;
    }



    public function checkPassword($password) {
        return $this->password === $password;
    }
}
class Auth {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function login($name, $password) {
        $query = mysqli_query($this->conn, "SELECT * FROM user WHERE name = '$name'");

        if (mysqli_num_rows($query) == 1) {
            $row = mysqli_fetch_assoc($query);
            $user = new User($row['name'], $row['password'], $row['role']);

            if ($user->checkPassword($password)) {
                $_SESSION['name'] = $user->getName();
                $_SESSION['role'] = $user->getRole();


                return $user->getRole();
            }
        }
        return false;
    }
}

