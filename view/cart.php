<main class="bg_gray">
    <?php if($_SESSION['cart']==[] || !isset($_SESSION['cart'])) :?>
        <div class="thongbao">Giỏ hàng trống!</div>
        <div class="rs"><a href="index.php">&#8617 Quay lại mua sắm</a></div>
    <?php endif ?>
    <?php if($_SESSION['cart']!=[]) :?>
            <div class="container margin_30">
            <div class="page_header">
                    <h1>Giỏ hàng</h1>
            </div>
            <!-- /page_header -->
            <div class="row100">
              
                <table class="table table-striped cart-list">
                <thead>
                    <tr>
                        <th>
                            Sản phẩm
                        </th>
                        <th>
                            Giá
                        </th>
                        <th>
                            Số lượng
                        </th>
                        <th>
                            Tổng tiền
                        </th>
                        <th>
                            
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       $tong=0;
                       $so=0;
                    ?>
                    <?php foreach($_SESSION['cart'] as $key => $cart) :?>
                    <tr class="rim">
                        <td>
                            <div class="thumb_cart">
                                <img src="uploads/<?php echo $cart[1] ?>" data-src="style/buy-1.jpg" class="lazy loaded" alt="Image" data-was-processed="true">
                            </div>
                            <div class="girdcart">
                                <span class="item_cart"><?php echo $cart[2] ?></span>
                                <span class="item_cart">Size : <?php echo $cart[4] ?></span>
                            </div>
                        </td>
                        <td class="hiv">
                            <strong  ><?php echo number_format($cart[3]) ?></strong><strong>đ</strong>
                            <input type="hidden" name="" class="pr0" value="<?php echo $cart[3] ?>">

                        </td>
                        <td>
                            <div class="numbers-row">
                                <input type="text" value="<?php echo $cart[5] ?>"  class="qty2 sl0" name="quantity_1">
                                <div class="inc button_inc" id="tang0" onclick="tang0(<?php echo $key ?>)">+</div>
                                <div class="dec button_inc" id="giam0" onclick="giam0(<?php echo $key ?>)">-</div>
                            </div>
                        </td>
                        <td>
                            <div class="cartPrice price_0" id="" ><?php echo number_format($cart[3]*$cart[5]) ?></div>
                        </td>
                        <td class="options">
                           <a href="model/deletecart.php?id=<?php echo $key ?>"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                       <?php
                        $tong = $tong + $cart[3]*$cart[5];
                        $so = $so+ $cart[5];
                       ?>
                    <?php endforeach ?>
                    
                </tbody>
                
            </table>

            <div class="col-lg-4 cart-page__col-summary">
                <div class="cart-summary" id="cart-page-summary">
                    <div class="cart-summary__overview">
                        <h3>Tổng tiền giỏ hàng</h3>
                        <div class="cart-summary__overview__item">
                            <p>Tổng sản phẩm</p>
                            <p class="total-product" id="total-product"><?php echo number_format($so) ?></p>
                        </div>
                        <div class="cart-summary__overview__item">
                            <p>Tổng tiền hàng</p>
                            <p class="total-not-discount" id="total-not-discount"><?php echo number_format($tong) ?>đ</p>
                        </div>
                        <div class="cart-summary__overview__item">
                            <p>Thành tiền</p>
                            <p><b class="order-price-total" id="order-price-total"><?php echo number_format($tong) ?>đ</b></p>
                        </div>
                        
                    </div>
                </div>
                <div class="cart-summary__button">
                    <a href="trang.html" class="btn btn--large" id="purchase-step-1">Đặt hàng</a>
                </div>
            </div>
                        </div>
            </div>

        <?php endif ?>
        </main>
