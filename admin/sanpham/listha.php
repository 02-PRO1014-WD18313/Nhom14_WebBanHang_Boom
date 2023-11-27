<div class="name">
          <h1><?php echo $sp['name'] ?></h1>
         </div>
    <div class="row2">
    <form action="" method="post" enctype="multipart/form-data">
    <div class="row mb10 ">
            <input class="mr20 row2" type="file" name="imgs[]" id="" multiple>
    </div>
            <div class="row2 mb10 ">
            <button class="mr20" type="submit" name="addimgs">Thêm ảnh</button>
            <a href="index.php?act=listsp"><button class="mr20" type="button">Danh sách</button></a>
            </div>
            </form>
         <div class="row2 form_content">
           <div class="row2 mb10 formds_loai">
           <?php if(count($ha)<=0){echo "Chưa có hình ảnh";} ?> <br>
           <?php if(count($ha)>0) :?>
           <table>
               <tr>
               <th>HÌNH ẢNH</th>
               <th></th>
               <th></th>
               </tr>

                 <?php foreach ($ha as $key => $value):?>
                    <form action="" method="post" enctype="multipart/form-data">
                  <tr>
                  <td>
                     <img src="../uploads/<?php echo $value['imageURL'] ?>" alt="" width="100px"> 
                  </td>
                  <td>
                    <input type="file" name="img" id="">
                    <input type="hidden" name="maha" value="<?php echo $value['imageid'] ?>">
                  </td>
                  <td>
                  <button type="submit" name="upimg">Đổi ảnh</button>
                  <a href="index.php?act=xoaha&id=<?php echo $value['idsp'] ?>&idd=<?php echo $value['imageid']?>"><button type="button">Xóa ảnh</button></a>
                  </td>
                  </tr>
                  </form>
                  <?php endforeach ?>
            </table>
            <?php endif ?>
            
           </div>

         </div>
