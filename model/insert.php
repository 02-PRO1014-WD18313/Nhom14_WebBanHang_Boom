<?php
function addsp($tenhh,$gia,$hinh,$mota,$lxem,$lhang){
    $sql = "INSERT INTO sanpham VALUES(null,'$tenhh','$gia','$hinh','$mota','$lxem','$lhang')";
    pdo_execute($sql);
}
?>