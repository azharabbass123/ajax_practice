<?php 
require 'partials/header.php';
require 'partials/nav.php';
?>

<h2>Click on button to get user data</h2>
<button class="w-25 px-3 py-3 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none" onclick="fetchUserData()">Get Data</button>
<ul>
    
        <p class="mb-3">User data</p>
        <p class="mb-3" id="output"></p>
</ul>

<?php
require 'partials/footer.php';
?>

<script>

    function fetchUserData(){
        var xmlHttp = new XMLHttpRequest();
        var url = 'fetchData.php';

        xmlHttp.onreadystatechange =function (){
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
                var myArray = xmlHttp.responseText
                // myArray.forEach(element => {
                //     document.getElementById('output').innerHTML += element + "<br />"
                // });
                document.getElementById('output').innerHTML = xmlHttp.responseText+"<br />";
            }
        }
        xmlHttp.open("GET",url,true);
        xmlHttp.send();
    }
</script>