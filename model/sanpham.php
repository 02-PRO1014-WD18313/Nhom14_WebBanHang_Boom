<?php
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,6";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_key($keyw){
    $sql="select * from sanpham where name like '%".$keyw."%' ";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
// function loadall_sanpham($iddm){
//     $sql="select * from sanpham where iddm = $iddm ";
//     $listsanpham=pdo_query($sql);
//     return  $listsanpham;
// }

// 
function load_ten_dm($iddm){
    $sql="select* from danhmuc where id=".$iddm;
    $dm=pdo_query_one($sql);
    extract($dm);
    return $name;
}
function loadone_sanpham($id){
    $sql = "select * from sanpham where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
function load_sanpham_cungloai($id, $iddm){
    $sql = "select * from sanpham where iddm = $iddm and id <> $id";
    $result = pdo_query($sql);
    return $result;
}
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh){
    if($hinh!="")
    $sql="update sanpham set iddm='".$iddm."', name='" .$tensp."', price='".$giasp."',mota='".$mota."',img='".$hinh."' where id=".$id;
    else
    $sql="update sanpham set iddm='".$iddm."', name='" .$tensp."', price='".$giasp."',mota='".$mota."'where id=".$id;
    pdo_execute($sql);
}




function loadall_sanpham($kyw, $iddm)
{
    $sql = "SELECT * FROM sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddanhmuc = '" . $iddm . "'";
    }
    $sql .= " order by idsp desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}