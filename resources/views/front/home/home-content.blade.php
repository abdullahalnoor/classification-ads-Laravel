@extends('front.master')

@section('body')


    <!-- Slider -->
    <div class="slider">
        <ul class="rslides" id="slider">
            <li>
                <div class="w3ls-slide-text">
                    <h3>Sell or Advertise anything online</h3>
                    <a href="categories.html" class="w3layouts-explore-all">Browse all Categories</a>
                </div>
            </li>
            <li>
                <div class="w3ls-slide-text">
                    <h3>Find the Best Deals Here</h3>
                    <a href="categories.html" class="w3layouts-explore">Explore</a>
                </div>
            </li>
            <li>
                <div class="w3ls-slide-text">
                    <h3>Lets build the home of your dreams</h3>
                    <a href="real-estate.html" class="w3layouts-explore">Explore</a>
                </div>
            </li>
            <li>
                <div class="w3ls-slide-text">
                    <h3>Find your dream ride</h3>
                    <a href="bikes.html" class="w3layouts-explore">Explore</a>
                </div>
            </li>
            <li>
                <div class="w3ls-slide-text">
                    <h3>The Easiest Way to get a Job</h3>
                    <a href="jobs.html" class="w3layouts-explore">Find a Job</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- //Slider -->
    <!-- content-starts-here -->
    <div class="main-content">
        <div class="w3-categories">
            <h3>Browse Categories</h3>
            <div class="container">
                @foreach($categories as $category)
                    <div class="col-md-3">
                    <div class="focus-grid w3layouts-boder1">
                        <a class="btn-8" href="{{ url('/product/product-category/'.$category->id) }}">
                            <div class="focus-border">
                                <div class="focus-layout">
                                    <div class="focus-image"><i class="fa fa-suitcase"></i></div>
                                    <h4 class="clrchg">{{$category->category_name}}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- most-popular-ads -->
        <div class="w3l-popular-ads">
            <h3>Most Popular Ads</h3>
            <div class="w3l-popular-ads-info">
                <div class="col-md-4 w3ls-portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="{{asset('/front')}}/images/ad1.jpg" class="img-responsive" alt=""/>
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="">Latest Cars</a></h4>
                        <p>Suspendisse placerat mattis arcu nec por</p>
                        <a href="">
                            <span>Explore</span>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3ls-portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="{{asset('/front')}}/images/ad2.jpg" class="img-responsive" alt=""/>
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="real-estate.html">Apartments for Sale</a></h4>
                        <p>Suspendisse placerat mattis arcu nec por</p>
                        <a href="real-estate.html">
                            <span>Explore</span>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3ls-portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="{{asset('/front')}}/images/ad3.jpg" class="img-responsive" alt=""/>
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="jobs.html">BPO jobs</a></h4>
                        <p>Suspendisse placerat mattis arcu nec por</p>
                        <a href="jobs.html">
                            <span>Explore</span>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3ls-portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="{{asset('/front')}}/images/ad4.jpg" class="img-responsive" alt=""/>
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="electronics-appliances.html">Accessories</a></h4>
                        <p>Suspendisse placerat mattis arcu nec por</p>
                        <a href="electronics-appliances.html">
                            <span>Explore</span>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3ls-portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="{{asset('/front')}}/images/ad5.jpg" class="img-responsive" alt=""/>
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="furnitures.html">Home Appliances</a></h4>
                        <p>Suspendisse placerat mattis arcu nec por</p>
                        <a href="furnitures.html">
                            <span>Explore</span>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3ls-portfolio-left">
                    <div class="portfolio-img event-img">
                        <img src="{{asset('/front')}}/images/ad6.jpg" class="img-responsive" alt=""/>
                        <div class="over-image"></div>
                    </div>
                    <div class="portfolio-description">
                        <h4><a href="fashion.html">Clothing</a></h4>
                        <p>Suspendisse placerat mattis arcu nec por</p>
                        <a href="fashion.html">
                            <span>Explore</span>
                        </a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- most-popular-ads -->
        <div class="trending-ads">
            <div class="container">
                <!-- slider -->
                <div class="agile-trend-ads">
                    <h2>Trending Ads</h2>
                    <ul id="flexiselDemo3">
                        <li>
                            @foreach($products as $product)
                            <div class="col-md-3 biseller-column">
                                <a href="{{url('/product/product-details/'.$product->id)}}">
                                    <img src="{{$product->product_image}}" alt="" />
                                    <span class="price"> Tk.{{$product->product_price}}</span>
                                </a>
                                <div class="w3-ad-info">
                                    <h5>{{$product->product_title}}</h5>
                                    <span></span>
                                </div>
                            </div>
                           @endforeach

                        </li>


                    </ul>
                </div>
            </div>
            <!-- //slider -->
        </div>
        <!--partners-->
        <div class="w3layouts-partners">
            <h3>Our Partners</h3>
            <div class="container">
                <ul>
                    <li><a href="#"><img class="img-responsive" src="{{asset('/front')}}/images/p-1.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="{{asset('/front')}}/images/p-2.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="{{asset('/front')}}/images/p-3.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="{{asset('/front')}}/images/p-4.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="{{asset('/front')}}/images/p-5.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="{{asset('/front')}}/images/p-6.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="{{asset('/front')}}/images/p-7.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="{{asset('/front')}}/images/p-8.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="{{asset('/front')}}/images/p-9.png" alt=""></a></li>
                    <li><a href="#"><img class="img-responsive" src="{{asset('/front')}}/images/p-10.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <!--//partners-->
        <!-- mobile app -->
        <div class="agile-info-mobile-app">
            <div class="container">
                <div class="col-md-5 w3-app-left">
                    <a href="mobileapp.html"><img src="{{asset('/front')}}/images/app.png" alt=""></a>
                </div>
                <div class="col-md-7 w3-app-right">
                    <h3>Resale App is the <span>Easiest</span> way for Selling and buying second-hand goods</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor Sed bibendum varius euismod. Integer eget turpis sit amet lorem rutrum ullamcorper sed sed dui. vestibulum odio at elementum. Suspendisse et condimentum nibh.</p>
                    <div class="agileits-dwld-app">
                        <h6>Download The App :
                            <a href="#"><i class="fa fa-apple"></i></a>
                            <a href="#"><i class="fa fa-windows"></i></a>
                            <a href="#"><i class="fa fa-android"></i></a>
                        </h6>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- //mobile app -->
    </div>

    @endsection