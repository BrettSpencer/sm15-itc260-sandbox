<?php
//session-include.php

$PAGE_THIS[BASENAME()];
session_start();
$Password="abc123";
        
if (!isset($_SESSION['Password'])) {
    if (isset($_SESSION['$_POST'])) {
        ($_SESSION['Password']) == $Password;
        die;
    }
} {
        echo '<h1>Please enter your login credentials: abc123</h1>
                <form action="formhandler.php" method="post">
                   Password: <br><input type="text" name="password">
                   <input type="submit" value="submit">
                </form>' ;       
}
