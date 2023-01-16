<div class="product-area section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Trending Item</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-info">
                    <div class="nav-main">
                        <!-- Tab Nav -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <!-- <li class="nav-item"><a class="nav-link active" href="http://127.0.0.1:8000/user/truyencotich" role="tab">Truyện cổ tích</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/user/tieuthuyet" role="tab">Tiểu thuyết</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/sachgiaoduc" role="tab">Sách giáo dục</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/index" role="tab">Sách khác</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/truyenma" role="tab">Truyện ma</a></li>
                            <li class="nav-item"><a class="nav-link"  href="#prices" role="tab">Liên hệ</a></li> -->

                            <?php
                                        require_once "../database/dbconnect.php";
                                        $db =new dbconnect();
                                        $result = $db->getData("SELECT * FROM `loai_sp` ");

                                        while ($r = mysqli_fetch_assoc($result))
                                        {
                                            ?>
                                                <li class="active">
                                                    <span></span><a href="/loaisp/<?=$r['id']?>"><?=$r['tenloai']?></a>

                                                </li>
                                            <?php
                                        }

                                    ?>
                        </ul>
                        <!--/ End Tab Nav -->
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade show active" id="man" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">

                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                    <?php
                                        require_once "../database/dbconnect.php";

                                        $db =new dbconnect();
                                        $result = $db->getData("SELECT * FROM `loai_sp` where id=$id");
                                        $r=mysqli_fetch_array($result);

                                    ?>
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="../upload/sanpham/<?=$r['image']?>" alt="#">
                                                    <img class="hover-img" src="../upload/sanpham/<?=$r['image']?>" alt="#">
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                    </div>
                                                    <div class="product-action-2">
                                                        <a title="Add to cart" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="http://127.0.0.1:8000/user/xemchitiet"><?=$r['name']?></a></h3>
                                                <div class="product-price">
                                                    <span><?=number_format($r['unit_price'])?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            <?php
                                        
                                     ?>


                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->
                        <!-- Start Single Tab -->
                        <div class="tab-pane fade" id="women" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                    </div>
                                                    <div class="product-action-2">
                                                        <a title="Add to cart" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">Women Hot Collection</a></h3>
                                                <div class="product-price">
                                                    <span>$29.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="product-details.html">
                                                    <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                                    <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                                </a>
                                                <div class="button-head">
                                                    <div class="product-action">
                                                        <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                        <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                        <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
                                                    </div>
                                                    <div class="product-action-2">
                                                        <a title="Add to cart" href="#">Add to cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                                <div class="product-price">
                                                    <span>$29.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->
                        <!-- Start Single Tab -->
                        <!--/ End Single Tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
