<?php
//session-test.php

session_start();

$_SESSION['FavoriteColor'] = "blue";

if(isset($_SESSION['FavoriteColor']))
{//show the color
    echo $_SESSION['FavoriteColor'];
}else{//tell user no color selected
    echo "No color selected";
}