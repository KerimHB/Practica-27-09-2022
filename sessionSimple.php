<?php
session_start();
$_SESSION ['usuario']="Clase DWSL";

echo $_SESSION ['usuario'];
unset($_SESSION ['usuario']);
?>