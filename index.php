<?php require "model/pdo.php" ?>
<?php require "model/select.php" ?>
<?php require "model/insert.php" ?>
<?php require "model/update.php" ?>
<?php
 if($_SERVER['REQUEST_METHOD'] == "POST"){
  if(isset($_POST['key']) ){
  $key = $_POST['key'];
  $_SESSION['key'] = $key;
  header("location:index.php?act=timkiem");
 }
}
include "view/header.php";
    if(isset($_GET['act']) && $_GET['act']){
      $act = $_GET['act'];
    switch ($act) {
      case 'timkiem':        
        include "view/timkiem.php"; 
        break;
      case 'dmsp':        
         include "view/danhmucsp.php";
        break;
        case 'ct':
            include "view/chitietsp.php";
          
          break;
          case 'gt':

            include "view/gioithieu.php";
            break;
          case 'lh':
              include "view/lienhe.php";
              break;
          case 'gy':
                include "view/gopy.php";
                break;
          case 'hd':
                  include "view/hoidap.php";
                  break;
          case 'dangnhap':
                    include "view/dangnhap.php";
                    break;  
         case 'dangky':
                   include "view/dangky.php";
                  break;  
          case 'quenmk':
                   include "view/quenmk.php";
                  break;
          case 'cart':
                   include "view/cart.php";
                  break;
          case 'allnew':
                   include "view/allnew.php";
                  break;
          case 'like':
                   include "view/yeuthich.php";
                  break;
          case 'profile':
            if(isset($_SESSION['account'])){
              $acc = $_SESSION['account'];
              $user = loaduser($acc);
              $acc = $user['tai_khoan'];
            }
            
                   include "view/profile.php";
                  break;    
      default:
 
      include "view/home.php";
        break;
    }
    }else{
    
      include "view/home.php";
    
  } 
    include "view/footer.php";
?>