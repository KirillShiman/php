<?php
session_start();
include ('conn.php');
require_once ('RegUser.php');
$usser = new RegUser($conn, $_POST['name'], $_POST['email'], $_POST['password']);
$usser->register();