#PHP Start Session,Destroy Session, Timeout Session

####For Start Session - From Index.php, it will be goto the start.php file where session username is defined as $_SESSION['username']

```sh
<a href="./start.php">Start Session</a>
```

###Start Session
####A session is started with the session_start() function. Session variables are set with the PHP global variable: $_SESSION. And I am define session perameters username=saif and time=time(). After successfully checked the username it will show the success message

```sh
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
```

####There are two button End Session button defined Delete Data from Server (delete.php) and Timeout Session define the Session Data Clear after certain time(timout.php). First Let's See the Delete Session

###Delete Session
####First start the session the get the $_SESSION data. After that unset the username and time for clear the session data.
```sh
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

```
###Timout Session
####Again get start the session and Initial a time and get session time from time function. The calculate the sessionTime and check the time. After checking the time destroy the session data and redirect to delete.php
```sh
<?php
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

```