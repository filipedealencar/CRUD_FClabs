<?php
include ('login.php');
session_start();
if(!$_SESSION['username']){
    header('index.php');
    exit();
}
