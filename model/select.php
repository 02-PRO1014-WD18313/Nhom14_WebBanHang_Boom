<?php
//danh mục
function loadall_dm(){
    $sql="select * from danhmuc order by iddanhmuc desc";
     $listdm=pdo_query($sql);
     return $listdm;
}
function loaddm($id){
    $sql="select * from danhmuc where iddanhmuc=$id";
    $dm = pdo_query_one($sql);
    return $dm;
}
//san pham
function loadall_sp(){
    $sql="select * from sanpham order by idsp desc";
     $listsp=pdo_query($sql);
     return $listsp;
}
function loadsp($id){
    $sql="select * from sanpham where idsp=$id";
    $sp = pdo_query_one($sql);
    return $sp;
}
//san phẩm theo danh mục
function loadspdm($id){
    $sql="select * from sanpham where iddanhmuc=$id";
    $spdm = pdo_query($sql);
    return $spdm;
}
//sản phẩm cùng loại
function spcungloai($id,$ma_loai){
    $sql="SELECT * FROM sanpham WHERE idsp <> $id AND iddanhmuc = $ma_loai";
    $spcl = pdo_query($sql);
    return $spcl;
}
//tài khoản
function loadall_tt(){
    $sql="select * from taikhoan";
     $listtt=pdo_query($sql);
     return $listtt;
}
function loadtt($id){
    $sql="select * from taikhoan where id=$id";
    $tt = pdo_query_one($sql);
    return $tt;
}
function loaduser1($acc){
    $sql="select * from login where account = '$acc'";
    $user = pdo_query($sql);
    return $user;
}function loaduser($acc){
    $sql="select * from taikhoan where user = '$acc'";
    $user = pdo_query_one($sql);
    return $user;
}
//reviews
function loadall_bl(){
    $sql="select * from reviews";
     $view=pdo_query($sql);
     return $view;
}
//bình luận theo sản phẩm
function blhh($id){
    $sql="SELECT * FROM binh_luan WHERE ma_hh = $id";
     $blhh=pdo_query($sql);
     return $blhh;
}
//thống kê theo danh mục
function thongke_dm(){
    $sql="select danhmuc.iddanhmuc as id,danhmuc.tendanhmuc as danhmuc,count(sanpham.idsp) as countsp,min(sanpham.gia) as mingia,max(sanpham.gia) as maxgia,avg(sanpham.gia) as tb
    from sanpham left join danhmuc on sanpham.iddanhmuc = danhmuc.iddanhmuc group by danhmuc.iddanhmuc order by danhmuc.iddanhmuc asc";
     $listtkdm=pdo_query($sql);
     return $listtkdm;
}
//thống kê bình luận theo sản phẩm
function thongke_bl(){
    $sql="select hang_hoa.ma_hh as id,hang_hoa.ten_hh as name,count(binh_luan.ma_hh) as countbl,min(binh_luan.ngay) as minngay,max(binh_luan.ngay) as maxngay
    from hang_hoa left join binh_luan on hang_hoa.ma_hh = binh_luan.ma_hh group by hang_hoa.ma_hh order by hang_hoa.ma_hh asc";
     $listtkbl=pdo_query($sql);
     return $listtkbl;
}
//thống kê doanh thu theo ngày
function thongke_dt(){
    $sql="select date,sum(thanh_tien) as dt
    from don_hang where tinh_trang <> 'cancel' group by date order by date asc";
     $listtkdt=pdo_query($sql);
     return $listtkdt;
}
//đơn hàng
function loadall_dh(){
    $sql="select * from don_hang order by ma_dh desc";
     $listdh=pdo_query($sql);
     return $listdh;
}
function loaddh($id){
    $sql="select * from don_hang where ma_dh = '$id'";
    $dh = pdo_query_one($sql);
    return $dh;
}
function dhcomplete($acc){
    $sql="select * from don_hang where user = '$acc' and tinh_trang != 'cancel' order by ma_dh desc";
     $yourdh=pdo_query($sql);
     return $yourdh;
}
//sản phẩm đã bán
function spdh($id){
    $sql="select * from san_pham_da_ban where ma_dh = '$id'";
     $sp=pdo_query($sql);
     return $sp;
}
//tim kiem
function timkiem($key){
    $sql = "SELECT * FROM hang_hoa WHERE ten_hh LIKE '%$key%'";
    $row=pdo_query($sql);
    return $row;
}
//9 sản phẩm mới nhất
function spmoi(){
    $sql = "SELECT ma_hh,hinh,ten_hh,gia,giam_gia FROM hang_hoa ORDER BY ngay_nhap DESC LIMIT 9";
    $spmoi=pdo_query($sql);
    return $spmoi;
}
//10 sản phẩm yêu thích
function spyeuthich(){
    $sql = "SELECT ma_hh,hinh,ten_hh FROM hang_hoa ORDER BY so_luot_xem DESC LIMIT 10";
    $spyt=pdo_query($sql);
    return $spyt;
}
function loadha($id){
    $sql = "SELECT * FROM images WHERE idsp = $id";
    $row=pdo_query($sql);
    return $row;
}
?>