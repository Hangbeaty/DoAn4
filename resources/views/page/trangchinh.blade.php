@extends('layout.site')

@section('main')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
        <li data-target="#myCarousel" data-slide-to="4" class=""></li>
        <li data-target="#myCarousel" data-slide-to="5" class=""></li>
        <li data-target="#myCarousel" data-slide-to="6" class=""></li>
    </ol>
    <div class="carousel-inner" >
        <div class="item active">
            <div class="">
              

                    <img src="/project4v1/public/image/xemay/bia1.jpg" style="max-width:100%"/>
                   
               
            </div>
        </div>
        <div class="item">
            <div class="">
                <div class="carousel-item">
                  

                    <img src="/project4v1/public/image/xemay/bia2.jpg"style="max-width:100%" />
                </div>
            </div>
        </div>
        <div class="item">
            <div class="">
                <div class="carousel-item">
                 

                    <img src="/project4v1/public/image/xemay/bia3.png" style="max-width:100%"/>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="">
                <div class="carousel-item">

                    <img src="/project4v1/public/image/xemay/bia4.jpg" style="max-width:100%"/>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="">
                <div class="carousel-item">
                    <img src="/project4v1/public/image/xemay/bia5.jpg" style="max-width:100%" />
                  
                </div>
            </div>
        </div>
        <div class="item">
            <div class="">
                <div class="carousel-item">


                    <img src="/project4v1/public/image/xemay/bia6.jpg"  style="max-width:100%" />
                </div>
            </div>
        </div>
        <div class="item">
            <div class="">
                <div class="carousel-item">

                    <img src="/project4v1/public/image/xemay/bia7.jpg" style="max-width:100%" />
                 
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="top-brands">
		<div class="container">
		<h2>ƯU ĐÃI BÁN CHẠY NHẤT</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">mẫu xe mới nhất</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">mẫu xe phổ biến</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="agile-tp">
								<h5>Được quảng cáo trong tuần này</h5>
								<p class="w3l-ad">Chúng tôi đã tập hợp tất cả các ưu đãi được quảng cáo của chúng tôi vào một nơi, vì vậy bạn sẽ không bỏ lỡ rất nhiều.</p>
							</div>
							
							<div class="agile_top_brands_grids" >
								
                                @foreach ($product_desc as $item)					
                                <div class="col-md-4 top_brand_left" style="margin-bottom: 10px;">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid_pos">
                                                <img src="{{url('public/site')}}/images/offer.png" alt=" " class="img-responsive" />
                                            </div>
                                        
                                         <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="{{ route('home.xemchitiet',$item->id) }}"><img src="/project4v1/public/image/xemay/{{ $item->product_img}}" alt=" " class="" style="width:70%;height:150px"/></a>
                                                        <p style="font-size: 17px"><a href="{{ route('home.xemchitiet',$item->id) }}">{{ $item->product_name }}</a></p>
                                                        <div class="stars">
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star gray-star" aria-hidden="false"></i>
                                                            
                                                        </div>
                                                        <h4>{{ number_format($item->product_price) }}₫</h4>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details">
                                                        <form action="{{url('/savecart')}}" method="GET">
                                                            @csrf
                                                            
                                                            <input name="qty" type="hidden" min="1"  value="1" />
                                                            <input name="productid_hidden" type="hidden"  value="{{$item->id}}" />
                                                            <input  type="submit" name="submit" value="Add to cart" class="button" />
                                                        </form>
                                                        <!--  <a class="btn btn-primary btnclick" onclick=""  href="{route('giohang.add',['id'=>$item->id])}}">Add to cart</a>-->
                                                        
                                                         <!-- url('/add_cart/'.$item->id)}},onclick="add_Cart({$item->id}})" -->
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                        
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                @endforeach
                                <div class="clearfix"> </div>
                            </div>

							
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
							<div class="agile-tp">
								<h5>Tuần này</h5>
								<p class="w3l-ad">Chúng tôi đã tập hợp tất cả các ưu đãi được quảng cáo của chúng tôi vào một nơi, vì vậy bạn sẽ không bỏ lỡ rất nhiều.</p>
							</div>
							
							
                            <div class="agile_top_brands_grids" >
								
                                @foreach ($product_asc as $item)					
                                <div class="col-md-4 top_brand_left" style="margin-bottom: 10px;">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid_pos">
                                                <img src="{{url('public/site')}}/images/offer.png" alt=" " class="img-responsive" />
                                            </div>
                                        
                                         <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href=""><img src="/project4v1/public/image/xemay/{{ $item->product_img}}" alt=" " class="" style="width:70%;height:150px"/></a>
                                                        <p style="font-size: 17px"><a href="">{{ $item->product_name }}</a></p>
                                                        <div class="stars">
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star gray-star" aria-hidden="false"></i>
                                                            
                                                        </div>
                                                        <h4>{{ number_format($item->product_price) }}₫</h4>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details">
                                                        <form action="{{url('/savecart')}}" method="GET">
                                                            @csrf
                                                            
                                                            <input name="qty" type="hidden" min="1"  value="1" />
                                                            <input name="productid_hidden" type="hidden"  value="{{$item->id}}" />
                                                            <input  type="submit" name="submit" value="Add to cart" class="button" />
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                        
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                @endforeach
                                <div class="clearfix"> </div>
                            </div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //top-brands -->
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href=""> <img class="first-slide" src="/project4v1/public/image/xemay/winnerx1.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href=""> <img class="second-slide " src="/project4v1/public/image/xemay/cbr650rbia.jpg" alt="Second slide"></a>
         
        </div>
       
      </div>
    
    </div><!-- /.carousel -->	
<!--banner-bottom-->
				<div class="ban-bottom-w3l">
					<div class="container">
					<div class="col-md-6 ban-bottom3">
							<div class="ban-top">
								<img src="/project4v1/public/image/xemay/airblade1.png" class="img-responsive" alt=""/>
								
							</div>
							<div class="ban-img">
								<div class=" ban-bottom1">
									<div class="ban-top">
										<img src="/project4v1/public/image/xemay/sh1.jpg" class="img-responsive" alt=""/>
										
									</div>
								</div>
								<div class="ban-bottom2">
									<div class="ban-top">
										<img src="/project4v1/public/image/xemay/cbr1000rr1.png" class="img-responsive" alt=""/>
										
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-6 ban-bottom">
							<div class="ban-top">
								<img src="/project4v1/public/image/xemay/winnerx2.jpg" class="img-responsive" alt=""/>
								
								
							</div>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
<!--banner-bottom-->
<!--brands-->
	
<!--//brands-->
<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
			<h3>Mẫu Xe Phân phối lớn của Honda</h3>
				<div class="agile_top_brands_grids">
					
					
                    <div class="agile_top_brands_grids" >
								
                        @foreach ($pr as $item)					
                        <div class="col-md-3 top_brand_left-1" style="">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid_pos">
                                        <img src="{{url('public/site')}}/images/offer.png" alt=" " class="img-responsive" />
                                    </div>
                                
                                 <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href=""><img src="/project4v1/public/image/xemay/{{ $item->product_img}}" alt=" " class="" style="width:70%;height:115px"/></a>
                                                <p style="font-size: 15px"><a href="">{{ $item->product_name }}</a></p>
                                                <div class="stars">
                                                    <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star blue-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star gray-star" aria-hidden="false"></i>
                                                    
                                                </div>
                                                <h4>{{ number_format($item->product_price) }}₫</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <form action="{{url('/savecart')}}" method="GET"id="formclick">
                                                    @csrf @method('GET')
                                                    
                                                    <input name="qty" type="hidden" min="1"  value="1" />
                                                    <input name="productid_hidden" type="hidden"  value="{{$item->id}}" />
                                                    <input  type="submit" name="submit" value="Add to cart" class="button" />
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                                
                                   
                                </div>
                                
                            </div>
                        </div>
                        
                        @endforeach
                        
                    </div>
					
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
    <form action="" method="POST" id="">
        @csrf @method('GET')
    </form>
    
    
@endsection


