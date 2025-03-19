<?php
include("../../../config/db.php");

session_start();
session_unset();
session_destroy();
header("Location: http://localhost/php-final-capstone-project/resources/views/pages/admin/authentication/login.php ");
exit;

?>