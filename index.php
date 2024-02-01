<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// include "login_class.php";
session_start();
if ($_SESSION['username'] == 'admin') {
    if($_SESSION['status'] == 'complete'){
        require_once("Home/HM_AdminCon.php");
    }else{
        require_once("Home/HM_Admin.php");
    }
} 
else if ($_SESSION['username'] == 'system') {} 
else if ($_SESSION['username'] == 'admin_ts_academy') {} 
else if ($_SESSION['username'] == 'manager_ts_academy') {} 
else if ($_SESSION['username'] == 'admin_department') {} 
else if ($_SESSION['username'] == 'manager') {} 
else if ($_SESSION['username'] == 'user') {} 
else {require_once("Home/HM_Guest.php");}
