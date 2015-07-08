<?php 
//session-clear.php

session_start();

//$_SESSION = array();

//session_destroy();


if(isset($_SESSION['FavoriteColor']))
{//show the color
    unset($_SESSION['FavoriteColor']);
}