<div class="row2">
   <div class="row2 font_title">
      <h1>DANH SÁCH HÀNG HÓA</h1>
   </div>
   <div class="row2 form_content ">
      <form action="" method="POST">
         <div class="row2 mb10 formds_loai">
            <table>
               <tr>
                  <th></th>
                  <th>TÊN LOẠI</th>
                  <th>ĐƠN GIÁ</th>
                  <th>LOẠI HÀNG</th>
                  <th>HÌNH ẢNH</th>
                  <th></th>
               </tr>
               <?php foreach ($listsp as $row) : ?>
                  <?php
                  $dm = loadall_danhmuc($row['iddm']);
                  ?>
                  <tr>
                     <td><input type="checkbox" class="check" name="check[]" value="<?php echo $row['id'] ?>"></td>
                     <td><?php echo $row['name'] ?></td>
                     <td><?php echo $row['price'] ?></td>
                     <td><?php if (is_array($dm)) echo $dm['name'] ?></td>
                     <td><img src="../imge/<?php echo $row['img'] ?>" alt="" width="40px" height="40px"></td>

                     <td>
                        <a href="index.php?act=suasp&id=<?php echo $row['id'] ?>"><button type="button">Sửa</button></a>
                        <a href="index.php?act=xoasp&id=<?php echo $row['id'] ?>"><button type="button">Xóa</button></a>
                     </td>
                  </tr>
               <?php endforeach ?>
            </table>
         </div>
         <div class="row mb10 ">
            <input class="mr20" type="button" value="CHỌN TẤT CẢ" onclick="checkall()">
            <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ" onclick="uncheckall()">
            <input class="mr20" type="submit" name="del" value="XÓA CÁC MỤC ĐÃ CHỌN">
            <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
         </div>
      </form>
   </div>
</div>