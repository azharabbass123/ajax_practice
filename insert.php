<?php

require 'Database.php';

$db = new Database();

$result = $db->query('INSERT INTO users(email, name, password) VALUES(:email, :name, :password)', [
    'email' => $_POST['email'],
    'name' => $_POST['name'],
    'password' => $_POST['password']
]);

if ($result){
    echo "Success";
}
else{
    echo "Failed";
}