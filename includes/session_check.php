<?php 
include("../includes/config.php");
session_start();
$current_user = $_SESSION['username'];

if(isset($_SESSION['submit']) && $_SESSION['submit']==true){
    $username = $_SESSION['username'];

    
}

?>