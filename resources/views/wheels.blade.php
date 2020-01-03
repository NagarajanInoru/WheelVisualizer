@extends('layouts.app')

@section('shop_by_vehicle_css')
<link rel="stylesheet" href="{{asset('choosen/css/chosen.min.css') }}">
@endsection
@section('content')

<style>
    /* .pro {
        width: 1500px !important;
    } */
    .col-sm-12.sub-head {
        z-index: -1;
    }
    .container-fluid.home-page {
        padding: 0px 0px !important;
    }

    .modal-dialog {
        width: 800px !important;
        margin: 30px auto;
    }

    .col-sm-8.model-car img {
        width: 100% !important;
    }

    .model-car {
        font-size: 15px !important;
        font-weight: 500 !important;
    }

    .model-button {
        background: #000 !important;
        color: #fff !important;
        padding: 5px 10px !important;
        border-radius: 5px !important;
        font-size: 12px !important;
    }

    .footer-para
    {
    font-size: 14px !important;
    color: #fff !important;
    line-height: 30px !important;
    }
    .modal-header {
        background: #000 !important;
        color: #fff !important;
    }
    .modal-dialog {
        width: 700px !important;
        margin: 10% auto !important;
    }
    .row.model-car-body {
        border-top: 5px solid #000 !important;
    }

    .row.main-model-body {
        padding: 30px 0px !important;
    }
    .model-list-unstyled li
    {
        list-style-type: none;
        display: inline !important;
        padding: 5px 5px !important;
        border: 1px solid #ccc !important;
        margin: 0px 2px !important;
    }

.carousel-control 			 { width:  4%; }
.carousel-control.left,.carousel-control.right {margin-left:15px;background-image:none;}
@media (max-width: 767px) {
	.carousel-inner .active.left { left: -100%; }
	.carousel-inner .next        { left:  100%; }
	.carousel-inner .prev		 { left: -100%; }
	.active > div { display:none; }
	.active > div:first-child { display:block; }

}
@media (min-width: 767px) and (max-width: 992px ) {
	.carousel-inner .active.left { left: -50%; }
	.carousel-inner .next        { left:  50%; }
	.carousel-inner .prev		 { left: -50%; }
	.active > div { display:none; }
	.active > div:first-child { display:block; }
	.active > div:first-child + div { display:block; }
}
@media (min-width: 992px ) {
	.carousel-inner .active.left { left: -25%; }
	.carousel-inner .next        { left:  25%; }
	.carousel-inner .prev		 { left: -25%; }
}
#special-product {
    padding: 50px 0px !important;
}  
.front img {
    width: 80px;
    position: absolute;
    content: '';
    top: 44.7%;
    left: 39.2%;
    bottom: 149%;
    right: 0;
    transform: perspective(0px) rotateY(41deg);
    object-fit: scale-down;
    }
.back img
{    
    width: 65px;
    position: absolute;
    content: '';
    top: 43.7%;
    left: 72.9%;
    bottom: 0;
    right: 0;
    transform: perspective(405px) rotateY(54deg);
    object-fit: scale-down;
}
/*.front img {
    width: 67px !important;
    position: absolute;
    content: '';
    top: 41.1%;
    left: 24.9%;
    bottom: 0;
    right: 0;
    transform: perspective(562px) rotateY(42deg);
    }
.back img
{
    width: 55px !important;
    position: absolute;
    content: '';
    top: 40.4%;
    left: 47.3%;
    bottom: 0;
    right: 0;
    transform: perspective(400px) rotateY(48deg);
}*/
.color-radius{
    height: 25px;
    width: 25px !important;
    border: 0.5px dotted black;
    border-radius: 50% !important;
    cursor: pointer;
}
.color-selected{

    border-radius: 0% !important;

}

</style>



    <!-- BAnner Down Sestion Start -->
    <section id="produst">
        <div class="container pro">
            <div class="row">
                <div class="col-sm-12 sub-head">
                    <h1>{{implode(', ',json_decode(base64_decode(@Request::get('brand')?:''))?:[])}} Wheels</h1></div>
            </div>
            <div class="row main-pro">
                <div class="col-sm-3">
                    <div class="header-bottom col-sm-12">
                        <aside id="header-bottom">
                            <div class="main-category-list left-main-menu">
                                <div class="cat-menu">
                                    <div class="OT-panel-heading active">ACCESSORIES</div>
                                    <div class="menu-category-" style="display: block;">
                                        <ul class="dropmenu">
                                           <li class="OT-Sub-List dropdown">
                                                <select class="form-control chosen-select Year" name="year">
                                                    <option value="" disabled selected>Select Year</option>
                                                    @foreach($years as $data)
                                                    <option value="{{$data->yr}}" 
{{(@$car_images->CarViflist)?((@$car_images->CarViflist->yr == $data->yr)?'selected':''):''}}
                                                    >{{$data->yr}}</option>
                                                    @endforeach
                                                </select>
                                            </li>
                                            <li class="OT-Sub-List dropdown">
                                                <select class="form-control chosen-select Make" name="make">
                                                    <option disabled selected>Select Make</option>
                                                    @if(@$car_images->CarViflist)
                                                    <option value="{{@$car_images->CarViflist->make}}" selected="">{{@$car_images->CarViflist->make}}</option>
                                                    @endif
                                                </select>
                                            </li>
                                            <li class="OT-Sub-List dropdown">
                                                <select class="form-control chosen-select Model" name="model">
                                                    <option disabled selected>Select Model</option>
                                                    @if(@$car_images->CarViflist)
                                                    <option value="{{@$car_images->CarViflist->model}}" selected="">{{@$car_images->CarViflist->model}}</option>
                                                    @endif
                                                </select>
                                            </li>
                                            
                                            <li class="OT-Sub-List dropdown">
                                                <select class="form-control chosen-select DriveBody" name="drivebody">
                                                    <option disabled selected>Select Drive/Body</option>
                                                    @if(@$car_images->CarViflist)
                                                    <option value="{{@$car_images->CarViflist->vif}}" selected="">{{@$car_images->CarViflist->whls}} {{@$car_images->CarViflist->drs}} {{@$car_images->CarViflist->body}}</option>
                                                    @endif
                                                </select>
                                            </li>
                                            {{--<li class="OT-Sub-List dropdown">
                                                <select class="form-control chosen-select SubModel" name="subodel">
                                                    <option disabled selected>Select Sub Model</option>
                                                </select>
                                            </li>
                                            <li class="OT-Sub-List dropdown">
                                                <select class="form-control chosen-select Size" name="size">
                                                    <option disabled selected>Select Size</option>
                                                </select>
                                            </li>--}}

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="price-heading">SIZE</div> 
                                <!--  -->
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <h4 class="panel-title">
                                                <a  role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="{{(@Request::get('diameter'))?'':'collapsed'}}" aria-expanded="{{(@Request::get('diameter'))?'true':'false'}}" aria-controls="collapseOne">
                                                    Diameter
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <ul style="list-style-type: none;">
                                                    @forelse($wheeldiameter as $diameter)
                                                    <li><input type="checkbox" name="wheeldiameter[]" class="wheeldiameter" value="{{$diameter->wheeldiameter}}" 
        @if(in_array($diameter->wheeldiameter,json_decode(base64_decode(@Request::get('diameter')?:''))?:[])) checked @endif> {{$diameter->wheeldiameter.'('.$diameter->total.')'}}  
                                                    </li>
                                                    @empty
                                                    <li><input type="checkbox" name="wheeldiameter[]" value=""> 13</li>
                                                    <li><input type="checkbox" name="wheeldiameter[]" value=""> 20</li> 
                                                    @endforelse 
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="{{(@Request::get('width'))?'':'collapsed'}}" aria-expanded="{{(@Request::get('width'))?'true':'false'}}" aria-controls="collapseTwo">
                                                  Width
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <ul style="list-style-type: none;">
                                                    @forelse($wheelwidth as $width)
                                                    <li><input type="checkbox" name="wheelwidth[]" class="wheelwidth" value="{{$width->wheelwidth}}" 
        @if(in_array($width->wheelwidth,json_decode(base64_decode(@Request::get('width')?:''))?:[])) checked @endif> {{$width->wheelwidth.'('.$width->total.')'}} </li>
                                                    @empty
                                                    <li><input type="checkbox" name="wheelwidth[]" value=""> 7</li>
                                                    <li><input type="checkbox" name="wheelwidth[]" value=""> 8</li> 
                                                    @endforelse 
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingThree">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="{{(@Request::get('brand'))?'':'collapsed'}}" aria-expanded="{{(@Request::get('brand'))?'true':'false'}}" aria-controls="collapseThree">
                                                    Brand
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <ul style="list-style-type: none;">
                                                    @forelse($brands as $brand)
                                                    <li><input type="checkbox" name="brand[]" class="brand" value="{{$brand->brand}}" 
        @if(in_array($brand->brand,json_decode(base64_decode(@Request::get('brand')?:''))?:[])) checked @endif> {{$brand->brand.'('.$brand->total.')'}} 
                                                    </li>
                                                    @empty
                                                    <li><input type="checkbox" name="brand[]" value=""> 7</li>
                                                    <li><input type="checkbox" name="brand[]" value=""> 8</li> 
                                                    @endforelse 
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    {{--<div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingFour">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Finish
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                            <div class="panel-body">
                                              <form action="/action_page.php" class="access">
                                                <ul>
                                                  <li><input type="checkbox" name="vehicle1" value=""> 14.0 (1)</li>
                                                  <li><input type="checkbox" name="vehicle1" value=""> 14.0 (1)</li>
                                                  <li><input type="checkbox" name="vehicle1" value=""> 14.0 (1)</li>
                                                  <li><input type="checkbox" name="vehicle1" value=""> 14.0 (1)</li>
                                                  <li><input type="checkbox" name="vehicle1" value=""> 14.0 (1)</li>
                                                </ul>
                                              </form>
                                            </div>
                                        </div>
                                    </div>--}}
                                </div>
                                <!--  -->
                            </div>
                        </div>
<!--                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="price-heading">PRICE</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="color-heading">
                                    <h1>COLOR</h1>
                                    <ul class="list-color">
                                        <li class="red"></li>
                                        <li class="black"></li>
                                        <li class="blue"></li>
                                        <li class="orange"></li>
                                        <li class="blue"></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>

                </div>



                <div class="col-sm-9 col-sm-9 main-pro-inner">
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
                                            <h4><a href="{{route('wheels')}}?brand={{$wheel->brand}}">{{$wheel->style}} <br> {{'Diameter : '.$wheel->wheeldiameter}}</a></h4>
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
                                            @if($car_images)
                                            <button class="btn btn-primary {{(!file_exists(front_back_path($wheel->image)))?'disabled':''}}" {{(!file_exists(front_back_path($wheel->image)))?'':'data-toggle=modal'}}  data-target="#myModal{{$key}}" >See On Your Car</button>
                                            @endif
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

                        @if($car_images)
                        <!-- Model Car Start -->

                        <div class="modal fade" id="myModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            @if(@$car_images->CarViflist)
                                                {{@$car_images->CarViflist->yr}} - 
                                                {{@$car_images->CarViflist->make}} -
                                                {{@$car_images->CarViflist->model}} -
                                                {{@$car_images->CarViflist->whls}} 
                                                {{@$car_images->CarViflist->drs}} 
                                                {{@$car_images->CarViflist->body}} 
                                            @else
                                                Your Car
                                            @endif
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row main-model-body">
                                            <div class="col-sm-8 model-car">
                                                <img class="car_image_{{$car_images->car_id}} " src="{{asset($car_images->image)}}" style="width: 152% !important;">
                                            </div>
                                            @if(file_exists(front_back_path($wheel->image)))
                                            <div class="car-wheel">
                                                <div class="front">
                                                    <img src="{{front_back_path($wheel->image)}}" id="image-diameter-front-{{$key}}">
                                                </div>
                                                <div class="back">
                                                    <img src="{{front_back_path($wheel->image)}}" id="image-diameter-back-{{$key}}">
                                                </div>
                                        </div>
                                        @endif
                                        </div>

                                        <div class="row model-car-body">
                                         
                                            <div class="col-sm-4">
                                                <h1 class="model-car">Vechicle Color</h1>
                                                <ul class="list-color">
                                                    @if(@$car_images->CarColor)
                                                        @foreach(@$car_images->CarColor as $key1 => $color)
                                                        @if(strlen($color->rgb1) ==6)
                                                        <li class="color-radius car_color {{($color->code ==$car_images->color_code )?'color-selected':''}}" style="background:#{{$color->rgb1}};"  title="{{$color->name}}" data-code="{{$color->code}}" data-vif="{{$color->vif}}"></li>
                                                        @endif
                                                        @endforeach
                                                    @endif 
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h1 class="model-car">Wheel Diameter</h1>
                                                <button class="model-button diameter-up" data-id="{{$key}}">Zoom In</button>
                                                <button class="model-button diameter-down" data-id="{{$key}}">Zoom Out</button>
                                            </div>
                                            <div class="col-sm-4">
                                                <h1 class="model-car">Share :</h1>
                                                <ul class="model-list-unstyled">
                                                    <li class="facebook">
                                                        <a target="_blank" class="_blank" href="#" title="Facebook">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="twitter">
                                                        <a target="_blank" class="_blank" href="#" title="Twitter">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>

                                                    <li class="google-plus">
                                                        <a target="_blank" class="_blank" href="#" rel="publisher" title="Google Plus">
                                                            <i class="fa fa-google-plus"></i>
                                                        </a>
                                                    </li>
                                                    <li class="pinterest">
                                                        <a target="_blank" class="_blank" href="#" rel="publisher" title="pinterest">
                                                            <i aria-hidden="true" class="fa fa-pinterest-p"></i>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Model Car End -->
                        @endif
                        @empty
                        {{'Not Found'}}
                        @endforelse
                        {{$Wheels->appends(['diameter' => @Request::get('diameter'),'width' => @Request::get('width'),'brand' => @Request::get('brand'),'car_id' => @Request::get('car_id'),'page' => @Request::get('page')])->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>



  <!--Special Products Slider Start  -->
  {{--<section id="special-product">
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
        <div class="item active">
          <div class="col-sm-3">
                              <div class="product-layouts">
                          <div class="product-thumb transition">
                              <div class="image">
                                  <a href="">
                                      <img class="image_thumb" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                      <img class="image_thumb_swap" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                  </a>
                                  <div class="sale-icon">Sale</div>
                              </div>

                              <div class="thumb-description">
                                  <div class="caption">
                                      <h4><a href="">Wheel</a></h4>
                                      <h6><a href="">Accessories</a></h6>
                                      <div class="rating">
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                      </div>
                                      <br>
                                      <div class="price">
                                          <span class="price-new">$104.00</span> <span class="price-old">$1,202.00</span>
                                          <span class="price-tax">Ex Tax: $85.00</span>
                                      </div>
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
        </div>
        <div class="item">
          <div class="col-sm-3">
                              <div class="product-layouts">
                          <div class="product-thumb transition">
                              <div class="image">
                                  <a href="">
                                      <img class="image_thumb" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                      <img class="image_thumb_swap" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                  </a>
                                  <div class="sale-icon">Sale</div>
                              </div>

                              <div class="thumb-description">
                                  <div class="caption">
                                      <h4><a href="">Wheel</a></h4>
                                      <h6><a href="">Accessories</a></h6>
                                      <div class="rating">
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                      </div>
                                      <br>
                                      <div class="price">
                                          <span class="price-new">$104.00</span> <span class="price-old">$1,202.00</span>
                                          <span class="price-tax">Ex Tax: $85.00</span>
                                      </div>
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
        </div>
        <div class="item">
          <div class="col-sm-3">
                              <div class="product-layouts">
                          <div class="product-thumb transition">
                              <div class="image">
                                  <a href="">
                                      <img class="image_thumb" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                      <img class="image_thumb_swap" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                  </a>
                                  <div class="sale-icon">Sale</div>
                              </div>

                              <div class="thumb-description">
                                  <div class="caption">
                                      <h4><a href="">Wheel</a></h4>
                                      <h6><a href="">Accessories</a></h6>
                                      <div class="rating">
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                      </div>
                                      <br>
                                      <div class="price">
                                          <span class="price-new">$104.00</span> <span class="price-old">$1,202.00</span>
                                          <span class="price-tax">Ex Tax: $85.00</span>
                                      </div>
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
        </div>
        <div class="item">
          <div class="col-sm-3">
                              <div class="product-layouts">
                          <div class="product-thumb transition">
                              <div class="image">
                                  <a href="">
                                      <img class="image_thumb" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                      <img class="image_thumb_swap" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                  </a>
                                  <div class="sale-icon">Sale</div>
                              </div>

                              <div class="thumb-description">
                                  <div class="caption">
                                      <h4><a href="">Wheel</a></h4>
                                      <h6><a href="">Accessories</a></h6>
                                      <div class="rating">
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                      </div>
                                      <br>
                                      <div class="price">
                                          <span class="price-new">$104.00</span> <span class="price-old">$1,202.00</span>
                                          <span class="price-tax">Ex Tax: $85.00</span>
                                      </div>
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
        </div>
        <div class="item">
          <div class="col-sm-3">
                              <div class="product-layouts">
                          <div class="product-thumb transition">
                              <div class="image">
                                  <a href="">
                                      <img class="image_thumb" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                      <img class="image_thumb_swap" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                  </a>
                                  <div class="sale-icon">Sale</div>
                              </div>

                              <div class="thumb-description">
                                  <div class="caption">
                                      <h4><a href="">Wheel</a></h4>
                                      <h6><a href="">Accessories</a></h6>
                                      <div class="rating">
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                      </div>
                                      <br>
                                      <div class="price">
                                          <span class="price-new">$104.00</span> <span class="price-old">$1,202.00</span>
                                          <span class="price-tax">Ex Tax: $85.00</span>
                                      </div>
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
        </div>
        <div class="item">
          <div class="col-sm-3">
                              <div class="product-layouts">
                          <div class="product-thumb transition">
                              <div class="image">
                                  <a href="">
                                      <img class="image_thumb" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                      <img class="image_thumb_swap" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                  </a>
                                  <div class="sale-icon">Sale</div>
                              </div>

                              <div class="thumb-description">
                                  <div class="caption">
                                      <h4><a href="">Wheel</a></h4>
                                      <h6><a href="">Accessories</a></h6>
                                      <div class="rating">
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                      </div>
                                      <br>
                                      <div class="price">
                                          <span class="price-new">$104.00</span> <span class="price-old">$1,202.00</span>
                                          <span class="price-tax">Ex Tax: $85.00</span>
                                      </div>
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
        </div>
        <div class="item">
          <div class="col-sm-3">
                              <div class="product-layouts">
                          <div class="product-thumb transition">
                              <div class="image">
                                  <a href="">
                                      <img class="image_thumb" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                      <img class="image_thumb_swap" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                  </a>
                                  <div class="sale-icon">Sale</div>
                              </div>

                              <div class="thumb-description">
                                  <div class="caption">
                                      <h4><a href="">Wheel</a></h4>
                                      <h6><a href="">Accessories</a></h6>
                                      <div class="rating">
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                      </div>
                                      <br>
                                      <div class="price">
                                          <span class="price-new">$104.00</span> <span class="price-old">$1,202.00</span>
                                          <span class="price-tax">Ex Tax: $85.00</span>
                                      </div>
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
        </div>
        <div class="item">
          <div class="col-sm-3">
                              <div class="product-layouts">
                          <div class="product-thumb transition">
                              <div class="image">
                                  <a href="">
                                      <img class="image_thumb" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                      <img class="image_thumb_swap" src="image/product.png" title="accusamus etiusto odiote" alt="accusamus etiusto odiote">
                                  </a>
                                  <div class="sale-icon">Sale</div>
                              </div>

                              <div class="thumb-description">
                                  <div class="caption">
                                      <h4><a href="">Wheel</a></h4>
                                      <h6><a href="">Accessories</a></h6>
                                      <div class="rating">
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                          <span class="fa fa-stack"><i class="fa fa-star off fa-stack-2x"></i></span>
                                      </div>
                                      <br>
                                      <div class="price">
                                          <span class="price-new">$104.00</span> <span class="price-old">$1,202.00</span>
                                          <span class="price-tax">Ex Tax: $85.00</span>
                                      </div>
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
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>--}}
  <!--Special Products Slider End  -->


    <div class="container">

        <div class="row">
          <div class="col-sm-12 sub-head">
              <h1>All Brand Wheels</h1>
          </div>
            <div class="col-md-12">
                <!-- Controls -->
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example2"
                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example2"
                            data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="carousel-example2" class="carousel slide hidden-xs" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @forelse(wheelbrands($arraysplit=3) as $key => $brandImages)
                <div class="item {{$key == 0 ?'active':''}}">
                    <div class="row">
                        @foreach($brandImages as $branddetail)
                        <div class="col-sm-4 news-pro">
                            <div class="col-sm-6 news-img"><img src="{{asset($branddetail['image'])}}" style="width: 100%;"></div>
                            <div class="col-sm-6"> <a href="{{route('wheels')}}?brand={{$branddetail['brand']}}">
                                <h2 class="news-title"><b>{{$branddetail['style']}}</b></h2> 
                                <h2 class="news-title">{{'Diameter : '.$branddetail['wheeldiameter']}}</h2> </a>
                            </div>
                        </div>
                        @endforeach 
                    </div>
                </div> 
                @empty
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-4 news-pro">
                    <div class="col-sm-6 news-img"><img src="image/product.png"></div>
                    <div class="col-sm-6">
                        <h1 class="news-date">01 JAN 2019</h1>
                        <h2 class="news-title">Wheel</h2>
                        <p class="news">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                        <div class="col-sm-4 news-pro">
                    <div class="col-sm-6 news-img"><img src="image/product.png"></div>
                    <div class="col-sm-6">
                        <h1 class="news-date">01 JAN 2019</h1>
                        <h2 class="news-title">Wheel</h2>
                        <p class="news">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                    <div class="col-sm-4 news-pro">
                    <div class="col-sm-6 news-img"><img src="image/product.png"></div>
                    <div class="col-sm-6">
                        <h1 class="news-date">01 JAN 2019</h1>
                        <h2 class="news-title">Wheel</h2>
                        <p class="news">Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                    </div>
                </div> 
                @endforelse
            </div>
        </div>
</div> 


@endsection
@section('shop_by_vehicle_scripts')
    <script src="{{ asset('js/ajax/jquery.min.js') }}"></script>
    <script src="{{ asset('js/shop_by_vehicle.js') }}"></script>
    <script src="{{ asset('choosen/js/chosen.jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(".chosen-select").chosen({
          no_results_text: "Not Found!!"
        })
    </script>



<script>
$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}

    next.children(':first-child').clone().appendTo($(this));
  }
});
</script>


@endsection