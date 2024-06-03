<?php


// Data is fetched using ajax

require 'Database.php';

$db = new Database();

$result = $db->query('Select * from users')->fetchAll();

if ($result){
 echo   "<table>
<tr>
<th>Id</th>
<th>name</th>
<th>email</th>
</tr>";
    foreach($result as $row){
        echo '<tr>';
        echo '<td>' . $row['id'] .'</td>';
        echo '<td>' . $row['name'] .'</td>';
        echo '<td>' . $row['email'] .'</td>';
        echo '<tr>';
}
//return $result;
}
else{
    echo "Failed";
}