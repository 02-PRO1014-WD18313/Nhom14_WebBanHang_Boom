<?php 
$thongbao = "";
   if(isset($_GET['id'])){
    $id = $_GET['id'];
   $sp = loadsp($id);
   $spcl=spcungloai($id,$sp['iddanhmuc']);}
   $img = $sp['img'];
   $name = $sp['name'];
   $price = $sp['gia'];
  if(isset($_POST['addcart'])){
    $sl = $_POST['sl'];
    if(empty($_POST['size'])){
      $thongbao = "Chưa chọn size!";
    }else{
        $size = $_POST['size'];
    $i = 0;$check = 0;
    foreach($_SESSION['cart'] as $cart){
      if($cart[0]==$id && $cart[4]==$size){
        $sl = $sl + $cart[5];
        $check = 1;
        $_SESSION['cart'][$i][5] = $sl;
      }$i++;
    }
    if($check==0){
    $cart = [$id,$img,$name,$price,$size,$sl];
  array_push($_SESSION['cart'],$cart);
  }
  header("location:index.php?act=cart");
 }
  }
?>
<div class="offset-md-1">
        <div class="container-fuild">
          <form class="row mt-4" method="post">
            <div class="col-md-3">
              <img
                class="img-detail"
                src="uploads/<?php echo $sp['img'] ?>"
                alt=""
              />
            </div>
            <div class="col-md-8 chitiet">
              <ul>
                <li>
                  Tên hàng: <?php echo $sp['name']?>
                  <span class="badge bg-info">VNA</span>
                </li>
                <li>
                  Đơn giá:
                  <span class="line-through"><?php echo $sp['gia']?> VNĐ</span>
                  <span class="badge bg-danger" style="color: white;">25.000 VNĐ</span>
                </li>
                <li>Nhà cung cấp: BOOM</li>
                
                <li>
                  SIZE:
  
                    <input name="size" type="radio" value="s" />S
                    <input name="size" type="radio" value="m" />M
                    <input name="size" type="radio" value="l" />L
                     <span><?php echo $thongbao ?></span>
                </li>
                <li>
                  Giảm giá:
                  <span class="badge bg-danger" style="color: white;">5%</span>
                </li>
              </ul>
              <button class="btn btn-success" type="button" onclick="giam()">-</button>
            <input type="number" id="sl" name="sl" class="btn" value="1" min="1" >
            <button class="btn btn-success" type="button" onclick="tang()">+</button>
            <button class="btn btn-success" type="submit" name="addcart"> Mua hàng</button>
</div>
</form>
          <div class="row">
            <div class="col-md-12">
              <h4 class="mt-5">MÔ TẢ SẢN PHẨM</h4>
              <hr />
              <span>
              <?php echo $sp['mota']?>
              </span>
              <hr />
              <div class="mb">
                <div class="box_search">
                    <form action="" method="POST">
                      <input type="hidden" name="idpro" value="">
                      <input type="text" name="noidung"  >
                      <input type="submit" name="guibinhluan" value="Gửi bình luận">
                    </form>
                  </div>
            <hr />
    
            <div class=" mb">
                <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
                <div class="box_content">
              <?php foreach($spcl as $row):?>
                <li><a href="index.php?act=ct&id=<?php echo $row['idsp']?>"><?php echo $row['name']?></a>
                </li>
                <?php endforeach ?>
                                </div>
            </div>
        </div>
            </div>
          </div>
        </div>
      </div>    