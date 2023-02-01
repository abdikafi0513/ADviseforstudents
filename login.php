<?php
session_start();
require("creds.php");
$cnxn = mysqli_connect($host, $user, $password, $database)
or die("Oops! error connecting");

?>


<link rel="stylesheet" href="styles/login.css">
<form method="post" action="#">
    <h1>Admin Login</h1>
    <div id="login">
        <div id="username">
            <label for="username">Username:</label>
            <input id="username" name="username">
        </div>
        <br>
        <div id="password">
            <label for="password">Password:</label>
            <input id="password" name="password">
        </div>
        <br>

        <button type="submit">lllogin</button>
    </div>
</form>