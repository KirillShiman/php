<?php
class RegUser {
    private $name, $email, $password, $role, $conn;

    public function __construct($connection, $name, $email, $password, $role = 'user') {
        $this->conn = $connection;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function register() {

        $query = mysqli_query($this->conn, "SELECT * FROM user WHERE name = '$this->name'");

        if (mysqli_num_rows($query) == 0) {

            $sql = "INSERT INTO user (name, email, password, role) VALUES ('$this->name', '$this->email', '$this->password', '$this->role')";
            if (mysqli_query($this->conn, $sql)) {
                $_SESSION['name'] = $this->name;
                $_SESSION['role'] = $this->role;
                header('location:index.html');
                exit();
            } else {
                echo "Ошибка при записи в базу данных: " . mysqli_error($this->conn);
            }
        } else {
            echo "Имя занято";
        }
    }
}
?>