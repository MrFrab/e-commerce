<?php
    session_start();

    if(isset($_SESSION['EmailUtente'])){
        unset($_SESSION['EmailUtente']);
    }
    header("Location:login.php");
?>