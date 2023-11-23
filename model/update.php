<?php
 function updatesp($tenhh,$gia,$hinh,$lxem,$mota,$lhang ,$id){
    $sql = "UPDATE sanpham SET name = '$tenhh',price = '$gia',img = '$hinh',luotxem = '$lxem',mota = '$mota',iddm = '$lhang' WHERE id = $id";
    pdo_execute($sql);
  }
?>