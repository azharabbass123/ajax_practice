<?php


// Data is fetched using ajax

require 'Database.php';

$db = new Database();

$result = $db->query('Select name from users')->fetchAll();

if ($result){
    print_r($result);
}
else{
    echo "Failed";
}