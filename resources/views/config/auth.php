<?php
session_start();
if (!isset($_SESSION['id'])) {

  header("Location: http://localhost/php-final-capstone-project/resources/views/pages/admin/authentication/login.php ");

    exit();
}

?>