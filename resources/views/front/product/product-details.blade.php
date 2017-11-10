@extends('front.master')


@section('body')
    <!-- js -->
    <script type="text/javascript" src="{{asset('/front')}}/js/jquery.min.js"></script>
    <!-- js -->
    <!-- Source -->
    <script src="{{asset('/front')}}/js/jquery.uls.data.js"></script>
    <script src="{{asset('/front')}}/js/jquery.uls.data.utils.js"></script>
    <script src="{{asset('/front')}}/js/jquery.uls.lcd.js"></script>
    <script src="{{asset('/front')}}/js/jquery.uls.languagefilter.js"></script>
    <script src="{{asset('/front')}}/js/jquery.uls.regionfilter.js"></script>
    <script src="{{asset('/front')}}/js/jquery.uls.core.js"></script>
    <!-- //language-select -->
    <link rel="stylesheet" href="{{asset('/front')}}/css/flexslider.css" media="screen" /><!-- flexslider css -->



    <div class="w3layouts-breadcrumbs text-center">
        <div class="container">
			<span class="agile-breadcrumbs">
			<a href="index.html"><i class="fa fa-home home_1"></i></a> /
			<a href="all-classifieds.html">All Ads</a> /
			<a href="cars.html">Cars</a> /
			<span>Car name</span></span>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!--single-page-->
    <div class="single-page main-grid-border">
        <div class="container">
            <div class="product-desc">
                <div class="col-md-7 product-view">
                    <h2>{{$products->product_title}}</h2>
                    <img src="{{asset($products->product_image)}}" height="250" width="250">

                    <div class="product-details">
                        <h4><span class="w3layouts-agileinfo">Brand </span> : <a href="#">{{$products->brand_name}} </a><div class="clearfix"></div></h4>

                        <h4><span class="w3layouts-agileinfo">Overview</span> :<p>{{$products->product_short_description}} </p><div class="clearfix"></div></h4>

                    </div>
                    <p> <i class="glyphicon glyphicon-map-marker"></i><a href="#">state</a>, <a href="#">city</a>| Added at 06:55 pm, Ad ID: 987654321</p>
                    <div class="flexslider">
                        <ul class="slides">

                            @foreach($subImages as $subImage)
                                <li data-thumb="{{asset($subImage->product_sub_image)}}">
                                    <img src="{{asset($subImage->product_sub_image)}}"  height="250" width="250">
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- FlexSlider -->
                    <script defer src="{{asset('/front')}}/js/jquery.flexslider.js"></script>

                    <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function() {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                            });
                        });
                    </script>
                    <!-- //FlexSlider -->

                </div>
                <div class="col-md-5 product-details-grid">
                    <div class="item-price">
                        <div class="product-price">
                            <p class="p-price">Price</p>
                            <h3 class="rate">Tk. {{$products->product_price}}</h3>
                            <div class="clearfix"></div>
                        </div>
                        <div class="condition">
                            <p class="p-price">Condition</p>
                            <h4>Good</h4>
                            <div class="clearfix"></div>
                        </div>
                        <div class="itemtype">
                            <p class="p-price">Item Type</p>
                            <h4>{{$products->category_name}}</h4>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="interested text-center">
                        <h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
                        <p><i class="glyphicon glyphicon-earphone"></i>00-85-9875462655</p>
                    </div>
                    <div class="tips">
                        <h4>Description</h4>
                        <ol>
                            <li><a href="#">{{$products->product_long_description}}</a></li>

                        </ol>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//single-page-->

@endsection