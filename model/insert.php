<?php
function adddm($ten_loai){
    $sql = "INSERT INTO danhmuc VALUES(null,'$ten_loai')";
    pdo_execute($sql);
}
function addsp($tenhh,$gia,$hinh,$mota,$lhang){
    $sql = "INSERT INTO sanpham VALUES(null,'$tenhh','$mota','$gia','$lhang','$hinh')";
    pdo_execute($sql);
}
function addtt($acc,$pas,$email,$phone){
    $sql = "INSERT INTO taikhoan(user,pass,email,tel) VALUES('$acc','$pas','$email','$phone')";
    pdo_execute($sql);
}
function addttt($acc,$pas,$email){
    $sql = "INSERT INTO taikhoan(user,pass,email) VALUES('$acc','$pas','$email')";
    pdo_execute($sql);
}
function addbl($bl,$id,$acc,$date){
    $sql = "INSERT INTO binh_luan VALUES(null,'$bl','$id','$acc','$date')";
    pdo_execute($sql);
}
function adddh($name,$phone,$acc,$date,$tt,$diachi){
    $sql = "insert into don_hang values(null,'$acc','$name','$phone','$tt','$date','$diachi','complete')";
    pdo_execute($sql);
}
function addspdb($ma_hh,$ma_dh,$ten,$soluong,$dongia){
    $sql = "insert into san_pham_da_ban values(null,'$ma_hh','$ma_dh','$ten','$soluong','$dongia')";
    pdo_execute($sql);
}
function addimg($id,$img){
    $sql = "INSERT INTO images VALUES(null,'$id','$img')";
    pdo_execute($sql);
}
?>