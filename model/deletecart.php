<?php
session_start();
if(isset($_GET['id'])){
    
    array_splice($_SESSION['cart'],$_GET['id'],1);
   
        header("location:../index.php?act=cart");
}else{
    $_SESSION['cart']=[];
    header("location:../index.php?act=cart");}

?>