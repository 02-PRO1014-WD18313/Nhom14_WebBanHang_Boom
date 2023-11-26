<?php require "model/pdo.php" ?>
<?php require "model/select.php" ?>
<?php require "model/insert.php" ?>
<?php require "model/update.php" ?>
<?php require "model/sanpham.php" ?>
<?php require "model/danhmuc.php" ?>
<?php
if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];
//  if($_SERVER['REQUEST_METHOD'] == "POST"){
//   if(isset($_POST['key']) ){
//   $key = $_POST['key'];
//   $_SESSION['key'] = $key;
//   header("location:index.php?act=timkiem");
//  }
// }
include "view/header.php";
    if(isset($_GET['act']) && $_GET['act']){
      $act = $_GET['act'];
    switch ($act) {
      case 'timkiem':        
        include "view/timkiem.php"; 
        break;
      case 'sanpham':
        if (isset($_POST['kyw']) && $_POST['kyw'] > 0) {
          $kyw = $_POST['kyw'];
      } else {
          $kyw = "";
      }
      if (isset($_GET['id']) && $_GET['id'] > 0) {
          $iddm = $_GET['id'];
      } else {
          $iddm = 0;
      }
      $dssp = loadall_sanpham("$kyw", $iddm);

        include "view/sanpham.php"; 
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
   
      default:
 
      include "view/home.php";
        break;
    }
    }else{
    
      include "view/home.php";
    
  } 
    include "view/footer.php";
?>