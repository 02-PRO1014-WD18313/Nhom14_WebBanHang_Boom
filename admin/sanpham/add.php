<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI HÀNG HÓA</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10">
                <label for="">Tên hàng hóa:</label>
                <br>
                <input class="row2 mb10" type="text" placeholder="Nhập vào tên hàng hóa" name="tenhh">
            </div>  
            <div class="row2 mb10">
                <label for="">Đơn giá:</label>
                <br>
                <input class="row2 mb10" type="text" placeholder="Nhập vào giá" name="gia" min ="0">
            </div>  
            <div class="row2 mb10">
                <label for="">Ảnh đại diện:</label>
                <br>
                <input class="row2 mb10"  type="file" placeholder="" name="hinh">
            </div> 
            <div class="row2 mb10">
                <label for="">Ảnh chi tiết:</label>
                <br>
                <input class="row2 mb10"  type="file" placeholder="" name="hinhs[]" multiple>
            </div> 
            <div class="row2 mb10">
                <label for="">Danh mục:</label>
                <br>
                <select class="" name="lhang" id="">
                  <option value="0">chọn loại hàng</option>
                  <?php foreach($listdm as $dm) :?>
                    <option value="<?php echo $dm['iddanhmuc'] ?>"><?php echo $dm['tendanhmuc'] ?></option>
                  <?php endforeach ?>
                </select>
            </div> 
            <div class="row2 mb10">
                <label for="">Mô tả:</label>
                <br>
                <textarea class="row2 mb10" name="mota" id="" cols="40" rows="10"></textarea>
            </div> 
           <div class="row mb10 ">
         <input name="themmoi" class="mr20" type="submit" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listsp"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
          </form>
         </div>
         <?php
        if(isset($thongbao) && $thongbao!="") echo $thongbao;      
         ?>
        </div>