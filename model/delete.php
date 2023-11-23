<?php 
function delsp($id){
    $sql = "delete from sanpham where id=$id";
    pdo_execute($sql);
}?>