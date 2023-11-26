<?php
function loadall_sp(){
    $sql="select * from sanpham order by id desc";
     $listsp=pdo_query($sql);
     return $listsp;
}
function loadsp($id){
    $sql="select * from sanpham where id=$id";
    $sp = pdo_query_one($sql);
    return $sp;
}
?>