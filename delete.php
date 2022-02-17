<?php
// start the sessions
session_start();


unset($_SESSION['username']);
unset($_SESSION['time']);

//check the username and password
if(isset($_SESSION['username'])){
    echo "I m login with " . $_SESSION['username'];
}else{
    echo "Session Deleted";
}

?>

<br>
<a href="./start.php">Start Session Again ?</a>
