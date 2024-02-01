<?php 
// include "../login_class.php";
if($_SESSION['username'] == 'admin'){
    include "TP_HeaderSession.php";
}else{
    include "TP_HeaderGuest.php";
}

?>