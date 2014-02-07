<?php

session_start();
unset($_SESSION['userInfo']);

session_destroy();

header('Location: auth.php'); #brings them back to the home page
exit;

?>





