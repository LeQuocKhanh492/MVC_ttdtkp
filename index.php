<?php
    session_start();
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once "./mvc/bridge.php";
    // echo $_GET['url'];
    $url = new App();
?>