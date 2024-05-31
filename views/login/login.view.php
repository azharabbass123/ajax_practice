<?php

require 'views/partials/header.php';
require 'views/partials/nav.php';
?>
<main>
<div class="flex items-center min-h-screen bg-white dark:bg-gray-900">
    <div class="container mx-auto">
        <div class="max-w-md mx-auto my-10">
            <div class="text-center">
                <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Register With AJAX</h1>
                <!-- <p class="text-gray-500 dark:text-gray-400"></p> -->
            </div>
            <div class="m-7">

                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email Address</label>
                        <input type="email"  name="email" id="email" placeholder="you@company.com" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        <?php if(isset($errors['email'])) : ?>
                        <p class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Full Name</label>
                    <input type="text"  name="name" id="name" placeholder="John Doe" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6">
                        <div class="flex justify-between mb-2">
                            <label for="password" class="text-sm text-gray-600 dark:text-gray-400">Password</label>
                            <!-- <a href="#!" class="text-sm text-gray-400 focus:outline-none focus:text-indigo-500 hover:text-indigo-500 dark:hover:text-indigo-300">Forgot password?</a> -->
                        </div>
                        <input type="password" name="password" id="password" placeholder="Your Password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        <?php if(isset($errors['password'])) : ?>
                        <p class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-6">
                        <button type="submit" id="button" onclick="myAjax()" class="w-full px-3 py-3 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Register</button>
                    </div>
                    <span id="ajaxDump"></span>
                    <!-- <p class="text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="#!" class="text-indigo-400 focus:outline-none focus:underline focus:text-indigo-500 dark:focus:border-indigo-800">Sign up</a>.</p> -->
            </div>
        </div>
    </div>
</div>
  </main>
  <script>
    function myAjax() { 
    var xmlHttp = new XMLHttpRequest(); 
    var url="insert.php"; 
    email = document.getElementById('email').value;
    name = document.getElementById('name').value;
    password = document.getElementById('password').value;
    var parameters = `email=${email}&name=${name}&password=${password}`; 
    xmlHttp.open("POST", url, true); 
    
    //Black magic paragraph 
    xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
    //xmlHttp.setRequestHeader("Content-length", parameters.length); 
    //xmlHttp.setRequestHeader("Connection", "close"); 
    
    xmlHttp.onreadystatechange = function() { 
    if(xmlHttp.readyState == 4 && xmlHttp.status == 200) { 
    document.getElementById('ajaxDump').innerHTML=xmlHttp.responseText+"<br />"; 
    } 
    } 
    
    xmlHttp.send(parameters); 
}
</script>
<?php
require 'views/partials/footer.php';
?>