<?php

require __DIR__ . "/User.php";

$userList = [];

echo "Name: ";
$name = fgets(STDIN);
echo "Email: ";
$email = fgets(STDIN);
echo "Password: ";
$password = fgets(STDIN);

$user1 = new User($name, $email, $password);
var_dump($user1);
