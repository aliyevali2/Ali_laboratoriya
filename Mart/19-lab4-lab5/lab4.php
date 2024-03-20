<?php

$userName = "user";
$password = "secure";
$attempts = 3;

while($attempts > 0) {
    echo "Enter username:";
    $entered_username = readline();
    echo "Enter password:";
    $entered_password = readline();

    if($userName === $entered_username && $password === $entered_password) {
        echo "Sisteme daxil oldunuz \n";
        break;
    }
    else {
        $attempts--;
        if($attempts > 0) {
            echo "Yeniden cehd edin $attempts attempts left. \n" ;
        }
        else {
            echo "<p>Accout blocked \n </p>";
        }

    }
}

?>