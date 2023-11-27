<?php
 function updatedm($id,$ten_loai){
    $sql = "update danhmuc set tendanhmuc='$ten_loai' where iddanhmuc = $id";
    pdo_execute($sql);
 }
 function updatesp($tenhh,$gia,$hinh,$mota,$lhang ,$id){
  $sql = "UPDATE sanpham SET name = '$tenhh',gia = '$gia',img = '$hinh',mota = '$mota',iddanhmuc = '$lhang' WHERE idsp = $id";
   pdo_execute($sql);
 }
 function updatett($acc,$pas,$email,$phone,$hoten,$diachi,$vaitro ,$id){
   $sql = "UPDATE taikhoan SET user='$acc',pass='$pas',email='$email',tel='$phone',name='$hoten',address='$diachi',role='$vaitro' WHERE id =$id";
   pdo_execute($sql);
  }
  function updateuser($acc,$name,$email,$phone,$diachi){
    $sql = "UPDATE login SET hoten='$name',diachi='$diachi',email='$email',phone='$phone' WHERE account = '$acc'";
    pdo_execute($sql);
   }
  function huydh($id){
    $sql = "UPDATE don_hang SET tinh_trang = 'cancel' where ma_dh = $id";
    pdo_execute($sql);
 }
 function updateha($id,$img){
  $sql = "UPDATE images SET imageURL ='$img' WHERE imageid = '$id'";
  pdo_execute($sql);
 }
?>