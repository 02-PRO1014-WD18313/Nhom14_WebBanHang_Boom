<?php
function deldm($id){
    $sql = "delete from danhmuc where iddanhmuc=$id";
    pdo_execute($sql);
}
function delsp($id){
    $sql = "delete from sanpham where idsp=$id";
    pdo_execute($sql);
}
function deltt($id){
    $sql = "delete from taikhoan where id=$id";
    pdo_execute($sql);
}
function delbl($id){
    $sql = "delete from reviews where idrv=$id";
    pdo_execute($sql);
}
function deldh($id){
    $sql = "delete from don_hang where ma_dh=$id";
    pdo_execute($sql);
}
function del($id){
    $sql = "delete from san_pham_da_ban where ma_dh=$id";
    pdo_execute($sql);
}
function delha($id){
    $sql = "delete from images where imageid=$id";
    pdo_execute($sql);
}
?>