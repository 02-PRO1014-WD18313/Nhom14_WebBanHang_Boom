<?php
include "../model/pdo.php";
include "../model/insert.php";
include "../model/update.php";
include "../model/delete.php";
include "../model/select.php";
// if(isset($_SESSION['account']) && isset($_SESSION['password'])){
//     $acc = $_SESSION['account'];
//     $user = loaduser($acc);
//    if($user['vaitro']!="admin"){ header("location:../index.php");}
//   }
//      else{
//         header("location:../index.php");
//       } 
    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "listdm":
                if(isset($_POST['del']) && isset($_POST['check'])){
                    foreach($_POST['check'] as $check){
                        deldm($check);
                    }
                }
                $listdm=loadall_dm();
                include "danhmuc/list.php";
                break;
            case "adddm":
                if(isset($_POST['themmoi'])){
                    if(!empty($_POST['tenloai'])){
                     $ten_loai =$_POST['tenloai'];
                     adddm($ten_loai);
                     $thongbao = "Thêm thành công!";
                    }
                 }
                include "danhmuc/add.php";
                break; 
            case "xoadm":
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                         deldm($id);
                         $listdm=loadall_dm();
                        include "danhmuc/list.php";              
                     }
                    break;  
            case "suadm":
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $dm=loaddm($id);
                        include "danhmuc/update.php";
                    }
                    break;  
            case "updatedm":
                        if(isset($_POST['capnhat'])){
                            if(!empty($_POST['tenloai'])){
                             $ten_loai =$_POST['tenloai'];
                             $id =$_POST['id'];
                             updatedm($id,$ten_loai);
                            }
                         }
                         $listdm=loadall_dm();
                        include "danhmuc/list.php";
                        break; 
            case "addsp":
                if(isset($_POST['themmoi'])){
                    $target = "../uploads/";
                    $file = $target.basename($_FILES['hinh']['name']);
                    $imageFileType = pathinfo($file,PATHINFO_EXTENSION);
                    if(empty($_POST['tenhh'])){
                        $thongbao = "Vui lòng nhập tên sản phẩm";
                    }else if(empty($_POST['gia'])){
                        $thongbao = "Vui lòng nhập giá";
                    }else if($_FILES['hinh']['name']=="" || $_FILES['hinh']['error'] ==4 || $_FILES["hinh"]["size"] > 500000 || ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") ){
                        $thongbao = "Hình ảnh không hợp lệ";
                    }else if(empty($_POST['lhang'])){
                        $thongbao = "Vui lòng chọn danh mục";
                    }else{
                    move_uploaded_file($_FILES['hinh']['tmp_name'],$file);
                    $tenhh = check($_POST['tenhh']);
                    $gia = check($_POST['gia']);
                    $lhang = check($_POST['lhang']);
                    $mota = check($_POST['mota']);
                    $hinh = check($_FILES['hinh']['name']);
                    addsp($tenhh,$gia,$hinh,$mota,$lhang);
                    $listsp=loadall_sp();
                    $masp = $listsp[0]['idsp'];
                    if(isset($_FILES['hinhs'])){      
                        $files = $_FILES['hinhs'];   
                        $imgs = $files['name'];  
                    
                    
                    foreach ($imgs as $key => $value) {
                        if(!empty($value)){
                        move_uploaded_file($files['tmp_name'][$key],$target.$value);
                        addimg($masp,$value);
                    }}}
                     $thongbao = "Thêm thành công!";
                    }
                 }
                $listdm=loadall_dm();
                include "sanpham/add.php";
                        break;
            case "updatesp":
                            if(isset($_POST['capnhat'])){
                                $target = "../uploads/";
                                $file = $target.basename($_FILES['hinh']['name']);
                                $id =$_POST['id'];
                                $sp=loadsp($id);
                                $tenhh = $_POST['tenhh'];
                                $gia = $_POST['gia'];
                                $lhang =$_POST['lhang'];
                                $mota = $_POST['mota'];
                                if($_FILES['hinh']['name'] !="" && $_FILES['hinh']['error']==0 && !empty($_POST['tenhh']) &&! empty($_POST['gia']) && !empty($_POST['lhang'])){
                                $hinh = $_FILES['hinh']['name'];
                                move_uploaded_file($_FILES['hinh']['tmp_name'],$file);
                                updatesp($tenhh,$gia,$hinh,$mota,$lhang ,$id);
                                
                               }else{
                                $hinh = $sp['img'];
                                updatesp($tenhh,$gia,$hinh,$mota,$lhang ,$id);
                                
                               }
                             }
                             $listsp=loadall_sp();
                            include "sanpham/list.php";
                            break; 
             case "listsp":
                if(isset($_POST['del']) && isset($_POST['check'])){
                    foreach($_POST['check'] as $check){
                        delsp($check);
                    }
                }
                     $listsp=loadall_sp();
                    include "sanpham/list.php";
                    break;
             case "xoasp":
                                    if(isset($_GET['id'])){
                                        $id = $_GET['id'];
                                         delsp($id);
                                         $listsp=loadall_sp();
                                        include "sanpham/list.php";
                                        
                                     }
                                    break;  
            case "suasp":
                                        if(isset($_GET['id'])){
                                            $id = $_GET['id'];
                                            $sp=loadsp($id);
                                            $listdm=loadall_dm();
                                            include "sanpham/update.php";
                                        }
                                        break; 
           
            case "listkh":
                if(isset($_POST['del']) && isset($_POST['check'])){
                    foreach($_POST['check'] as $check){
                        deltt($check);
                    }
                }
                $listtt=loadall_tt();
                include "taikhoan/list.php";
                break;
            case "addkh":
                if(isset($_POST['themmoi'])){
                    if(!empty($_POST['acc'])&& !empty($_POST['pass'])&&!empty($_POST['email'])&&!empty($_POST['phone'])){
                        $acc = check($_POST['acc']);
                        $pas = check($_POST['pass']);
                        $email = check($_POST['email']);
                        $phone = check($_POST['phone']);
                        addtt($acc,$pas,$email,$phone);
                        $thongbao = "Thêm thành công!";
                       }
                 }
                include "taikhoan/add.php";
                break; 
            case "xoakh":
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                         deltt($id);
                         $listtt=loadall_tt();
                        include "taikhoan/list.php";              
                     }
                    break;  
            case "suakh":
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $kh=loadtt($id);
                        include "taikhoan/update.php";
                    }
                    break;  
            case "updatekh":
                if(isset($_POST['capnhat'])){
                    $acc = check($_POST['acc']);
                    $pas = check($_POST['pass']);
                    $email = check($_POST['email']);
                    $phone = check($_POST['phone']);
                    $hoten = check($_POST['hoten']);
                    $diachi = check($_POST['address']);
                    $vaitro = check($_POST['role']);
                     $id =$_POST['id'];
                     updatett($acc,$pas,$email,$phone,$hoten,$diachi,$vaitro ,$id);
                    
                 }
                 $listtt=loadall_tt();
                include "taikhoan/list.php";
                break;  
            case "listbl":
                if(isset($_POST['del']) && isset($_POST['check'])){
                    foreach($_POST['check'] as $check){
                        delbl($check);
                    }
                }
                    $listbl=loadall_bl();
                    include "binhluan/list.php";
                    break;  
            case "xoabl":
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                         delbl($id);
                         $listbl=loadall_bl();
                         include "binhluan/list.php";              
                         }
                        break;   
            case "listtk":
                            $listtkdm=thongke_dm();
                            include "thongke/list.php";
                break;  
            case 'bieudodm':
                $listtkdm=thongke_dm();
                include "thongke/bieudotkdm.php";
                break;
            case 'bieudobl':
                $listtkbl=thongke_bl();
                include "thongke/bieudotkbl.php";
                break;
            case 'bieudodt':
                $listtkdt=thongke_dt();
                include "thongke/bieudodt.php";
                break;
            case 'listdh':
                if(isset($_POST['del']) && isset($_POST['check'])){
                    foreach($_POST['check'] as $check){
                        deldh($check);
                        del($check);
                    }
                }
                    $listdh=loadall_dh();
                    include "donhang/list.php";
                    break;
            case 'huydh':
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    huydh($id);   
                    header("location:index.php?act=listdh");               
                     }
                break;
                                        
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
