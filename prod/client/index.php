<?php 

if(!$_SESSION['name']) { 
    header('Location: ./controllers/auth.php');
}else { 
    header('Location: ./home.php');
}