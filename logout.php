<?php
session_start();
//unset($_SESSION['session']);
session_destroy();
header('Location: '.'sessionHtml.php');
?>