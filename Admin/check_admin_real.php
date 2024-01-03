<?php
session_start();
if(empty($_SESSION['level'])){ // fake level = 0
    header('location:../index.php');
}