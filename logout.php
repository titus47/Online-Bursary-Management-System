<?php 
session_start();
if(isset($_SESSION['id'])){
session_destroy();
unset($_SESSION['id']);

header("Location: index.php");
}


?>