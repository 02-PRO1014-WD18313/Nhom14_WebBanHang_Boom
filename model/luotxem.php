
<?php
    if(isset($_GET['act']) && $_GET['act']=="chitiet" && isset($_GET['id']) ){ 
    $id = $_GET['id'];
    $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 where ma_hh = $id";
    pdo_execute($sql);
    }
?>