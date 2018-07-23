<?php
session_start();
if (!isset($_SESSION)) {
    header("Location:../Vista/Login.php");
} else {
    session_unset();
    session_destroy();
    header("Location:../Vista/Login.php");
}
