<?php


require 'Database.php';

$uri = isset($_GET['url']) ? $_GET['url'] : '/';
$routes = [
        '/'=> 'controllers/index.php',
        'login'=> 'controllers/login.php',
        'register'=> 'controllers/register.php',
        'userData'=> 'controllers/userData.php',
    ];
    
    
    
    function routeToControler($uri, $routes){
    
        if(array_key_exists($uri, $routes)) {
            include $routes[$uri];
        
        } else {
        
           abort();
        
        }
    }
    
    routeToControler($uri, $routes);
    
    function abort($code = 404) {
        http_response_code($code);
        echo "page not found";
        //include "views/$code.php";
    }