<?php
function loadall_danhmuc(){
    $sql="select * from danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
function load_ten_danhmuc($iddm){
    if($iddm>0){
        $sql="select * from danhmuc where id=".$iddm;
        $danhmuc=pdo_query_one($sql);
        extract($danhmuc);
        return $name;
    }else{
        return "";
    }
}
// lấy 1 danh mục
function loadone_danhmuc($id_danh_muc){
    $sql="select *from danh_muc_san_pham where id_danh_muc=  ".$id_danh_muc;
    $dm=pdo_query_one($sql);
    return $dm;
}
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO danh_muc_san_pham(name) VALUES('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id_danh_muc)
{
    $sql = "DELETE FROM danh_muc_san_pham where id_danh_muc =".$id_danh_muc;
    pdo_query($sql);
}
function update_danhmuc($id_danh_muc, $tenloai)
{
    $sql = "UPDATE danh_muc_san_pham SET name='" . $tenloai . "' WHERE id_danh_muc=" . $id_danh_muc;
    pdo_execute($sql);
}
// function load_ten_danhmuc($iddm)
// {
//     if ($iddm > 0) {
//         $sql = "SELECT * FROM danh_muc_san_pham where id_danh_muc = " . $iddm;
//         $dm =  pdo_query_one($sql);
//         extract($dm);
//         return $name;
//     } else {
//         return "";
//     }
// }