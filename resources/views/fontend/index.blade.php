@extends('layouts.fontend-master')
@section('content')
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
	<div class="row">
	<!-- ============================================== SIDEBAR ============================================== -->	
		<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
			
<!-- ========= TOP NAVIGATION =============== -->
@include('fontend.inc.category')
<!-- =========== TOP NAVIGATION : END ================= -->

<!-- =========== HOT DEALS ======================= -->
@include('fontend.inc.hot-deals')
<!-- ================= HOT DEALS: END =================== -->


<!-- ================== SPECIAL OFFER =========================== -->

<div class="sidebar-widget outer-bottom-small wow fadeInUp">
	<h3 class="section-title">Special Offer</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
	       <div class="item">
	        	<div class="products special-product">
	        		@foreach($special_offers as $special_offer)
		        	<div class="product">
						<div class="product-micro">
							<div class="row product-micro-row">
								<div class="col col-xs-5">
									<div class="product-image">
										<div class="image">
											@if (session()->get('language') == 'bangla')
					        				<a href="{{url('single-product/'.$special_offer->id,$special_offer->product_slug_bn)}}"><img  src="{{asset($special_offer->product_thumbnail)}}" alt=""></a>
					        				@else
					        				<a href="{{url('single-product/'.$special_offer->id,$special_offer->product_slug_en)}}"><img  src="{{asset($special_offer->product_thumbnail)}}" alt=""></a>
					        				@endif					
										</div><!-- /.image -->
									</div><!-- /.product-image -->
								</div><!-- /.col -->
								<div class="col col-xs-7">
									<div class="product-info">
										<h3 class="name">
											@if (session()->get('language') == 'bangla')
					        				<a href="{{url('single-product/'.$special_offer->id,$special_offer->product_slug_bn)}}">
					                    		{{$special_offer->product_name_bn}}</a>
					                    	@else
					                    	<a href="{{url('single-product/'.$special_offer->id,$special_offer->product_slug_en)}}">
					                    		{{$special_offer->product_name_en}}</a>
					                    	@endif
										</h3>
										<div class="rating rateit-small"></div>
										<div class="product-price">	
											@if($special_offer->discount_price != NULL)
					        				<span class="price">৳
					        					@if (session()->get('language') == 'bangla')
					        						{{bn_price(round($special_offer->discount_price))}}
					        					@else
					        						{{round($special_offer->discount_price)}}
					        					@endif
					        				</span>
					        				<span class="price-before-discount">৳ 
					        					@if (session()->get('language') == 'bangla')
					        					{{bn_price(round($special_offer->selling_price))}}
					        					@else
					        					{{round($special_offer->selling_price)}}
					        					@endif
					        				</span>
					        				@else
					        				<span class="price"> ৳
					        					@if (session()->get('language') == 'bangla')
					        						{{bn_price(round($special_offer->selling_price))}}
					        					@else
					        						{{round($special_offer->selling_price)}}
					        					@endif
					        				</span>
					        				@endif
										</div><!-- /.product-price -->
									</div>
								</div><!-- /.col -->
							</div><!-- /.product-micro-row -->
						</div><!-- /.product-micro -->
    				</div>
	    				@if($loop->iteration == 7)
	    					@break
	    				@endif
    				@endforeach
		        </div> 
	        </div> <!-- /.item -->
	    </div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ================== SPECIAL OFFER : END ========= -->
<!-- ================= PRODUCT TAGS================= -->
@include('fontend.inc.product-tags')
<!-- ============= PRODUCT TAGS : END ==================== -->
<!-- ============== SPECIAL DEALS ====================== -->

<div class="sidebar-widget outer-bottom-small wow fadeInUp">
	<h3 class="section-title">Special Deals</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
	        <div class="item">
	        	<div class="products special-product">
	        		@foreach($special_deals as $special_deal)
		        	<div class="product">
						<div class="product-micro">
							<div class="row product-micro-row">
								<div class="col col-xs-5">
									<div class="product-image">
										<div class="image">
											@if (session()->get('language') == 'bangla')
					        				<a href="{{url('single-product/'.$special_deal->id,$special_deal->product_slug_bn)}}"><img  src="{{asset($special_deal->product_thumbnail)}}" alt=""></a>
					        				@else
					        				<a href="{{url('single-product/'.$special_deal->id,$special_deal->product_slug_en)}}"><img  src="{{asset($special_deal->product_thumbnail)}}" alt=""></a>
					        				@endif					
										</div><!-- /.image -->
									</div><!-- /.product-image -->
								</div><!-- /.col -->
								<div class="col col-xs-7">
									<div class="product-info">
										<h3 class="name">
											@if (session()->get('language') == 'bangla')
					        				<a href="{{url('single-product/'.$special_deal->id,$special_deal->product_slug_bn)}}">
					                    		{{$special_deal->product_name_bn}}</a>
					                    	@else
					                    	<a href="{{url('single-product/'.$special_deal->id,$special_deal->product_slug_en)}}">
					                    		{{$special_deal->product_name_en}}</a>
					                    	@endif
										</h3>
										<div class="rating rateit-small"></div>
										<div class="product-price">	
											@if($special_deal->discount_price != NULL)
					        				<span class="price">৳
					        					@if (session()->get('language') == 'bangla')
					        						{{bn_price(round($special_deal->discount_price))}}
					        					@else
					        						{{round($special_deal->discount_price)}}
					        					@endif
					        				</span>
					        				<span class="price-before-discount">৳ 
					        					@if (session()->get('language') == 'bangla')
					        					{{bn_price(round($special_deal->selling_price))}}
					        					@else
					        					{{round($special_deal->selling_price)}}
					        					@endif
					        				</span>
					        				@else
					        				<span class="price"> ৳
					        					@if (session()->get('language') == 'bangla')
					        						{{bn_price(round($special_deal->selling_price))}}
					        					@else
					        						{{round($special_deal->selling_price)}}
					        					@endif
					        				</span>
					        				@endif
										</div><!-- /.product-price -->
									</div>
								</div><!-- /.col -->
							</div><!-- /.product-micro-row -->
						</div><!-- /.product-micro -->
      				</div>
      					@if($loop->iteration == 7)
	    					@break
	    				@endif
      				@endforeach
		        </div>
	        </div> <!-- /.item -->
	    </div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ========== SPECIAL DEALS : END ==================== -->
<!-- ========== NEWSLETTER ================= -->
<div class="sidebar-widget newsletter wow fadeInUp outer-bottom-small">
	<h3 class="section-title">Newsletters</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<p>Sign Up for Our Newsletter!</p>
        <form role="form">
        	 <div class="form-group">
			    <label class="sr-only" for="exampleInputEmail1">Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
			  </div>
			<button class="btn btn-primary">Subscribe</button>
		</form>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ============== NEWSLETTER: END ====================== -->
		
<!-- =============Testimonials ================== -->
@include('fontend.inc.testimonial')    
<!-- ============Testimonials: END ============ -->

<div class="home-banner">
<img src="{{asset('fontend/images/banners/LHS-banner.jpg')}}" alt="Image">
</div> 




		</div><!-- /.sidemenu-holder -->
<!-- ============= SIDEBAR : END ================ -->

<!-- ========= CONTENT ===================== -->
		<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
<!-- ========= SECTION – HERO ===================== -->
			
<div id="hero">
	<div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
        @foreach($sliders as $slider)
		<div class="item" style="background-image: url({{asset($slider->image)}});">
			<div class="container-fluid">
				<div class="caption bg-color vertical-center text-left">
                    <div class="slider-header fadeInDown-1">
                        @if($slider->title_en == NULL)
                        @else
                            Boiutso
                        @endif
                    </div>
					<div class="big-text fadeInDown-1">
                        @if (session()->get('language') == 'bangla')
                            {{$slider->title_bn}}
                        @else
                            {{$slider->title_en}}
                        @endif
					</div>

					<div class="excerpt fadeInDown-2 hidden-xs">
					@if (session()->get('language') == 'bangla')
					   <span>{{$slider->description_bn}}</span>
                    @else
                        <span>{{$slider->description_en}}</span>
                    @endif

					</div>
                    @if($slider->title_en == NULL)
                    @else
					<div class="button-holder fadeInDown-3">
						<a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
					</div>
                    @endif
				</div><!-- /.caption -->
			</div><!-- /.container-fluid -->
		</div><!-- /.item -->
        @endforeach
	</div><!-- /.owl-carousel -->
</div>
			
<!-- ========================================= SECTION – HERO : END ========================================= -->	

			<!-- ============================================== INFO BOXES ============================================== -->
<div class="info-boxes wow fadeInUp">
	<div class="info-boxes-inner">
		<div class="row">
			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						
						<div class="col-xs-12">
							<h4 class="info-box-heading green">money back</h4>
						</div>
					</div>	
					<h6 class="text">30 Days Money Back Guarantee</h6>
				</div>
			</div><!-- .col -->

			<div class="hidden-md col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						
						<div class="col-xs-12">
							<h4 class="info-box-heading green">free shipping</h4>
						</div>
					</div>
					<h6 class="text">Shipping on orders over $99</h6>	
				</div>
			</div><!-- .col -->

			<div class="col-md-6 col-sm-4 col-lg-4">
				<div class="info-box">
					<div class="row">
						
						<div class="col-xs-12">
							<h4 class="info-box-heading green">Special Sale</h4>
						</div>
					</div>
					<h6 class="text">Extra $5 off on all items </h6>	
				</div>
			</div><!-- .col -->
		</div><!-- /.row -->
	</div><!-- /.info-boxes-inner -->
	
</div><!-- /.info-boxes -->
<!-- ============================================== INFO BOXES : END ============================================== -->
			<!-- ============================================== SCROLL TABS ============================================== -->
<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
	<div class="more-info-tab clearfix ">
	   <h3 class="new-product-title pull-left"> @if (session()->get('language') == 'bangla')নতুন পণ্য @else New Products @endif</h3>
		<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
			<li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">
			@if (session()->get('language') == 'bangla')
				সকল
			@else
				All
			@endif
			</a></li>
            @foreach($categories as $category)
			<li>
                <a data-transition-type="backSlide" href="#category_{{$category->id}}" data-toggle="tab">
                    @if (session()->get('language') == 'bangla')
                        {{$category->category_name_bn}}
                    @else
                        {{$category->category_name_en}}
                    @endif
                </a>
            </li>
            @endforeach
		</ul><!-- /.nav-tabs -->
	</div>

	<div class="tab-content outer-top-xs">
		<div class="tab-pane in active" id="all">			
			<div class="product-slider">
				<div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                    @foreach($products as $product)
            		<div class="item item-carousel">
            			<div class="products">		
                        	<div class="product">		
                        		<div class="product-image">
                        			<div class="image">
                        				@if (session()->get('language') == 'bangla')
                        				<a href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}"><img  src="{{asset($product->product_thumbnail)}}" alt=""></a>
                        				@else
                        				<a href="{{url('single-product/'.$product->id,$product->product_slug_en)}}"><img  src="{{asset($product->product_thumbnail)}}" alt=""></a>
                        				@endif
                        			</div><!-- /.image -->	
                        			<div class="tag new"><span>
                        			@if($product->discount_price != NULL)
	                        			@if (session()->get('language') == 'bangla')
	                        				{{bn_price(find_discount($product->selling_price,$product->discount_price))}} %
	                        			@else
	                        				{{find_discount($product->selling_price,$product->discount_price)}} %
	                        			@endif
                        			@else
	                        			@if (session()->get('language') == 'bangla')
	                        				নতুন
	                        			@else
	                        				new
	                        			@endif
                        			@endif
                        			</span></div>   
                        		</div><!-- /.product-image -->
                        		<div class="product-info text-left">
                        			<h3 class="name">
                        				@if (session()->get('language') == 'bangla')
                        				<a href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}">
                        					{{$product->product_name_bn}}
                        				</a>
                        				@else
                        					<a href="{{url('single-product/'.$product->id,$product->product_slug_en)}}">
                        					{{$product->product_name_en}}
                        				</a>
                        				@endif
                        			</h3>
                        			@if(count($product->productreviews) > 0)
                        			@php
										$avgRating = round($product->productreviews->avg('rating'));
									@endphp

									@for($i=1; $i<=5; $i++)
										<span style="color:yellow;" class="glyphicon glyphicon-star{{$i <= $avgRating ? '' : '-empty'}}"></span>
									@endfor
										<span>({{count($product->productreviews)}} Reviews)</span>
									@else
										<span class="text-danger">No Reviews</span>
									@endif

                        			<div class="description">
                        				@if (session()->get('language') == 'bangla')
                        					{!!$product->short_descp_bn!!}
                        				@else
                        					{!!$product->short_descp_en!!}
                        				@endif
                        			</div>
                        			<div class="product-price">
                        				@if($product->discount_price != NULL)
                        				<span class="price">৳
                        					@if (session()->get('language') == 'bangla')
                        					{{bn_price(round($product->discount_price))}}
                        					@else
                        					{{round($product->discount_price)}}
                        					@endif
                        				</span>

                        				<span class="price-before-discount">৳
                        					@if (session()->get('language') == 'bangla')
                        						{{bn_price(round($product->selling_price))}}
                        					@else
                        						{{round($product->selling_price)}}
                        					@endif
                        				</span>
                        				@else
                        				<span class="price"> ৳
                        					@if (session()->get('language') == 'bangla')
                        					{{bn_price(round($product->selling_price))}}
                        					@else
                        					{{round($product->selling_price)}}
                        					@endif
                        				</span>
                        				@endif
                        			</div><!-- /.product-price -->
                        		</div><!-- /.product-info -->
                        		<div class="cart clearfix animate-effect">
                        				<div class="action">
                        					<ul class="list-unstyled">
                        						<li class="add-cart-button btn-group">
				        							<button class="btn btn-primary icon" title="Add To Cart" data-toggle="modal" data-target="#exampleModal" type="button" id="{{$product->id}}" onclick="viewProduct(this.id)">
				                                        <i class="fa fa-shopping-cart"></i>
				                                    </button>
				        							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>					
				        						</li>
				        		                <li class="add-cart-button btn-group">
				        							<button class="btn btn-info icon" title="Add To Wishlist" id="{{$product->id}}" onclick="addToWishlist(this.id)">
				        								 <i class="icon fa fa-heart"></i>
				        							</button>
				        						</li>
				        						<li class="lnk">
				        							@if (session()->get('language') == 'bangla')
							            				<a class="add-to-cart" href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}" title="Details">
					        							    <i class="fa fa-signal" aria-hidden="true"></i>
					        							</a>
							            			@else
							            				<a class="add-to-cart" href="{{url('single-product/'.$product->id,$product->product_slug_en)}}" title="Details">
					        							    <i class="fa fa-signal" aria-hidden="true"></i>
					        							</a>
							            			@endif
				        						</li>
                        					</ul>
                        				</div><!-- /.action -->
                        			</div><!-- /.cart -->
                        		</div><!-- /.product -->
                        	</div><!-- /.products -->
                        </div><!-- /.item -->
                        @endforeach
					</div><!-- /.home-owl-carousel -->
			</div><!-- /.product-slider -->
	   </div><!-- /.tab-pane -->
       @foreach($categories as $category)
        <div class="tab-pane" id="category_{{$category->id}}">
        	<div class="product-slider">
        		<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                @forelse($category->products as $product)    	
        		  <div class="item item-carousel">
        			<div class="products">	
        	           <div class="product">		
                		<div class="product-image">
                			<div class="image">
                				@if (session()->get('language') == 'bangla')
                				<a href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}"><img  src="{{asset($product->product_thumbnail)}}" alt=""></a>
                				@else
                				<a href="{{url('single-product/'.$product->id,$product->product_slug_en)}}"><img  src="{{asset($product->product_thumbnail)}}" alt=""></a>
                				@endif
                			</div><!-- /.image -->			

                		<div class="tag sale"><span>sale</span></div>            		   
                		</div><!-- /.product-image -->
                		<div class="product-info text-left">
                			<h3 class="name">
                				@if (session()->get('language') == 'bangla')
                				<a href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}">
                        		{{$product->product_name_bn}} </a>
                				@else
                				<a href="{{url('single-product/'.$product->id,$product->product_slug_en)}}">
                        		{{$product->product_name_en}}</a>
                				@endif
	                		</h3>
                			<div class="rating rateit-small"></div>
                			<div class="description">
                				@if (session()->get('language') == 'bangla')
                					{!!$product->short_descp_bn!!}
                				@else
                					{!!$product->short_descp_en!!}
                				@endif
                			</div>
                			<div class="product-price">	
                				@if($product->discount_price != NULL)
                				<span class="price">৳
                					@if (session()->get('language') == 'bangla')
                						{{bn_price(round($product->discount_price))}}
                					@else
                						{{round($product->discount_price)}}
                					@endif
                				</span>
                				<span class="price-before-discount">৳ 
                					@if (session()->get('language') == 'bangla')
                					{{bn_price(round($product->selling_price))}}
                					@else
                					{{round($product->selling_price)}}
                					@endif
                				</span>
                				@else
                				<span class="price"> ৳
                					@if (session()->get('language') == 'bangla')
                						{{bn_price(round($product->selling_price))}}
                					@else
                						{{round($product->selling_price)}}
                					@endif
                				</span>
                				@endif		
                			</div><!-- /.product-price -->
                		</div><!-- /.product-info -->
        				<div class="cart clearfix animate-effect">
            				<div class="action">
            					<ul class="list-unstyled">
            						<li class="add-cart-button btn-group">
	        							<button class="btn btn-primary icon" title="Add To Cart" data-toggle="modal" data-target="#exampleModal" type="button" id="{{$product->id}}" onclick="viewProduct(this.id)">
	                                        <i class="fa fa-shopping-cart"></i>
	                                    </button>
	        							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>					
	        						</li>
	        		                <li class="add-cart-button btn-group">
	        							<button class="btn btn-info icon" title="Add To Wishlist" id="{{$product->id}}" onclick="addToWishlist(this.id)">
	        								 <i class="icon fa fa-heart"></i>
	        							</button>
	        						</li>
	        						<li class="lnk">
	        							@if (session()->get('language') == 'bangla')
				            				<a class="add-to-cart" href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}" title="Details">
		        							    <i class="fa fa-signal" aria-hidden="true"></i>
		        							</a>
				            			@else
				            				<a class="add-to-cart" href="{{url('single-product/'.$product->id,$product->product_slug_en)}}" title="Details">
		        							    <i class="fa fa-signal" aria-hidden="true"></i>
		        							</a>
				            			@endif
	        						</li>
            					</ul>
            				</div><!-- /.action -->
        			     </div><!-- /.cart -->
        			</div><!-- /.product -->
        		</div><!-- /.products -->
        	   </div><!-- /.item -->
               @empty
               @if (session()->get('language') == 'bangla')
               	<h5> কোন পণ্য পাওয়া যায়না । </h5>
               @else
               	<h5>There are no data</h5>
               @endif
               @endforelse
        	   </div><!-- /.home-owl-carousel -->
            </div><!-- /.product-slider -->
        </div><!-- /.tab-pane -->
        @endforeach

</div><!-- /.tab-content -->
</div><!-- /.scroll-tabs -->

<!-- ============== SCROLL TABS : END ==================== -->
<!-- ================= WIDE PRODUCTS ===================== -->
<div class="wide-banners wow fadeInUp outer-bottom-xs">
	<div class="row">
<div class="col-md-7 col-sm-7">
<div class="wide-banner cnt-strip">
<div class="image">
<img class="img-responsive" src="{{asset('fontend/images/banners/home-banner1.jpg')}}" alt="">
</div>

</div><!-- /.wide-banner -->
</div><!-- /.col -->
<div class="col-md-5 col-sm-5">
<div class="wide-banner cnt-strip">
<div class="image">
<img class="img-responsive" src="{{asset('fontend/images/banners/home-banner2.jpg')}}" alt="">
</div>

</div><!-- /.wide-banner -->
</div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.wide-banners -->

<!-- ============ WIDE PRODUCTS : END =========================== -->

<!-- ============ FEATURED PRODUCTS ============================= -->
<section class="section featured-product wow fadeInUp">
	<h3 class="section-title">Featured products</h3>
	<div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
		@foreach($featureds as $featured)
		<div class="item item-carousel">
			<div class="products">		
	           <div class="product">		
            		<div class="product-image">
            			<div class="image">
            				@if (session()->get('language') == 'bangla')
            				<a href="{{url('single-product/'.$featured->id,$featured->product_slug_bn)}}"><img  src="{{asset($featured->product_thumbnail)}}" alt=""></a>
            				@else
            				<a href="{{url('single-product/'.$featured->id,$featured->product_slug_en)}}"><img  src="{{asset($featured->product_thumbnail)}}" alt=""></a>
            				@endif
            			</div><!-- /.image -->
                        <div class="tag hot"><span>hot</span></div>		   
            		</div><!-- /.product-image -->
            		<div class="product-info text-left">
            			<h3 class="name">
            				@if (session()->get('language') == 'bangla')
            				<a href="{{url('single-product/'.$featured->id,$featured->product_slug_bn)}}">
                        		{{$featured->product_name_bn}}</a>
                        	@else
                        	<a href="{{url('single-product/'.$featured->id,$featured->product_slug_en)}}">
                        		{{$featured->product_name_en}}</a>
                        	@endif
            			<div class="rating rateit-small"></div>

            			@if (session()->get('language') == 'bangla')
            				<div class="description">{!! $featured->short_descp_bn !!}</div>
            			@else
            				<div class="description">{!! $featured->short_descp_en !!}</div>
            			@endif
            			<div class="product-price">	
            				@if($featured->discount_price != NULL)
            				<span class="price">৳
            					@if (session()->get('language') == 'bangla')
            						{{bn_price(round($featured->discount_price))}}
            					@else
            						{{round($featured->discount_price)}}
            					@endif
            				</span>
            				<span class="price-before-discount">৳ 
            					@if (session()->get('language') == 'bangla')
            					{{bn_price(round($featured->selling_price))}}
            					@else
            					{{round($featured->selling_price)}}
            					@endif
            				</span>
            				@else
            				<span class="price"> ৳
            					@if (session()->get('language') == 'bangla')
            						{{bn_price(round($featured->selling_price))}}
            					@else
            						{{round($featured->selling_price)}}
            					@endif
            				</span>
            				@endif	
            			</div><!-- /.product-price -->
            		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
        				<div class="action">
        					<ul class="list-unstyled">
        						<li class="add-cart-button btn-group">
        							<button class="btn btn-primary icon" title="Add To Cart" data-toggle="modal" data-target="#exampleModal" type="button" id="{{$featured->id}}" onclick="viewProduct(this.id)">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
        							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>					
        						</li>
        		                <li class="add-cart-button btn-group">
        							<button class="btn btn-info icon" title="Add To Wishlist" id="{{$featured->id}}" onclick="addToWishlist(this.id)">
        								 <i class="icon fa fa-heart"></i>
        							</button>
        						</li>
        						<li class="lnk">
        							@if (session()->get('language') == 'bangla')
			            				<a class="add-to-cart" href="{{url('single-product/'.$featured->id,$featured->product_slug_bn)}}" title="Details">
	        							    <i class="fa fa-signal" aria-hidden="true"></i>
	        							</a>
			            			@else
			            				<a class="add-to-cart" href="{{url('single-product/'.$featured->id,$featured->product_slug_en)}}" title="Details">
	        							    <i class="fa fa-signal" aria-hidden="true"></i>
	        							</a>
			            			@endif
        						</li>
        					</ul>
        				</div><!-- /.action -->
			         </div><!-- /.cart -->
			     </div><!-- /.product -->
			</div><!-- /.products -->
		</div><!-- /.item -->
		@endforeach
	</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- ===========FEATURED PRODUCTS : END =================== -->

<!-- ============ Category Skip 0 ============================= -->
<section class="section featured-product wow fadeInUp">
	<h3 class="section-title">
		@if (session()->get('language') == 'bangla')
			{{$category_skip_0->category_name_bn}}
		@else
		{{$category_skip_0->category_name_en}}
		@endif
	</h3>
	<div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
		@foreach($category_skip_0->products as $product)
		<div class="item item-carousel">
			<div class="products">		
	           <div class="product">		
            		<div class="product-image">
            			<div class="image">
            				@if (session()->get('language') == 'bangla')
            				<a href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}"><img  src="{{asset($product->product_thumbnail)}}" alt=""></a>
            				@else
            				<a href="{{url('single-product/'.$product->id,$product->product_slug_en)}}"><img  src="{{asset($product->product_thumbnail)}}" alt=""></a>
            				@endif
            			</div><!-- /.image -->
                        <div class="tag hot"><span>hot</span></div>		   
            		</div><!-- /.product-image -->
            		<div class="product-info text-left">
            			<h3 class="name">
            				@if (session()->get('language') == 'bangla')
            				<a href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}">
                        		{{$product->product_name_bn}}</a>
                        	@else
                        	<a href="{{url('single-product/'.$product->id,$product->product_slug_en)}}">
                        		{{$product->product_name_en}}</a>
                        	@endif
            			<div class="rating rateit-small"></div>
            			@if (session()->get('language') == 'bangla')
            				<div class="description">{!! $product->short_descp_bn !!}</div>
            			@else
            				<div class="description">{!! $product->short_descp_en !!}</div>
            			@endif
            			<div class="product-price">	
            				@if($product->discount_price != NULL)
            				<span class="price">৳
            					@if (session()->get('language') == 'bangla')
            						{{bn_price(round($product->discount_price))}}
            					@else
            						{{round($product->discount_price)}}
            					@endif
            				</span>
            				<span class="price-before-discount">৳ 
            					@if (session()->get('language') == 'bangla')
            					{{bn_price(round($product->selling_price))}}
            					@else
            					{{round($product->selling_price)}}
            					@endif
            				</span>
            				@else
            				<span class="price"> ৳
            					@if (session()->get('language') == 'bangla')
            						{{bn_price(round($product->selling_price))}}
            					@else
            						{{round($product->selling_price)}}
            					@endif
            				</span>
            				@endif	
            			</div><!-- /.product-price -->
            		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
        				<div class="action">
        					<ul class="list-unstyled">
        						<li class="add-cart-button btn-group">
        							<button class="btn btn-primary icon" title="Add To Cart" data-toggle="modal" data-target="#exampleModal" type="button" id="{{$product->id}}" onclick="viewProduct(this.id)">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
        							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>					
        						</li>
        		                <li class="add-cart-button btn-group">
        							<button class="btn btn-info icon" title="Add To Wishlist" id="{{$product->id}}" onclick="addToWishlist(this.id)">
        								 <i class="icon fa fa-heart"></i>
        							</button>
        						</li>
        						<li class="lnk">
        							@if (session()->get('language') == 'bangla')
			            				<a class="add-to-cart" href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}" title="Details">
	        							    <i class="fa fa-signal" aria-hidden="true"></i>
	        							</a>
			            			@else
			            				<a class="add-to-cart" href="{{url('single-product/'.$product->id,$product->product_slug_en)}}" title="Details">
	        							    <i class="fa fa-signal" aria-hidden="true"></i>
	        							</a>
			            			@endif
        						</li>
        					</ul>
        				</div><!-- /.action -->
			         </div><!-- /.cart -->
			     </div><!-- /.product -->
			</div><!-- /.products -->
		</div><!-- /.item -->
		@endforeach
	</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- =========== Category Skip 0 : END =================== -->

<!-- ============ Category Skip 1 ============================= -->
<section class="section featured-product wow fadeInUp">
	<h3 class="section-title">
		@if (session()->get('language') == 'bangla')
			{{$category_skip_1->category_name_bn}}
		@else
		{{$category_skip_1->category_name_en}}
		@endif
	</h3>
	<div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
		@forelse($category_skip_1->products as $product)
		<div class="item item-carousel">
			<div class="products">		
	           <div class="product">		
            		<div class="product-image">
            			<div class="image">
            				@if (session()->get('language') == 'bangla')
            				<a href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}"><img  src="{{asset($product->product_thumbnail)}}" alt=""></a>
            				@else
            				<a href="{{url('single-product/'.$product->id,$product->product_slug_en)}}"><img  src="{{asset($product->product_thumbnail)}}" alt=""></a>
            				@endif
            			</div><!-- /.image -->
                        <div class="tag hot"><span>hot</span></div>		   
            		</div><!-- /.product-image -->
            		<div class="product-info text-left">
            			<h3 class="name">
            				@if (session()->get('language') == 'bangla')
            				<a href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}">
                        		{{$product->product_name_bn}}</a>
                        	@else
                        	<a href="{{url('single-product/'.$product->id,$product->product_slug_en)}}">
                        		{{$product->product_name_en}}</a>
                        	@endif
            			<div class="rating rateit-small"></div>
            			@if (session()->get('language') == 'bangla')
            				<div class="description">{!! $product->short_descp_bn !!}</div>
            			@else
            				<div class="description">{!! $product->short_descp_en !!}</div>
            			@endif
            			<div class="product-price">	
            				@if($product->discount_price != NULL)
            				<span class="price">৳
            					@if (session()->get('language') == 'bangla')
            						{{bn_price(round($product->discount_price))}}
            					@else
            						{{round($product->discount_price)}}
            					@endif
            				</span>
            				<span class="price-before-discount">৳ 
            					@if (session()->get('language') == 'bangla')
            					{{bn_price(round($product->selling_price))}}
            					@else
            					{{round($product->selling_price)}}
            					@endif
            				</span>
            				@else
            				<span class="price"> ৳
            					@if (session()->get('language') == 'bangla')
            						{{bn_price(round($product->selling_price))}}
            					@else
            						{{round($product->selling_price)}}
            					@endif
            				</span>
            				@endif	
            			</div><!-- /.product-price -->
            		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
        				<div class="action">
        					<ul class="list-unstyled">
        						<li class="add-cart-button btn-group">
        							<button class="btn btn-primary icon" title="Add To Cart" data-toggle="modal" data-target="#exampleModal" type="button" id="{{$product->id}}" onclick="viewProduct(this.id)">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
        							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>					
        						</li>
        		                <li class="add-cart-button btn-group">
        							<button class="btn btn-info icon" title="Add To Wishlist" id="{{$product->id}}" onclick="addToWishlist(this.id)">
        								 <i class="icon fa fa-heart"></i>
        							</button>
        						</li>
        						<li class="lnk">
        							@if (session()->get('language') == 'bangla')
			            				<a class="add-to-cart" href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}" title="Details">
	        							    <i class="fa fa-signal" aria-hidden="true"></i>
	        							</a>
			            			@else
			            				<a class="add-to-cart" href="{{url('single-product/'.$product->id,$product->product_slug_en)}}" title="Details">
	        							    <i class="fa fa-signal" aria-hidden="true"></i>
	        							</a>
			            			@endif
        						</li>
        					</ul>
        				</div><!-- /.action -->
			         </div><!-- /.cart -->
			     </div><!-- /.product -->
			</div><!-- /.products -->
		</div><!-- /.item -->
		@empty
			<p>There are no date</p>
		@endforelse
	</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- =========== Category Skip 1 : END =================== -->

<!-- ============ Brand Skip 0 ============================= -->
<section class="section featured-product wow fadeInUp">
	<h3 class="section-title">
		@if (session()->get('language') == 'bangla')
			{{$brand_skip_0->brand_name_bn}}
		@else
		{{$brand_skip_0->brand_name_en}}
		@endif
	</h3>
	<div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
		@forelse($brand_skip_0->products as $product)
		<div class="item item-carousel">
			<div class="products">		
	           <div class="product">		
            		<div class="product-image">
            			<div class="image">
            				@if (session()->get('language') == 'bangla')
            				<a href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}"><img  src="{{asset($product->product_thumbnail)}}" alt=""></a>
            				@else
            				<a href="{{url('single-product/'.$product->id,$product->product_slug_en)}}"><img  src="{{asset($product->product_thumbnail)}}" alt=""></a>
            				@endif
            			</div><!-- /.image -->
                        <div class="tag hot"><span>hot</span></div>		   
            		</div><!-- /.product-image -->
            		<div class="product-info text-left">
            			<h3 class="name">
            				@if (session()->get('language') == 'bangla')
            				<a href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}">
                        		{{$product->product_name_bn}}</a>
                        	@else
                        	<a href="{{url('single-product/'.$product->id,$product->product_slug_en)}}">
                        		{{$product->product_name_en}}</a>
                        	@endif
            			<div class="rating rateit-small"></div>
            			@if (session()->get('language') == 'bangla')
            				<div class="description">{!! $product->short_descp_bn !!}</div>
            			@else
            				<div class="description">{!! $product->short_descp_en !!}</div>
            			@endif
            			<div class="product-price">	
            				@if($product->discount_price != NULL)
            				<span class="price">৳
            					@if (session()->get('language') == 'bangla')
            						{{bn_price(round($product->discount_price))}}
            					@else
            						{{round($product->discount_price)}}
            					@endif
            				</span>
            				<span class="price-before-discount">৳ 
            					@if (session()->get('language') == 'bangla')
            					{{bn_price(round($product->selling_price))}}
            					@else
            					{{round($product->selling_price)}}
            					@endif
            				</span>
            				@else
            				<span class="price"> ৳
            					@if (session()->get('language') == 'bangla')
            						{{bn_price(round($product->selling_price))}}
            					@else
            						{{round($product->selling_price)}}
            					@endif
            				</span>
            				@endif	
            			</div><!-- /.product-price -->
            		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
        				<div class="action">
        					<ul class="list-unstyled">
        						<li class="add-cart-button btn-group">
        							<button class="btn btn-primary icon" title="Add To Cart" data-toggle="modal" data-target="#exampleModal" type="button" id="{{$product->id}}" onclick="viewProduct(this.id)">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
        							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>					
        						</li>
        		                <li class="add-cart-button btn-group">
        							<button class="btn btn-info icon" title="Add To Wishlist" id="{{$product->id}}" onclick="addToWishlist(this.id)">
        								 <i class="icon fa fa-heart"></i>
        							</button>
        						</li>
        						<li class="lnk">
        							@if (session()->get('language') == 'bangla')
			            				<a class="add-to-cart" href="{{url('single-product/'.$product->id,$product->product_slug_bn)}}" title="Details">
	        							    <i class="fa fa-signal" aria-hidden="true"></i>
	        							</a>
			            			@else
			            				<a class="add-to-cart" href="{{url('single-product/'.$product->id,$product->product_slug_en)}}" title="Details">
	        							    <i class="fa fa-signal" aria-hidden="true"></i>
	        							</a>
			            			@endif
        						</li>
        					</ul>
        				</div><!-- /.action -->
			         </div><!-- /.cart -->
			     </div><!-- /.product -->
			</div><!-- /.products -->
		</div><!-- /.item -->
		@empty
			<p>There are no date</p>
		@endforelse
	</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- =========== Brand Skip 0 : END =================== -->


<!-- ============ WIDE PRODUCTS =================== -->
<div class="wide-banners wow fadeInUp outer-bottom-xs">
	<div class="row">

		<div class="col-md-12">
			<div class="wide-banner cnt-strip">
				<div class="image">
					<img class="img-responsive" src="{{asset('fontend/images/banners/home-banner.jpg')}}" alt="">
				</div>	
				<div class="strip strip-text">
					<div class="strip-inner">
						<h2 class="text-right">New Mens Fashion<br>
						<span class="shopping-needs">Save up to 40% off</span></h2>
					</div>	
				</div>
				<div class="new-label">
				    <div class="text">NEW</div>
				</div><!-- /.new-label -->
			</div><!-- /.wide-banner -->
		</div><!-- /.col -->

	</div><!-- /.row -->
</div><!-- /.wide-banners -->
<!-- ============= WIDE PRODUCTS : END =========================== -->
<!-- ============== BEST SELLER ======================== -->

<div class="best-deal wow fadeInUp outer-bottom-xs">
	<h3 class="section-title">Best seller</h3>
	<div class="sidebar-widget-body outer-top-xs">
		<div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
	        	        <div class="item">
	        	<div class="products best-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="{{asset('fontend/images/products/p20.jpg')}}" alt="">
					</a>					
				</div><!-- /.image -->
					
											
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$450.99				</span>
				
			</div><!-- /.product-price -->
			
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="{{asset('fontend/images/products/p21.jpg')}}" alt="">
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$450.99				</span>
				
			</div><!-- /.product-price -->
			
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        		        	</div>
	        </div>
	    		        <div class="item">
	        	<div class="products best-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="{{asset('fontend/images/products/p22.jpg')}}" alt="">
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$450.99				</span>
				
			</div><!-- /.product-price -->
			
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="{{asset('fontend/images/products/p23.jpg')}}" alt="">
						</a>					
				</div><!-- /.image -->
					
					
											
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$450.99				</span>
				
			</div><!-- /.product-price -->
		
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        		        	</div>
	        </div>
	    		        <div class="item">
	        	<div class="products best-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="{{asset('fontend/images/products/p24.jpg')}}" alt="">
					</a>					
				</div><!-- /.image -->
											
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$450.99				</span>
				
			</div><!-- /.product-price -->
		
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="{{asset('fontend/images/products/p25.jpg')}}" alt="">
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$450.99				</span>
				
			</div><!-- /.product-price -->
			
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        		        	</div>
	        </div>
	    		        <div class="item">
	        	<div class="products best-product">
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="{{asset('fontend/images/products/p26.jpg')}}" alt="">
								</a>					
				</div><!-- /.image -->
											
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$450.99				</span>
				
			</div><!-- /.product-price -->
	
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        							<div class="product">
							<div class="product-micro">
	<div class="row product-micro-row">
		<div class="col col-xs-5">
			<div class="product-image">
				<div class="image">
					<a href="#">
						<img src="{{asset('fontend/images/products/p27.jpg')}}" alt="">
					</a>					
				</div><!-- /.image -->
					
					
								</div><!-- /.product-image -->
		</div><!-- /.col -->
		<div class="col2 col-xs-7">
			<div class="product-info">
				<h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
				<div class="rating rateit-small"></div>
				<div class="product-price">	
				<span class="price">
					$450.99				</span>
				
			</div><!-- /.product-price -->
	
			</div>
		</div><!-- /.col -->
	</div><!-- /.product-micro-row -->
</div><!-- /.product-micro -->
      
						</div>
		        		        	</div>
	        </div>
	    		    </div>
	</div><!-- /.sidebar-widget-body -->
</div><!-- /.sidebar-widget -->
<!-- ======== BEST SELLER : END ============================== -->	

<!-- ============== BLOG SLIDER ========================== -->
<section class="section latest-blog outer-bottom-vs wow fadeInUp">
	<h3 class="section-title">latest form blog</h3>
	<div class="blog-slider-container outer-top-xs">
		<div class="owl-carousel blog-slider custom-carousel">
													
				<div class="item">
					<div class="blog-post">
						<div class="blog-post-image">
							<div class="image">
								<a href="blog.html"><img src="{{asset('fontend/images/blog-post/post1.jpg')}}" alt=""></a>
							</div>
						</div><!-- /.blog-post-image -->
					
					
						<div class="blog-post-info text-left">
							<h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>	
							<span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
							<p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							<a href="#" class="lnk btn btn-primary">Read more</a>
						</div><!-- /.blog-post-info -->
						
						
					</div><!-- /.blog-post -->
				</div><!-- /.item -->
			
												
				<div class="item">
					<div class="blog-post">
						<div class="blog-post-image">
							<div class="image">
								<a href="blog.html"><img src="{{asset('fontend/images/blog-post/post2.jpg')}}" alt=""></a>
							</div>
						</div><!-- /.blog-post-image -->
					
					
						<div class="blog-post-info text-left">
							<h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>	
							<span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
							<p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
							<a href="#" class="lnk btn btn-primary">Read more</a>
						</div><!-- /.blog-post-info -->
						
						
					</div><!-- /.blog-post -->
				</div><!-- /.item -->
			
												
				<!-- /.item -->
			
												
				<div class="item">
					<div class="blog-post">
						<div class="blog-post-image">
							<div class="image">
								<a href="blog.html"><img src="{{asset('fontend/images/blog-post/post1.jpg')}}" alt=""></a>
							</div>
						</div><!-- /.blog-post-image -->
					
					
						<div class="blog-post-info text-left">
							<h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>	
							<span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
							<p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
							<a href="#" class="lnk btn btn-primary">Read more</a>
						</div><!-- /.blog-post-info -->
						
						
					</div><!-- /.blog-post -->
				</div><!-- /.item -->
			
												
				<div class="item">
					<div class="blog-post">
						<div class="blog-post-image">
							<div class="image">
								<a href="blog.html"><img src="{{asset('fontend/images/blog-post/post2.jpg')}}" alt=""></a>
							</div>
						</div><!-- /.blog-post-image -->
					
					
						<div class="blog-post-info text-left">
						<h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>	
							<span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
							<p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
							<a href="#" class="lnk btn btn-primary">Read more</a>
						</div><!-- /.blog-post-info -->
						
						
					</div><!-- /.blog-post -->
				</div><!-- /.item -->
			
												
				<div class="item">
					<div class="blog-post">
						<div class="blog-post-image">
							<div class="image">
								<a href="blog.html"><img src="{{asset('fontend/images/blog-post/post1.jpg')}}" alt=""></a>
							</div>
						</div><!-- /.blog-post-image -->
					
					
						<div class="blog-post-info text-left">
							<h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>	
							<span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
							<p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
							<a href="#" class="lnk btn btn-primary">Read more</a>
						</div><!-- /.blog-post-info -->
						
						
					</div><!-- /.blog-post -->
				</div><!-- /.item -->
			
						
		</div><!-- /.owl-carousel -->
	</div><!-- /.blog-slider-container -->
</section><!-- /.section -->
<!-- ============ BLOG SLIDER : END ================== -->	

<!-- ========== FEATURED PRODUCTS ========== -->
<section class="section wow fadeInUp new-arriavls">
	<h3 class="section-title">New Arrivals</h3>
	<div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
	    	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.html"><img  src="{{asset('fontend/images/products/p19.jpg')}}" alt=""></a>
			</div><!-- /.image -->			

			<div class="tag new"><span>new</span></div>                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$450.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.html"><img  src="{{asset('fontend/images/products/p28.jpg')}}" alt=""></a>
			</div><!-- /.image -->			

			<div class="tag new"><span>new</span></div>                        		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$450.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.html"><img  src="{{asset('fontend/images/products/p30.jpg')}}" alt=""></a>
			</div><!-- /.image -->			

			                        <div class="tag hot"><span>hot</span></div>		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$450.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.html"><img  src="{{asset('fontend/images/products/p1.jpg')}}" alt=""></a>
			</div><!-- /.image -->			

			                        <div class="tag hot"><span>hot</span></div>		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$450.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.html"><img  src="{{asset('fontend/images/products/p2.jpg')}}" alt=""></a>
			</div><!-- /.image -->			

			            <div class="tag sale"><span>sale</span></div>            		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$450.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
	
		<div class="item item-carousel">
			<div class="products">
				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="detail.html"><img  src="{{asset('fontend/images/products/p3.jpg')}}" alt=""></a>
			</div><!-- /.image -->			

			            <div class="tag sale"><span>sale</span></div>            		   
		</div><!-- /.product-image -->
			
		
		<div class="product-info text-left">
			<h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					$450.99				</span>
										     <span class="price-before-discount">$ 800</span>
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
						<li class="add-cart-button btn-group">
							<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
								<i class="fa fa-shopping-cart"></i>													
							</button>
							<button class="btn btn-primary cart-btn" type="button">Add to cart</button>
													
						</li>
	                   
		                <li class="lnk wishlist">
							<a class="add-to-cart" href="detail.html" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>

						<li class="lnk">
							<a class="add-to-cart" href="detail.html" title="Compare">
							    <i class="fa fa-signal" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div><!-- /.product -->
      
			</div><!-- /.products -->
		</div><!-- /.item -->
			</div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- =========== FEATURED PRODUCTS : END ===================== -->

</div><!-- /.homebanner-holder -->
<!-- ============ CONTENT : END =============== -->
	</div><!-- /.row -->
@endsection