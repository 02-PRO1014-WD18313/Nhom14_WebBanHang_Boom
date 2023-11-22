<?php
include "../model/pdo.php";
include "../model/insert.php";
include "../model/update.php";
include "../model/delete.php";
include "../model/select.php";
include "../model/taikhoan.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
                    
                    case "addsp":
                        if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                            $target = "../imge/";
                            $file = $target.basename($_FILES['hinh']['name']);
                            if($_FILES['hinh']['name'] !="" && $_FILES['hinh']['error']==0 && !empty($_POST['tenhh']) &&! empty($_POST['gia']) && !empty($_POST['lhang'])){
                            $hinh = $_FILES['hinh']['name'];
                            move_uploaded_file($_FILES['hinh']['tmp_name'],$file);
                            $tenhh = $_POST['tenhh'];
                            $gia = $_POST['gia'];
                            $lhang = $_POST['lhang'];
                            $mota = $_POST['mota'];
                            $lxem = $_POST['lxem'];
                            addsp($tenhh,$gia,$hinh,$mota,$lxem,$lhang);
                             $thongbao = "thêm thành công!";
                            }
                         }
                        $listdanhmuc=loadall_danhmuc();
                        include "sanpham/add.php";
                        break;
                        case "updatesp":
                            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                                $target = "../imge/";
                                $file = $target.basename($_FILES['hinh']['name']);
                                $id =$_POST['id'];
                                $sp=loadsp($id);
                                $tenhh = $_POST['tenhh'];
                                $gia = $_POST['gia'];
                                $lhang = $_POST['lhang'];
                                $mota = $_POST['mota'];
                                $lxem = $_POST['lxem'];
                                if($_FILES['hinh']['name'] !="" && $_FILES['hinh']['error']==0 && !empty($_POST['tenhh']) &&! empty($_POST['gia']) && !empty($_POST['lhang'])){
                                $hinh = $_FILES['hinh']['name'];
                                move_uploaded_file($_FILES['hinh']['tmp_name'],$file);
                                updatesp($tenhh,$gia,$hinh,$lxem,$mota,$lhang ,$id);
                                
                               }else{
                                $hinh = $sp['img'];
                                updatesp($tenhh,$gia,$hinh,$lxem,$mota,$lhang ,$id);
                                
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
                                            $listdanhmuc=loadall_danhmuc();
                                            include "sanpham/update.php";
                                        }
                                        break; 
            
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>
