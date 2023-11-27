<?php
function loadall_danhmuc(){
    $sql="select * from danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
// function load_ten_danhmuc($iddm){
//     if($iddm>0){
//         $sql="select * from danhmuc where id=".$iddm;
//         $danhmuc=pdo_query_one($sql);
//         extract($danhmuc);
//         return $name;
//     }else{
//         return "";
//     }
// }
// lấy 1 danh mục
function loadone_danhmuc($iddanhmuc){
    $sql="select *from danhmuc where iddanhmuc=  ".$iddanhmuc;
    $dm=pdo_query($sql);
    return $dm;
}
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO danhmuc(name) VALUES('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($iddm)
{
    $sql = "DELETE FROM danhmuc where iddanhmucc =".$iddm;
    pdo_query($sql);
}
function update_danhmuc($iddm, $tenloai)
{
    $sql = "UPDATE danhmuc SET name='" . $tenloai . "' WHERE iddanhmuc=" . $iddm;
    pdo_execute($sql);
}
function load_ten_danhmuc($iddm)
{
    if ($iddm > 0) {
        $sql = "SELECT * FROM danhmuc where iddanhmuc = " . $iddm;
        $dm =  pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}