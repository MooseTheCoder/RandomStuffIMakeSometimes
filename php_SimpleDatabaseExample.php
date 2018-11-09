<?php

/*
    Method One : 
    Make a connection to a database and use php to set the DOM

*/

function db(){
    // Open a connection to the database
    return mysqli_connect('localhost','root','','example');
    /*
        mysqli_connect takes 4 params
        database host -> in this case, its localhost (or 127.0.0.1)
        username -> database username, default as root on xampp
        password -> the password for the user, default empty with xampp
        database -> the database you want to use, in my case : example
    */
}

function end_db($db){
    // Close the connection to the database
    mysqli_close($db);
}

// Make the connection and store it in a var
$db = db();

$query = mysqli_query($db, "SELECT * FROM users"); // Query to select all users
$result = mysqli_fetch_all($query,MYSQLI_ASSOC); // Get all the users
end_db($db); // Close connection to the database
echo '<center>Users in database</center>';
foreach($result as $user){
    $e = '<div style="border:1px solid black; margin:5px;">'; //temp var to store what I want to echo
    $e.='Username: '.$user['username'].'<br /> Name : '.$user['name'];
    $e.='</div>';
    echo $e;
}

