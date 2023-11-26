<?php
         if(!isset($_GET['page'])){
            $page = 1;
          }else{
            $page = $_GET['page'];
          }
           $bd = ($page-1)*8;
           $kt = $bd + 8;
           $sql = "select * from sanpham limit $bd,$kt";
           $sp = pdo_query($sql);
  
?>
<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="" method="POST">
           <div class="row2 mb10 formds_loai">
           <table>
               <tr>
               <th>TÊN SẢN PHẨM</th>
               <th>ĐƠN GIÁ</th>
               <th>LOẠI HÀNG</th>
               <th>HÌNH ẢNH</th>
               <th></th>
               </tr>
               <?php foreach($sp as $row): ?>
                <?php
                   $dm=loaddm($row['iddanhmuc']);
                ?>
                  <tr>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['gia'] ?></td>
                  <td><?php if(is_array($dm)) echo $dm['tendanhmuc'] ?></td>
                  <td><img src="../uploads/<?php echo $row['img'] ?>" alt="" width="40px" height="40px"></td>
                  
                  <td>
                     <a href="index.php?act=suasp&id=<?php echo $row['idsp'] ?>"><button type="button">Sửa thông tin</button></a>
                     <a href="index.php?act=xoasp&id=<?php echo $row['idsp'] ?>"><button type="button">Xóa</button></a>
                     <a href="index.php?act=suaha&id=<?php echo $row['idsp'] ?>"><button type="button">Sửa hình ảnh</button></a>
                  </td>
                  </tr>
               <?php endforeach ?>
            </table>
           </div>
           <div class="row mb10 ">
         <a href="index.php?act=addsp"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
         <div class="pagination">
   <?php for($i=1;$i<=ceil(count($listsp)/8);$i++): ?>
   <a href="index.php?act=listsp&page=<?php echo $i?>" class="<?php if($i == $page) echo "active"?>"><?php echo $i?></a>
   <?php endfor ?>
   </div>
           </div>
          </form>
         </div>
        </div>

