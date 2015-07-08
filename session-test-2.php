<?php
//session-test-2.php

include 'session-include.php';

?>

<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION['Password'] = "abc123";

if(!isset($_SESSION['Password']))
{//if session not set, prompt:

    echo 
        
        '<h1>Please enter your login credentials:</h1>
                <form action="formhandler.php" method="post">
                   Password: <br><input type="text" name="password">
                   <input type="submit" value="submit">
                </form>' ;       
}
?>
  
    <p>If you're seeing this, then we're done!</p>
    
</body>
</html>
