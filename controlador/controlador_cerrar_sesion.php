<?php
session_start();
session_destroy();
header("location:/asist-web/vista/login/login.php")
?>