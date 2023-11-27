<?php 
if(isset($_SESSION['account']) && isset($_SESSION['password'])){
  $acc = $_SESSION['account'];
  $user = loaduser($acc);
}
   else{
      header("location:../index.php");
    } 
?>