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