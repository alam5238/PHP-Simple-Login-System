<?php
 if(!session_start()){
    session_start();
}
$_SESSION['login'] = "false";
if(session_destroy()){
    header("Location: index.php");
}




?>