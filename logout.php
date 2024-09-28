<?php
session_start();
session_destroy();
$expire = time() - 3600;
setcookie("isLoggedIn", "false", $expire);
header('Location: index1.php');
exit;
?>