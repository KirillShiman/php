<?php


$conn = mysqli_connect("127.127.126.26", "root", "", "users");
if (!$conn) {
    die("connection error");
} else {
    echo "connection succesgi";
}