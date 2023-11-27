<div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT LOẠI TRÀ SỮA </h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10">
                <label for="">Tên hàng hóa:</label>
                <br>
                <input class="row2 mb10" type="text" placeholder="" name="tenhh" value="<?php echo $sp['name']?>">
            </div>  
            <div class="row2 mb10">
                <label for="">Đơn giá:</label>
                <br>
                <input class="row2 mb10" type="number" placeholder="" name="gia" min ="0" value="<?php echo $sp['gia']?>">
            </div> 
            <div class="row2 mb10">
                <label for="">Hình ảnh:</label>
                <img src="../uploads/<?php echo $sp['img'] ?>" alt="" width="100px" height="100px">
                <br>
                <input class="row2 mb10"  type="file" placeholder="" name="hinh">
            </div> 
            <div class="row2 mb10">
                <label for="">Danh mục:</label>
                <br>
                <select name="lhang" id=""  >
                    <?php foreach($listdm as $row) : ?>
                        <option value="<?php echo $row['iddanhmuc']?>" <?php if($row['iddanhmuc']==$sp['iddanhmuc']) echo "selected" ?>><?php echo $row['tendanhmuc']?></option>
                    <?php endforeach ?>
                </select>
            </div> 
            <div class="row2 mb10">
                <label for="">Mô tả:</label>
                <br>
                <textarea name="mota" id="" cols="40" rows="10"><?php echo $sp['mota']?></textarea>
            </div> 
           <div class="row mb10 ">
            <input type="hidden" name="id" value="<?php echo $sp['idsp'] ?>">
         <input name="capnhat" class="mr20" type="submit" value="Cập Nhật">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
          </form>
         </div>
         <?php
        if(isset($thongbao) && $thongbao!="") echo $thongbao;      
         ?>
        </div>