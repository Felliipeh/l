<?php
session_start();
session_unset();
session_destroy();
header('Location: /estante_web/views/login.php');
exit();
?>
