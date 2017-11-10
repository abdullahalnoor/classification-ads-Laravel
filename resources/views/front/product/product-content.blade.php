@extends('front.master')

@section('body')
    <!-- responsive tabs -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/front') }}/css/easy-responsive-tabs.css " />
    <script src="{{ asset('/front') }}/js/easyResponsiveTabs.js"></script>
    <!-- /responsive tabs -->
    <!-- breadcrumbs -->
    <div class="w3layouts-breadcrumbs text-center">
        <div class="container">
            <span class="agile-breadcrumbs"><a href="index.html"><i class="fa fa-home home_1"></i></a> / <span>Categories</span></span>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- Categories -->
    <!--Vertical Tab-->
    <div class="categories-section main-grid-border">
        <div class="container">
            <h2 class="w3-head">All Categories</h2>
            <div class="category-list">
                <div id="parentVerticalTab">
                    <div class="agileits-tab_nav">
                        <ul class="resp-tabs-list hor_1">
                            <li>Mobiles</li>
                            <li>Electronics & Appliances</li>
                            <li>Cars</li>
                            <li>Bikes</li>
                            <li>Furniture</li>
                            <li>Pets</li>
                            <li>Books, Sports & Hobbies</li>
                            <li>Fashion</li>
                            <li>Kids</li>
                            <li>Services</li>
                            <li>Jobs</li>
                            <li>Real Estate</li>
                        </ul>
                        <a class="w3ls-ads" href="all-classifieds.html">View all Ads</a>
                    </div>
                    <div class="resp-tabs-container hor_1">
                        <span class="active total" style="display:block;" data-toggle="modal" data-target="#myModal"><strong>All USA</strong> (Select your city to see local ads)</span>
                        <div>
                            <div class="category">
                                <div class="category-img">
                                    <img src="{{asset('/front')}}/images/cat1.png" title="image" alt="" />
                                </div>
                                <div class="category-info">
                                    <h4>Mobiles</h4>
                                    <span>5,12,850 Ads</span>
                                    <a href="all-classifieds.html">View all Ads</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sub-categories">
                                <ul>
                                    <li><a href="mobiles.html">mobile phones</a></li>
                                    <li><a href="mobiles.html">Tablets</a></li>
                                    <li><a href="mobiles.html">Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="category">
                                <div class="category-img">
                                    <img src="{{asset('/front')}}/images/cat2.png" title="image" alt="" />
                                </div>
                                <div class="category-info">
                                    <h4>Electronics & Appliances</h4>
                                    <span>2,01,850 Ads</span>
                                    <a href="all-classifieds.html">View all Ads</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sub-categories">
                                <ul>
                                    <li><a href="electronics-appliances.html">Computers & accessories</a></li>
                                    <li><a href="electronics-appliances.html">Tv - video - audio</a></li>
                                    <li><a href="electronics-appliances.html">Cameras & accessories</a></li>
                                    <li><a href="electronics-appliances.html">Games & Entertainment</a></li>
                                    <li><a href="electronics-appliances.html">Fridge - AC - Washing Machine</a></li>
                                    <li><a href="electronics-appliances.html">Kitchen & Other Appliances</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="category">
                                <div class="category-img">
                                    <img src="{{asset('/front')}}/images/cat3.png" title="image" alt="" />
                                </div>
                                <div class="category-info">
                                    <h4>Cars</h4>
                                    <span>1,98,080 Ads</span>
                                    <a href="all-classifieds.html">View all Ads</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sub-categories">
                                <ul>
                                    <li><a href="cars.html">Commercial Vehicles</a></li>
                                    <li><a href="cars.html">Other Vehicles</a></li>
                                    <li><a href="cars.html">Spare Parts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="category">
                                <div class="category-img">
                                    <img src="{{asset('/front')}}/images/cat4.png" title="image" alt="" />
                                </div>
                                <div class="category-info">
                                    <h4>Bikes</h4>
                                    <span>6,17,568 Ads</span>
                                    <a href="all-classifieds.html">View all Ads</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sub-categories">
                                <ul>
                                    <li><a href="bikes.html">Motorcycles</a></li>
                                    <li><a href="bikes.html">Scooters</a></li>
                                    <li><a href="bikes.html">Bicycles</a></li>
                                    <li><a href="bikes.html">Spare Parts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="category">
                                <div class="category-img">
                                    <img src="{{asset('/front')}}/images/cat5.png" title="image" alt="" />
                                </div>
                                <div class="category-info">
                                    <h4>Furniture</h4>
                                    <span>1,05,168 Ads</span>
                                    <a href="all-classifieds.html">View all Ads</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sub-categories">
                                <ul>
                                    <li><a href="furnitures.html">Sofa & Dining</a></li>
                                    <li><a href="furnitures.html">Beds & Wardrobes</a></li>
                                    <li><a href="furnitures.html">Home Decor & Garden</a></li>
                                    <li><a href="furnitures.html">Other Household Items</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="category">
                                <div class="category-img">
                                    <img src="{{asset('/front')}}/images/cat6.png" title="image" alt="" />
                                </div>
                                <div class="category-info">
                                    <h4>Pets</h4>
                                    <span>1,77,816 Ads</span>
                                    <a href="all-classifieds.html">View all Ads</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sub-categories">
                                <ul>
                                    <li><a href="pets.html">Dogs</a></li>
                                    <li><a href="pets.html">Aquariums</a></li>
                                    <li><a href="pets.html">Pet Food & Accessories</a></li>
                                    <li><a href="pets.html">Other Pets</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="category">
                                <div class="category-img">
                                    <img src="{{asset('/front')}}/images/cat7.png" title="image" alt="" />
                                </div>
                                <div class="category-info">
                                    <h4>Books, Sports & Hobbies</h4>
                                    <span>9,58,458 Ads</span>
                                    <a href="all-classifieds.html">View all Ads</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sub-categories">
                                <ul>
                                    <li><a href="books-sports-hobbies.html">Books & Magazines</a></li>
                                    <li><a href="books-sports-hobbies.html">Musical Instruments</a></li>
                                    <li><a href="books-sports-hobbies.html">Sports Equipment</a></li>
                                    <li><a href="books-sports-hobbies.html">Gym & Fitness</a></li>
                                    <li><a href="books-sports-hobbies.html">Other Hobbies</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="category">
                                <div class="category-img">
                                    <img src="{{asset('/front')}}/images/cat8.png" title="image" alt="" />
                                </div>
                                <div class="category-info">
                                    <h4>Fashion</h4>
                                    <span>3,52,345 Ads</span>
                                    <a href="all-classifieds.html">View all Ads</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sub-categories">
                                <ul>
                                    <li><a href="fashion.html">Clothes</a></li>
                                    <li><a href="fashion.html">Footwear</a></li>
                                    <li><a href="fashion.html">Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="category">
                                <div class="category-img">
                                    <img src="{{asset('/front')}}/images/cat9.png" title="image" alt="" />
                                </div>
                                <div class="category-info">
                                    <h4>Kids</h4>
                                    <span>8,45,298 Ads</span>
                                    <a href="all-classifieds.html">View all Ads</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sub-categories">
                                <ul>
                                    <li><a href="kids.html">Furniture And Toys</a></li>
                                    <li><a href="kids.html">Prams & Walkers</a></li>
                                    <li><a href="kids.html">Accessories</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="category">
                                <div class="category-img">
                                    <img src="{{asset('/front')}}/images/cat10.png" title="image" alt="" />
                                </div>
                                <div class="category-info">
                                    <h4>Services</h4>
                                    <span>7,58,867 Ads</span>
                                    <a href="all-classifieds.html">View all Ads</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sub-categories">
                                <ul>
                                    <li><a href="services.html">Education & Classes</a></li>
                                    <li><a href="services.html">Web Development</a></li>
                                    <li><a href="services.html">Electronics & Computer Repair</a></li>
                                    <li><a href="services.html">Maids & Domestic Help</a></li>
                                    <li><a href="services.html">Health & Beauty</a></li>
                                    <li><a href="services.html">Movers & Packers</a></li>
                                    <li><a href="services.html">Drivers & Taxi</a></li>
                                    <li><a href="services.html">Event Services</a></li>
                                    <li><a href="services.html">Other Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="category">
                                <div class="category-img">
                                    <img src="{{asset('/front')}}/images/cat11.png" title="image" alt="" />
                                </div>
                                <div class="category-info">
                                    <h4>Jobs</h4>
                                    <span>5,74,547 Ads</span>
                                    <a href="all-classifieds.html">View all Ads</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sub-categories">
                                <ul>
                                    <li><a href="jobs.html">Customer Service</a></li>
                                    <li><a href="jobs.html">IT</a></li>
                                    <li><a href="jobs.html">Online</a></li>
                                    <li><a href="jobs.html">Marketing</a></li>
                                    <li><a href="jobs.html">Advertising & PR</a></li>
                                    <li><a href="jobs.html">Sales</a></li>
                                    <li><a href="jobs.html">Clerical & Administration</a></li>
                                    <li><a href="jobs.html">Human Resources</a></li>
                                    <li><a href="jobs.html">Education</a></li>
                                    <li><a href="jobs.html">Hotels & Tourism</a></li>
                                    <li><a href="jobs.html">Accounting & Finance</a></li>
                                    <li><a href="jobs.html">Manufacturing</a></li>
                                    <li><a href="jobs.html">Part - Time</a></li>
                                    <li><a href="jobs.html">Other Jobs</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="category">
                                <div class="category-img">
                                    <img src="{{asset('/front')}}/images/cat12.png" title="image" alt="" />
                                </div>
                                <div class="category-info">
                                    <h4>Real Estate</h4>
                                    <span>98,156 Ads</span>
                                    <a href="all-classifieds.html">View all Ads</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="sub-categories">
                                <ul>
                                    <li><a href="real-estate.html">Houses</a></li>
                                    <li><a href="real-estate.html">Apartments</a></li>
                                    <li><a href="real-estate.html">PG & Roommates</a></li>
                                    <li><a href="real-estate.html">Land & Plots</a></li>
                                    <li><a href="real-estate.html">Shops - Offices - Commercial Space</a></li>
                                    <li><a href="real-estate.html">Vacation Rentals - Guest Houses</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--Plug-in Initialisation-->
    <script type="text/javascript">
        $(document).ready(function() {

            //Vertical Tab
            $('#parentVerticalTab').easyResponsiveTabs({
                type: 'vertical', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <!-- //Categories -->

    @endsection