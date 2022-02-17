<?php
// start the sessions
session_start();


//initialize username and password
$_SESSION['username'] = 'saif';
$_SESSION["timeout"] = time();

//check the username and password
if (isset($_SESSION['username'])) {
    echo "I m login with " . $_SESSION['username'];
}

?>

<br>
<a href="timeout.php" style="margin-top: 10px">Timout Session</a><br>
<a href="delete.php" style="margin-top: 10px">End Session</a>
