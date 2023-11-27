<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Trà sữa đang được ưa thích nhất tại BOOM</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel product-carousel">
                        
                        <?php
                            
                            
                            foreach ($dssp as $sp){
                                extract($sp);
                                $linksp="index.php?act=ct&id=". $idsp;
                                $hinh= "uploads/".$img;
                                echo '<div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                                <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                    <h4 class="font-weight-bold text-white mb-0">'.$gia.'</h4>
                                </div>
                                <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <a href="'.$linksp.'"><img class="rounded-circle w-100 h-100" src="'.$hinh.'" style="object-fit: cover;"></a>
                                </div>
                                <h5 class="font-weight-bold mb-4"><a href="'.$linksp.'">'.$name.'</a></h5>
                                <a href="'.$linksp.'" class="btn btn-sm btn-secondary">Mua ngay</a>
                            </div>';
                            }
                        ?>
                        <!-- <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">25k</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/trasua33.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Trà sữa matcha</h5>
                            <a href="" class="btn btn-sm btn-secondary">Mua ngay</a>
                        </div> -->
                        <!-- <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">25k</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/trasua55.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Trà sữa vị đào</h5>
                            <a href="" class="btn btn-sm btn-secondary">Mua ngay</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">25k</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/trasua22.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">trà sữa vị nho</h5>
                            <a href="" class="btn btn-sm btn-secondary">Mua ngay</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">25k</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/trasua77.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Trà sữa vị socola</h5>
                            <a href="" class="btn btn-sm btn-secondary">Mua ngay</a>
                        </div>
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">25k</h4>
                            </div>
                            <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-5.jpg" style="object-fit: cover;">
                            </div>
                            <h5 class="font-weight-bold mb-4">Trà sữa vị bơ</h5>
                            <a href="" class="btn btn-sm btn-secondary">Mua ngay</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div> 