<?php
// start them engines!
session_start();


//time in seceond
$time = 10;

// check to see if $_SESSION["timeout"] is set
if (isset($_SESSION["timeout"])) {

    // calculate the session's "time to live"
    $sessionTTL = time() - $_SESSION["timeout"];
    echo "Session will be destroy after 10 Seconds";
    echo $sessionTTL;
    if ($sessionTTL > $time) {
        session_destroy();
        header("Location: ./delete.php");
    }
}
