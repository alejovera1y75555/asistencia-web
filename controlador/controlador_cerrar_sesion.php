<?php
session_start();
session_destroy();
header("location:/asist-web/asistencia-web/vista/login/login.php")
?>