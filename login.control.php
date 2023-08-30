<?php
@session_start();


if (isset($_SESSION['Giris yapti'])){

}
    else{
        
    header("location: login.php");
    }
