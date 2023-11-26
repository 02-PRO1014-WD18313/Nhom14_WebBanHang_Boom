<html lang="en">
<?php ob_start(); ?>
<head>
    <meta charset="utf-8">
    <title>BOOM-CỬA HÀNG BÁN TRÀ SỮA UY TÍN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="css/log.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/all.css">
    <!-- Favicon -->
    <link href="ice-cream-shop-website-template/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="ice-cream-shop-website-template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="ice-cream-shop-website-template/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="ice-cream-shop-website-template/css/style.css" rel="stylesheet">
    <style>
        .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
        .timkiem{
            border-radius: 15px;
            border: 1px solid white;
           
        }
        .search{
            border-radius: 15px;
            border: 1px solid white;
            background-color: white;
            margin-left: 10px;
        }
        .search:hover{
            background-color: rgb(253, 200, 217);
        }
        .btn{
            background:pink;
            color:green;
        }
        .forms{
            display:flex;
        }
    </style>
</head>
<?php 
 $listdm = loadall_dm();
?>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                       
                        <a class="text-white px-3" href="">LIÊN HỆ NGAY</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">HỖ TRỢ</a>
                        <div style="margin-left: 50px;">
                        <form action="" class="forms">
                            <input class="timkiem" type="text" placeholder="Tìm kiếm">
                            <input class="search" type="submit" value="TÌM KIẾM NGAY">
                        </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            Giỏ hàng
                        </a>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">B</span>OOM</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Trang chủ</a>
                        <a href="about.html" class="nav-item nav-link">Gioi thiệu</a>
                        <div class="dropdown">
                            <a href="product.html" class="nav-item nav-link">DANH MỤC</a>
                            <div class="dropdown-content">
                                <?php foreach($listdm as $dm):?>
                              <li><a href="index.php?act=danhmucsp&id=<?php echo $dm['iddanhmuc']?>"><?php echo $dm['tendanhmuc']?></a></li>
                              <?php endforeach ?>
                              
                              
                            </div>
                          </div>
                    </div>
                    <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">B</span>OOM</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="service.html" class="nav-item nav-link">tin tức</a>
                        <a href="gallery.html" class="nav-item nav-link">Cửa hàng</a>
                        <?php if(!isset($_SESSION['account'])) :?>
                        <a href="index.php?act=dangnhap" class="nav-item nav-link">Đăng nhập</a>
                        <?php endif ?>
                        <?php if(isset($_SESSION['account'])) :?>
                        <a href="model/logout.php" class="nav-item nav-link">Đăng xuất</a>
                        <?php endif ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
