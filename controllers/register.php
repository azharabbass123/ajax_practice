<?php

$db = new Database();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $db->query('INSERT INTO users(email, name, password) VALUES(:email, :name, :password)', [
        'email' => $_POST['email'],
        'name' => $_POST['name'],
        'password' => $_POST['password']
    ]);
}


require 'views/register/register.view.php';