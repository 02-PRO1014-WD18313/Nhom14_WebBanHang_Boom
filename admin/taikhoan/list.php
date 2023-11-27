<?php
         if(!isset($_GET['page'])){
            $page = 1;
          }else{
            $page = $_GET['page'];
          }
           $bd = ($page-1)*8;
           $kt = $bd + 8;
           $sql = "select * from taikhoan limit $bd,$kt";
           $tk = pdo_query($sql);
  
?>
<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH TÀI KHOẢN</h1>
         </div>
         <div class="row2 form_content ">
          <form action="" method="POST">
           <div class="formds_loai">
      <form  action="" method="post">
            <table>
               <tr>
  
               <th>ID</th>
               <th>TÀI KHOẢN</th>
               <th>MẬT KHẨU</th>
               <th>HỌ TÊN</th>
               <th>EMAIL</th>
               <th>SỐ ĐIỆN THOẠI</th>
               <th>ĐỊA CHỈ</th>
               <th>VAI TRÒ</th>
               <th></th>
               </tr>
               <?php foreach($tk as $row): ?>
                  <tr>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['user'] ?></td>
                  <td><?php echo $row['pass'] ?></td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td><?php echo $row['tel'] ?></td>
                  <td><?php echo $row['address'] ?></td>
                  <td><?php if($row['role']==0) echo "user"  ?></td>
                  <td>
                     <a href="index.php?act=suakh&id=<?php echo $row['id'] ?>"><button type="button">Sửa</button></a>
                     <a href="index.php?act=xoakh&id=<?php echo $row['id'] ?>"><button type="button">Xóa</button></a>
                  </td>
                  </tr>
               <?php endforeach ?>
            </table>
           <div class="row mb10">
<a href="index.php?act=addkh"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
<div class="pagination">
   <?php for($i=1;$i<=ceil(count($listtt)/8);$i++): ?>
   <a href="index.php?act=listbl&page=<?php echo $i?>" class="<?php if($i == $page) echo "active"?>"><?php echo $i?></a>
   <?php endfor ?>
   </div>
           </div>
           </div>
        </form>
           </div>
 