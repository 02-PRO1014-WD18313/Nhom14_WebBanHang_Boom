<?php require "model/pdo.php" ?>
<?php require "model/select.php" ?>
<?php require "model/insert.php" ?>
<?php require "model/update.php" ?>
<?php require "model/sanpham.php" ?>
<?php require "model/danhmuc.php" ?>
<?php
if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];


if(isset($_POST['addcarts'])){
  $id = $_POST['id'];
  $sp = loadsp($id);
  $spcl=spcungloai($id,$sp['iddanhmuc']);
  $img = $sp['img'];
  $name = $sp['name'];
  $price = $sp['gia'];
  $sl = 1;
  $i = 0;$check = 0;
  foreach($_SESSION['cart'] as $cart){
    if($cart[0]==$id ){
      $sl = $sl + $cart[4];
      $check = 1;
      $_SESSION['cart'][$i][4] = $sl;
    }$i++;
  }
  if($check==0){
  $cart = [$id,$img,$name,$price,$sl];
array_push($_SESSION['cart'],$cart);

}
header("location:index.php?act=cart");}
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