
@extends('index')


	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="http://127.0.0.1:8000/index"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Singlepage</li>
			</ol>
		</div>
	</div>
    <?php require "../database/dbconnect.php";?>
    <div class="products">
		<div class="row">
            <?php 
                $db =new dbconnect();
                $result = $db->getData("SELECT * FROM `san_pham`");

                while ($r = mysqli_fetch_assoc($result)) 
                {
                    ?>
                        <div class="col-xl-3 col-lg-4 col-md-4 col-12">
                <div class="single-product">
                    <div class="product-img">
                        <a href="http://127.0.0.1:8000/user/xemchitiet">
                            <img class="default-img" src="../upload/sanpham/<?=$r['image']?>" alt="#">
                            <img class="hover-img" src="../upload/sanpham/<?=$r['image']?>" alt="#">
                        </a>
                        <h2 style="color: #c00;">{{ $r->name }}</h2>
					<div class="w3agile_description">
						<h4>Description :</h4>
						<p>{$r->description}</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h3  class="m-sing">Giá từ: {{ number_format($r->unit_price) }} vnd</h3>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="{{url('/savecart')}}" method="get">
                @csrf
								<fieldset>
                  <label>Số lượng:</label>
									<input style="margin-top:10px;margin-bottom:10px" name="qty" type="number" min="1"  value="1" />
									<input name="productid_hidden" type="hidden"  value="{{$r->id}}" />
                  <input  type="submit" name="submit" value="Add to cart" class="button" />
								</fieldset>
							</form>
              
						</div>
         
					</div>
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
                }

             ?>
            
            
        </div>
	
</div>

    @stop()