@extends('layouts.app') @section('shop_by_vehicle_css')
<link rel="stylesheet" href="{{ asset('css/wheels.css') }}"> @endsection @section('content')

<div class="header-content-title">
</div>
<div class="content-top">
    <div class="container-fluid">
        <div class="row">
            <div class="top-column col-sm-12">
                <div class="slideshow-panel col-sm-12">
                    <!-- <div class="otloading-bg otloader"></div> -->
                    <div class="swiper-viewport">
                        <div id="slideshow0" class="gallery-top slideshow-main swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide text-center">
                                    <a>
                                        <img src="image/Banner.jpg" alt="slider-01" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a>
                                        <img src="image/Banner-1.jpg" alt="slider-02" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a>
                                        <img src="image/Banner-2.jpg" alt="slider-03" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="swiper-slide text-center">
                                    <a>
                                        <img src="image/Banner.jpg" alt="slider-04" class="img-responsive" />
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-pagination slideshow0"></div>
                            <div class="swiper-pager">
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>

                        <div id="slideshow0" class="gallery-thumbs slideshow-main swiper-container">
                            <!-- <div class="swiper-wrapper">
                                        <div class="swiper-slide text-center">
                                                    <a>
                                        <div class="title">slider-01</div>
                                        <img src="image/Banner.jpg" alt="slider-01" class="img-responsive" />
                                        </a>
                                                </div>
                                        <div class="swiper-slide text-center">
                                                    <a>
                                        <div class="title">slider-02</div>
                                        <img src="image/Banner.jpg" alt="slider-02" class="img-responsive" />
                                        </a>
                                                </div>
                                        <div class="swiper-slide text-center">
                                                    <a>
                                        <div class="title">slider-03</div>
                                        <img src="image/Banner.jpg" alt="slider-03" class="img-responsive" />
                                        </a>
                                                </div>
                                        <div class="swiper-slide text-center">
                                                    <a>
                                        <div class="title">slider-04</div>
                                        <img src="image/Banner.jpg" alt="slider-04" class="img-responsive" />
                                        </a>
                                                </div>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<br>
<!-- New Design Start -->
<style>
    .container.ban-ser {
        border: 1px solid #eaeaea;
    }
    
    .wheel-list {
        column-width: 15em;
        padding: 10px 0px !important;
    }
    
    .wheel-list li a {
        color: #474646;
        display: block;
        font-size: 12px !important;
        text-align: center;
    }
    
    .wheel-list ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }
    
    .wheel-list li {
        padding: 3px;
        margin: 3px;
        margin-top: 3px;
        margin-top: 3px;
        border: 1px solid #ccc;
        box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, .05);
        background-color: #fff;
        border-radius: 2px !important;
    }
    
    .wheel-list ul li:first-child {
        margin-top: 0;
    }
    
    #heading h1 {
        width: 100%;
        font-size: medium;
        font-family: open sans, Arial, sans-serif;
        color: #121214;
        font-weight: 500;
        text-align: center;
    }
    
    .col-sm-3.payments3-card img {
        width: 100% !important;
    }
    
    .col-sm-3.payments-card {
        text-align: center !important;
    }
    
    .prod-headinghome p {
        margin: 10px 0px;
        color: #121214;
        font-size: .875em;
        line-height: 25px;
    }
    
    .col-sm-4.wheel-img {
        text-align: center !important;
    }
    /* pro Start */
    
    .hometabled {
        display: table;
        text-align: center;
        width: 100%;
        background: #fff;
        box-shadow: 0 2px 3px 0 rgba(180, 180, 180, .6) !important;
        border: 1px solid #d8d7d7;
        margin-bottom: 15px;
        padding: .5%;
        border-radius: 2px;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
    }
    
    .pTopBar {
        display: table;
        width: 100%;
        padding: .5% 1%;
        margin-bottom: 1%;
        border-radius: 2px;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        background: #000;
    }
    
    .pTopCell {
        display: table-cell;
        width: 50%;
        color: #fff;
        text-shadow: 0 1px 1px rgba(0, 0, 0, .75);
        font-weight: 700;
        font-size: 16px;
    }
    
    .pTopCell.Phone a {
        color: #fff;
        text-decoration: none;
    }
    
    .asItems {
        border: 0px;
    }
    
    .asItems {
        padding: 0;
        padding-top: 0px;
        width: 100%;
        padding-top: 5px;
        text-align: center;
        margin: 0 auto 10px;
        background: #fff;
        border: 1px solid #cecece;
        border-radius: 2px;
        -moz-border-radius: 2px;
        -webkit-border-radius: 2px;
        box-shadow: 0 0 3px rgba(0, 0, 0, .125);
        font-family: open sans, Arial, sans-serif;
    }
    
    .asItems {
        text-align: center;
        font-family: open sans, Arial, sans-serif;
    }
    
    .gridList {
        margin: 0 auto;
        padding: 0;
        width: auto;
        display: table;
    }
    
    .homeapge1 {
        height: 190px !important;
    }
    
    .gridItem {
        display: inline-block;
        width: 210px;
        text-align: center;
        height: 250px;
        padding: 5px;
    }
    
    .homecelld b {
        color: #222 !important;
        font-size: 12px !important;
    }
    
    .hometabled {
        margin: 25px 0px !important;
    }
    
    .gridList.wheels.suggested .gridItem homeapge1 {
        height: 180px;
    }
    
    .asItems {
        border: 0px;
    }
    
    .prod-headinghome h2 {
        width: 100%;
        font-size: medium;
        font-family: open sans, Arial, sans-serif;
        color: #000 !important;
        font-weight: 600 !important;
        text-align: center;
    }
    
    .prod-headinghome b {
        color: #0e1661 !important;
    }
    
    .prod-heading-center {
        text-align: center;
    }
    
    .prod-headinghome h3 {
        width: 100%;
        font-size: medium;
        font-family: open sans, Arial, sans-serif;
        color: #000 !important;
        font-weight: 600 !important;
        text-align: center;
    }
    
    .prod-heading-center p {
        color: #121214;
        font-size: .875em;
        line-height: 25px;
    }
    
    #footer-down {
        border: 1px solid #ccc !important;
        background:#fff !important;
    }
    
    .bbb-nl,
    .godaddy-nl,
    .reseller-nl,
    .sitelock-nl,
    .socialicons-nl,
    .verisign-nl {
        display: table-cell;
        vertical-align: middle;
        width: 16%;
        text-align: center;
    }
    
    .social2-nl {
        display: table;
        vertical-align: middle;
        position: relative;
        width: 90%;
        max-width: 1366px;
    }
    
    .googlestore {
        display: table-cell;
        vertical-align: middle;
        width: 16%;
        text-align: center;
    }
    
    .social-nl {
        margin: 40px 0px !important;
    }
    
    .footer-ratings h1 a {
        color: #777777;
        font-size: 14px !important;
        line-height: 25px;
    }
    
    .main a {
        color: #0e1661 !important;
    }
    
    .zfooterMenu ul li a:hover {
        display: inline;
        font-size: 11px;
        color: #000;
        font-weight: 700;
    }
    
    .zfooterMenu ul li a {
        display: inline;
        text-decoration: none;
        font-size: 11px;
        color: #000;
        font-weight: 700;
        padding: 2px 14px;
        border-right: 1px solid #e0e0e0;
    }
    
    .zfooterMenu ul li {
        border-left: 1px solid #e0e0e0 !important;
    }
    
    .zfooterMenu ul li {
        position: relative;
        display: inline;
    }
    
    .zfooterMenu ul {
        margin: 5px 0;
        padding: 0;
        list-style-type: none;
        border-left: 1px solid #e0e0e0;
    }
    
    .footer-ratings h1 {
        margin: 0px 0px !important;
    }
    
    .copywright {
        padding: 10px 0;
        margin-top: 5px;
        color: #666;
    }
    
    #produst,
    #special-product,
    footer,
    #bott,
    .container.brand-logo {
        display: none !important;
    }
    .container-fluid.home-page {
        padding: 0px 0px !important;
        background: #f1f1f1 !important;
    }

    @media (max-width: 767px)
    {
        .bbb-nl, .godaddy-nl, .reseller-nl, .sitelock-nl, .socialicons-nl, .verisign-nl 
        {
            display: inline-block;
            padding: 10px 50px;
            width: auto;
            text-align: center;
        }
        .googlestore
        {
            vertical-align: middle;
            width: 100% !important;
            text-align: center;
            display: inline-block;
        }
        .zfooterMenu ul li 
        {
            display: block;
            padding-top: 15px;
        }
        .zfooterMenu ul,.zfooterMenu ul li
        {
            border-left:none !important;
        }
        .zfooterMenu ul li a
        {
            border-right:none;
        }
        .main a
        {
            font-size:10px !important;
        }
        .dropdown-menu.multi-colum-nav {

            width: 100% !important;
            background:

            #000 !important;
            border: none !important;
            text-align: center;

        }
    }
</style>
<div class="banner-search">
    <div class="container ban-ser">
        <div class="wheel-list">
            <ul>
                <li><a href="">17 inch Specials</a></li>
                <li><a href="">18 inch Specials</a></li>
                <li><a href="">20 inch Specials</a></li>
                <li><a href="">22 inch Specials</a></li>
                <li><a href="">24 inch Specials</a></li>
                <li><a href="">26 inch Specials</a></li>
                <li><a href="">Black Wheels</a></li>
                <li><a href="">Tuner Wheels</a></li>
                <li><a href="">3-Piece Wheels</a></li>
                <li><a href="">Off Road Wheels</a></li>
                <li><a href="">8-Lug Wheels</a></li>
                <li><a href="">Dually Wheels</a></li>
                <li><a href="">Classic Wheels</a></li>
                <li><a href="">Vehicle Gallery</a></li>
                <li><a href="">Videos</a></li>
                <li><a href="">Reviews</a></li>
                <li><a href="">Bolt Patterns</a></li>
                <li><a href="">Canada Shipping</a></li>
                <li><a href="">Feedback</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Return Policy</a></li>
                <li><a href="">Shipping Info</a></li>
                <li><a href="">Order Status</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="title-header">
            <div id="heading" class="title">
                <h1>Welcome to Discounted Wheel Warehouse - Wheels, Tires, Rims</h1>
            </div>
        </div>
        <hr>
    </div>

    <div class="container">
        <div class="row pay">
            <div class="col-sm-3 payments-card"><img src="image/pay1.png"></div>
            <div class="col-sm-3 payments-card"><img src="image/pay2.png"></div>
            <div class="col-sm-3 payments3-card"><img src="image/pay3.png"></div>
            <div class="col-sm-3 payments-card"><img src="image/pay4.png"></div>
        </div>
    </div>

    <div class="container">
        <div class="prod-headinghome">
            <p>Welcome to Discounted wheel Warehouse. We offer a huge selection of rims and tires to suit your needs. We carry 15 inch wheels all the way to a whopping 32 inch custom wheel. We offer quality discount tires at a price range for all. Don't miss our Closeout section as we have the best blowout deals to offer. Whether you're looking for rims or tires Discounted Wheel Warehouse has the best deal on the world wide web. We also have all the latest news and information on our Blog concerning custom wheels or car rims and all aspects of tires.</p>
        </div>
    </div>

    <div class="container">
        <div class="row pro-img">
            <div class="col-sm-4 wheel-img"><img src="image/image-1.png"></div>
            <div class="col-sm-4 wheel-img"><img src="image/image-2.png"></div>
            <div class="col-sm-4 wheel-img"><img src="image/image-3.png"></div>
        </div>
    </div>

</div>
<!--  -->
<div class="container">

    <div class="hometabled">
        <div class="pTopBar">
            <div class="pTopCell HotDeals">Hot Deals Save 30%-75%</div>
            <div class="pTopCell Phone"><a href="tel:1-800-901-6003" title="Telephone 1-800-901-6003">1-800-901-6003</a></div>
        </div>

        <div class="asItems wheels">
            <ul class="gridList wheels suggested">

                @forelse($Wheels as $key => $wheel)
                
                <?php if($key == count($Wheels)/2 ) break; ?>
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img  class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="{{asset(@$wheel->image)}}" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>{{$wheel->wheeldiameter}} Diameter</b></div>
                </li>

                @empty
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img data-original="image/product.png" class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="image/product.png" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>17 inch Only $69</b></div>
                </li>
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img data-original="image/product.png" class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="image/product.png" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>18 inch Only $79</b></div>
                </li>
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img data-original="image/product.png" class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="image/product.png" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>20 inch Only $203</b></div>
                </li>
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img data-original="image/product.png" class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="image/product.png" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>22 inch Only $237</b></div>
                </li>
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img data-original="image/product.png" class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="image/product.png" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>24 inch Only $261</b></div>
                </li>
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img data-original="image/product.png" class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="image/product.png" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>26 inch Only $329</b></div>
                </li>

                @endforelse
            </ul>
        </div>
        <div class="asItems wheels">
            <ul class="gridList wheels suggested">

                @forelse($Wheels as $key => $wheel)
                
                <?php if($key < count($Wheels)/2 ) continue; ?>
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img data-original="image/product.png" class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="{{asset(@$wheel->image)}}" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>205/50R17 $45</b></div>
                </li>

                @empty
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img data-original="image/product.png" class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="image/product.png" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>205/50R17 $45</b></div>
                </li>
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img data-original="image/product.png" class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="image/product.png" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>225/40R18 $50</b></div>
                </li>
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img data-original="image/product.png" class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="image/product.png" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>245/35R20 $60</b></div>
                </li>
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img data-original="image/product.png" class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="image/product.png" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>265/35R22 $100</b></div>
                </li>
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img data-original="image/product.png" class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="image/product.png" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>305/35R24 $125</b></div>
                </li>
                <li class="gridItem homeapge1">
                    <div class="homecelld">
                        <a href=""><img data-original="image/product.png" class="lazy ri" lazyload="1" alt="17 inch Car Rims" src="image/product.png" style="display: inline;" width="150" height="150"></a>
                    </div>
                    <div class="homecelld" style="margin-top: 4px;"><b>305/35R26 $125</b></div>
                </li>
                @endforelse
            </ul>
        </div>
    </div>

</div>
<!--  -->
<div class="container">
    <div class="prod-headinghome">
        <h2>We offer the hassle free fitment to make things EASY</h2>
        <p>Our Wheel Fitment Specialists or Tire Fitment Specialist can get you into those aftermarket wheels or tires fast. Our staff strives on giving the best service to our customers and have 20 years experience in wheel and tire fitment. We are the absolute authority on getting you fitted with the best choice of rims or tires for your Car, Truck or SUV. We offer online fitment that is quick and painless and will show you exactly which rims or tires will fit your vehicle.</p>
        <h2>Fast Shipping plus Low already Discounted Prices</h2>
        <p>Discounted Wheel Warehouse offers Fast Shipping on all its products. Whether your looking for some good quality cheap tires or just a set of car rims. We can get them to you quickly with our Fast shipping. Our price is already heavily discounted. No need to look elsewhere Discounted Wheel Warehouse will already have the best price for any wheels or wheel and tire package your looking for.</p>
        <h2>Home of the Wheel and Tire Package</h2>
        <p>Discounted wheel Warehouse is the home of the Wheel and Tire Package. We have been offering rims combined with tires also known as the "Wheel and Tire Package" since our existence. The best way to buy wheels and tire for your Car, Truck or SUV is a Wheel and Tire Package. We correctly fit the wheels using plus sizing, then correctly fit the plus sized tires for your vehicle. Our highly trained staff mounts and Road-Force Balances the wheels and tires for you into a wheel and tire package. All the customer has to do is dismount their stock/oem wheels and mount the wheels and tires right out of the box, it's super easy.</p>
        <h2>Full Range of rims and tires for every Car, Truck or SUV</h2>
        <p>We carry rims in the following sizes: 15 inch, 16 inch, 17 inch, 18 inch, 19 inch, 20 inch, 22 inch, 24 inch, 26 inch, 28 inch, 30 inch and a whopping 32 inch beast of a wheel. We have custom wheels, black wheels, off road wheels, staggered fitment wheels and 3 piece wheels. Our Tires range from 13 inch all the way to 32 inch. We have name brand high quality tires like Michelin, BFGoodrich all the way to Yokohama. We also carry a vast amount of Value low cost tires also known as cheap tires. We have brands like Fullrun and Lexani for our high quality discount tires.</p>
    </div>
    <div class="prod-headinghome">
        <h3>Useful Links for Custom Wheel Purchasing</h3>
        <p><a href=""><b>Package Deal</b></a> - This link has information about what comes with a wheel and tire package.</p>
        <p><a href=""><b>LOW or HIGH ?</b></a> - This link is information on how to determine if you have a FWD offset or a RWD offset on your Vehicle.</p>
        <p><a href=""><b>Lip Sizes</b></a> - Explains the difference in wheel lip sizes and what to expect when your wheel arrives.</p>
        <p><a href=""><b>Wheel Fitment</b></a> - This link explains Plus Sizing and how we are able to properly fit your rims and tires for your vehicle.</p>
        <p><a href=""><b>Offset and Bolt Patterns</b></a> - Reference to help aid in determining Bolt patterns and offsets for all vehicles.</p>
        <p><a href=""><b>Order Status</b></a> - View information on the status of your order.</p>
    </div>
    <div class="prod-heading-center">
        <p>Discounted Wheel Warehouse your best place to buy:</p>
        <p>Aftermarket Rims and Tires for your Car, Truck or Suv, Wheel and Tire Packages</p>
    </div>
</div>
<!--  -->
<!-- footer start -->

<section id="footer-down">
    <div class="container-fluid">
        <div class="footerWrapper">
            <div class="BottomSliderHome" align="center">
                <a href=""><img src="image/foot-img.png" class="lazy ri" alt="Wheel Visualizer" width="100%" height="auto"></a>
            </div>
        </div>
    </div>
</section>

<section id="footer">

    <div class="container">
        <div class="social-nl">
            <div align="center">
                <div class="social2-nl">

                    <div class="bbb-nl">
                        <a target="_blank" href="">
                            <img class="lazy" src="image/social-1.png" style="display: inline;" width="90" height="72"></a>
                    </div>

                    <div class="reseller-nl">
                        <a href="">
                            <img class="lazy" src="image/social-2.png" style="display: inline;" height="52"></a>
                    </div>

                    <div class="googlestore">
                        <a target="_blank">
                            <img class="lazy" src="image/social-3.png" style="display: inline;" width="150" height="61"></a>
                    </div>

                    <div class="sitelock-nl">
                        <a target="_blank" href="">
                            <img class="lazy" src="image/social-4.png" style="display: inline;" width="145" height="68"></a>
                    </div>

                    <div class="godaddy-nl">
                        <a target="_blank" rel="noreferrer" href="">
                            <img class="lazy" src="image/social-5.png" style="display: inline;" width="113" height="59"></a>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div align="center">
                <div class="footer-phone">Discounted Wheel Warehouse 1-800-901-6003</div>
                <div class="main" style="font-size:small;margin: 10px 0px;">Contact Us <a href="mailto:sales@discountedwheelwarehouse.com">sales@discountedwheelwarehouse.com</a></div>
            </div>
            <div class="footercustom-menu" align="center">
                <div class="zfooterMenu">
                    <ul>
                        <li><a href="">Custom Wheels</a></li>
                        <li><a href="">Discount Tires</a></li>
                        <li><a href="">Information Links</a></li>
                        <li><a href="">Rims Financing</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Vehicle Search</a></li>
                        <li><a href="">Home</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-ratings" align="center">
                <h1><a href="">DiscountedWheelWarehouse.com has a ResellerRatings of 4.505/5 based on 8203 Reviews</a></h1>
            </div>
            <div class="copywright" align="center">copyright © 2020 Discounted Wheel Warehouse</div>
            <!-- <div align="center"><img data-original="image/Zomix_power_Icon_white.png" class="lazy" lazyload="1" alt="Powered By Zomix" src="image/Zomix_power_Icon_white.webp.png" style="display: inline;" width="147" height="24"></div> -->
        </div>
    </div>
</section>

<!-- footer end -->
<!-- New Design End -->

<!-- Banner Down Sestion Start -->
<section id="produst">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 sub-head">
                <h1>All Products</h1>
            </div>
        </div>
        <div class="row main-pro">
            {{--
            <div class="col-sm-3">
                <div class="header-bottom col-sm-12">
                    <aside id="header-bottom">
                        <div class="main-category-list left-main-menu">
                            <div class="cat-menu">
                                <div class="OT-panel-heading active">ACCESSORIES</div>
                                <div class="menu-category-" style="display: block;">
                                    <ul class="dropmenu">
                                        <li class="OT-Sub-List dropdown">
                                            <a href="" class="OT-Category-List">Asanti</a>
                                            <span class="active_menu"></span>
                                        </li>
                                        <li class="OT-Sub-List dropdown">
                                            <a href="" class="OT-Category-List">Forgiato</a>
                                            <span class="active_menu"></span>
                                        </li>
                                        <li class="OT-Sub-List dropdown">
                                            <a href="" class="OT-Category-List">Fuel</a>
                                            <span class="active_menu"></span>
                                        </li>
                                        <li class="OT-Sub-List dropdown">
                                            <a href="" class="OT-Category-List">Lexani</a>
                                            <span class="active_menu"></span>
                                        </li>
                                        <li class="OT-Sub-List dropdown">
                                            <a href="" class="OT-Category-List">Vossen</a>
                                            <span class="active_menu"></span>
                                        </li>
                                        <li class="OT-Sub-List dropdown">
                                            <a href="" class="OT-Category-List">Toyo</a>
                                            <span class="active_menu"></span>
                                        </li>
                                        <li class="OT-Sub-List dropdown">
                                            <a href="" class="OT-Category-List">Wheel</a>
                                            <span class="active_menu"></span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>--}}

            <div class="col-sm-12 main-pro-inner">
                <div class="row">
                    @forelse($Wheels as $key => $wheel)
                    <div class="col-sm-4">
                        <div class="product-layouts">
                            <div class="product-thumb transition">
                                <div class="image">
                                    <img class="image_thumb" src="{{asset($wheel->image)}}" title="{{$wheel->brand}}" alt="{{$wheel->brand}}">
                                    <img class="image_thumb_swap" src="{{asset($wheel->image)}}" title="{{$wheel->brand}}" alt="{{$wheel->brand}}">
                                    <div class="sale-icon"><a>Sale</a></div>
                                </div>

                                <div class="thumb-description">
                                    <div class="caption">
                                        <h4><a href="{{route('wheels')}}?brand={{base64_encode(json_encode(array($wheel->brand)))}}">{{$wheel->style}} <br> {{'Diameter : '.$wheel->wheeldiameter}}</a></h4>
                                        <!-- <h6><a href="">Accessories</a></h6> -->
                                        <!-- <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                            </div> -->
                                        <br>
                                        <!-- <div class="price">
                                                <span class="price-new">$104.00</span> <span class="price-old">$1,202.00</span>
                                                <span class="price-tax">Ex Tax: $85.00</span>
                                            </div> -->
                                    </div>
                                    <div class="button-group">
                                        <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('46');"><i class="fa fa-shopping-cart"></i>
                                            <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
                                        </button>
                                        <button class="btn-wishlist" title="Add to Wish List" onclick="wishlist.add('46');"><i class="fa fa-heart"></i>
                                            <span title="Add to Wish List">Add to Wish List</span>
                                        </button>
                                        <button class="btn-compare" title="Add to compare" onclick="compare.add('46');"><i class="fa fa-exchange"></i>
                                            <span title="Add to compare">Add to compare</span>
                                        </button>
                                        <button class="btn-quickview" type="button" title="Quick View" onclick="ot_quickview.ajaxView('index2ebe.html?route=product/product&amp;product_id=46')"> <i class="fa fa-eye"></i>
                                            <span>Quick View</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty {{'Not Found'}} @endforelse {{$Wheels->appends(['page' => @Request::get('page')])->links()}}

                </div>
                <br>
            </div>
        </div>
    </div>
</section>
<!-- BAnner Down Sestion End -->

<!--New Product Start  -->
<section id="special-product">
    <div class="container">
        <div class="col-sm-12 sub-head">
            <h1>Special Products</h1>
        </div>
        <div class="col-md-12">
            <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#myCarousel" data-slide="prev"></a>
                    <a class="right fa fa-chevron-right btn btn-success" href="#myCarousel" data-slide="next"></a>
                </div>
                <div class="carousel-inner">
                    @forelse(wheelbrands($arraysplit=4) as $key1 => $brandImages)

                    <div class="item {{$key1==0? 'active' : ''}}">
                        @foreach($brandImages as $branddetail)
                        <div class="col-sm-3">
                            <div class="product-layouts">
                                <div class="product-thumb transition">
                                    <div class="image">
                                        <img class="image_thumb" src="{{asset($branddetail['image'])}}" title="{{$branddetail['brand']}}" alt="{{$branddetail['brand']}}">
                                        <img class="image_thumb_swap" src="{{asset($branddetail['image'])}}" title="{{$branddetail['brand']}}" alt="{{$branddetail['brand']}}">
                                        <div class="sale-icon"><a>Sale</a></div>
                                    </div>

                                    <div class="thumb-description">
                                        <div class="caption">
                                            <h4><a href="{{route('wheels')}}?brand={{base64_encode(json_encode(array($branddetail['brand'])))}}">{{$branddetail['style'] }} <br> {{'Diameter : '.$branddetail['wheeldiameter']}}</a></h4>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-cart" type="button" title="Add to Cart" onclick="cart.add('46');"><i class="fa fa-shopping-cart"></i>
                                                <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>
                                            </button>
                                            <button class="btn-wishlist" title="Add to Wish List" onclick="wishlist.add('46');"><i class="fa fa-heart"></i>
                                                <span title="Add to Wish List">Add to Wish List</span>
                                            </button>
                                            <button class="btn-compare" title="Add to compare" onclick="compare.add('46');"><i class="fa fa-exchange"></i>
                                                <span title="Add to compare">Add to compare</span>
                                            </button>
                                            <button class="btn-quickview" type="button" title="Quick View" onclick="ot_quickview.ajaxView('index2ebe.html?route=product/product&amp;product_id=46')"> <i class="fa fa-eye"></i>
                                                <span>Quick View</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- New Product End -->

@include('include.latestproducts') @endsection @section('shop_by_vehicle_scripts')
<script src="{{ asset('js/wheels.js') }}"></script>
@endsection