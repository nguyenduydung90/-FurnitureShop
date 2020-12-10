@extends('customer.masterCustomer')
@section('content')
<div id='row-one' class="row-one ui padded grid" >
    <div class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column" >
        <div class="wm-module wm-slider">
            <div class="owl-carousel" id="owl_carousel_928">
                <a href="#"><img src="{{asset('customerCss/slider1.jpg')}}" tppabs="http://demo01.123corp.com.vn/furniture/images/slider1.jpg" alt="slider chạy"/></a>
                <a href="#"><img src="{{asset('customerCss/slider2.jpg')}}" tppabs="http://demo01.123corp.com.vn/furniture/images/slider2.jpg" alt="slider chạy"/></a>
                <a href="#"><img src="{{asset('customerCss/slider3.jpg')}}" tppabs="http://demo01.123corp.com.vn/furniture/images/slider3.jpg" alt="slider chạy"/></a>
            </div>
        </div>
        <script type="text/javascript">
            if ((typeof config_slider) === 'undefined') {
                config_slider = [];
            }
            var config = {};
            var str_custom = "";
            if(str_custom !== ''){
                config = eval('()');
            }else{
                var animateOut = "default";
                var animateIn = "default";
                var animateOut_final, animateIn_final;
                if(animateOut === 'default'){
                    animateOut_final = false;
                }else{
                    animateOut_final = animateOut;
                }
                if(animateIn === 'default'){
                    animateIn_final = false;
                }else{
                    animateIn_final = animateIn;
                }
                config = {
                    animateOut: animateOut_final,
                    animateIn: animateIn_final,
                    smartSpeed: "1000",
                    onInitialized  :function(){text_animate(this.$element,"Initialized");},
                    responsive:{
                        0:{
                            items: 1,
                            nav: false,
                            dots: false,
                            loop: true,
                            autoplay: true                    },
                        768:{
                            items: 1,
                            nav: false,
                            dots: false,
                            loop: true,
                            autoplay: true                    },
                        993:{
                            items: 1,
                            nav: false,
                            dots: false,
                            loop: true,
                            autoplay: true                    },
                        1200:{
                            items: 1,
                            nav: false,
                            dots: false,
                            loop: true,
                            autoplay: true                    }
                    }
                }
            }
            var config_slider_tmp = {
                id: "owl_carousel_928",
                config: config
            };
            config_slider.push(config_slider_tmp);
            // console.log(config_slider_tmp);
        </script>
    </div>
</div>
<div class="ui padded grid" >
    <div class="row-auto  wm-mobile column" >
        <div class="ui grid  wm-mobile container" >
            <div class="four wide large four wide computer eight wide tablet sixteen wide mobile column" >
                <style>.wm-module.wm-image .image-1:before{z-index: 2; background: rgba(0, 0, 0, 0.51);}.wm-module.wm-image .image-1{cursor: auto;}</style>
                <div class="wm-module wm-image" >
                    <div class="image-1"  >
                        <img class="ui medium centered image" src="{{asset('customerCss/pages-image-1.png')}}" >
                    </div>
                </div>
                <div class="wm-module wm-free-text">
                    <h2 class="ui header">Nhiều loại ghế</h2>
                    <div class="content">
                        <p>Aliquam id ligula elit eleifend aliquam. Không có gì ultricies truyền hình tuyệt vời, nhưng giá cả vẫn chưa được thiết lập. Tuy nhiên, bất kỳ con sư tử hoặc một nhà phát triển ấm tiệt trùng.</p>
                    </div>
                </div>
            </div>
            <div class="four wide large four wide computer eight wide tablet sixteen wide mobile column" >
                <style>.wm-module.wm-image .image-1:before{z-index: 2; background: rgba(0, 0, 0, 0.51);}.wm-module.wm-image .image-1{cursor: auto;}</style>
                <div class="wm-module wm-image" >
                    <div class="image-1"  >
                        <img class="ui medium centered image" src="{{asset('customerCss/pages-image-2.png')}}">
                    </div>
                </div>
                <div class="wm-module wm-free-text">
                    <h2 class="ui header">Nhiều loại bàn</h2>
                    <div class="content">
                        <p>Aliquam id ligula elit eleifend aliquam. Không có gì ultricies truyền hình tuyệt vời, nhưng giá cả vẫn chưa được thiết lập. Tuy nhiên, bất kỳ con sư tử hoặc một nhà phát triển ấm tiệt trùng.</p>
                    </div>
                </div>
            </div>
            <div class="four wide large four wide computer eight wide tablet sixteen wide mobile column" >
                <style>.wm-module.wm-image .image-1:before{z-index: 2; background: rgba(0, 0, 0, 0.51);}.wm-module.wm-image .image-1{cursor: auto;}</style>
                <div class="wm-module wm-image" >
                    <div class="image-1"  >
                        <img class="ui medium centered image" src="{{asset('customerCss/pages-image-3.png')}}"  alt="Nhiều loại ghế">
                    </div>
                </div>
                <div class="wm-module wm-free-text">
                    <h2 class="ui header">Ghế sopha</h2>
                    <div class="content">
                        <p>Aliquam id ligula elit eleifend aliquam. Không có gì ultricies truyền hình tuyệt vời, nhưng giá cả vẫn chưa được thiết lập. Tuy nhiên, bất kỳ con sư tử hoặc một nhà phát triển ấm tiệt trùng.</p>
                    </div>
                </div>
            </div>
            <div class="four wide large four wide computer eight wide tablet sixteen wide mobile column" >
                <style>.wm-module.wm-image .image-1:before{z-index: 2; background: rgba(0, 0, 0, 0.51);}.wm-module.wm-image .image-1{cursor: auto;}</style>
                <div class="wm-module wm-image" >
                    <div class="image-1"  >
                        <img class="ui medium centered image" src="{{asset('customerCss/pages-image-4.png')}}"   alt="Nhiều loại ghế">
                    </div>
                </div>
                <div class="wm-module wm-free-text">
                    <h2 class="ui header">Tủ đồ</h2>
                    <div class="content">
                        <p>Aliquam id ligula elit eleifend aliquam. Không có gì ultricies truyền hình tuyệt vời, nhưng giá cả vẫn chưa được thiết lập. Tuy nhiên, bất kỳ con sư tử hoặc một nhà phát triển ấm tiệt trùng.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui padded grid" >
    <div class="products  wm-mobile column" >
        <div id='pro' class="ui grid  wm-mobile container" >
            <div class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column" >
                <div class="wm-module wm-product products-h dele-header ui active tab" data-tab="product-595">
                    <div class="ui dividing header">Sản phẩm </div>
                    <div class="ui stackable doubling link cards four pro-code-product-595"> <!-- items / cards -->

                        @foreach($products as $product)
                        <div class="card" style="box-shadow: 5px 10px 18px lightgrey !important;">
                            <div class="ui image wm-dimmer blurring dimmable" onclick="location.href='{{route('customer.showProductDetail',$product->id)}}'/*tpa=http://demo01.123corp.com.vn/furniture/san-pham-detail.html*/">
                                <div class="ui dimmer"></div>
                                <img src="{{asset($product->image)}}"  class="visible content" alt="album-woo-3" />
                            </div>
                            <div class="content">
                                <a href="{{route('customer.showProductDetail',$product->id)}}" class="header"><h3>{{$product->productName}}</h3></a>
                                <div class="left floated meta">
                                    <p class="ui red header"><small>{{number_format($product->buyPrice,0,',','.')}} VNĐ</small></p>
                                </div>
                            </div>

                            <div class="button-group ui buttons bottom two attached" data-p="47077">
                                <div class="ui button" onclick="addtoCart(event,undefined,47077);">
                                    <i class="cart icon"></i> <a href="{{route('cart.addToCart',$product->id)}}">Thêm vào giỏ</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       <p style="width: auto"></p>
                    </div>
                <div class="ui stackable doubling link cards four pro-code-product-595 mt-4 mb-4">{{$products->links()}}</div>

                    <!-- end cards -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui padded grid" >
    <div class="products pro-colum  wm-mobile column" >
        <div class="ui wm equal width pc grid  wm-mobile container" >
            <div class="large computer only sixteen wide large sixteen wide computer column" ></div>
            <div class="column" >
                <div class="wm-module wm-product products-h" data-tab="">
                    <div class="ui dividing header">sản phẩm bán chạy</div>
                    <div class="ui divided items pro-code-product-497"> <!-- items / cards -->
                        <div class="item">
                            <div class="image" onclick="location.href='san-pham-detail.html'/*tpa=http://demo01.123corp.com.vn/furniture/san-pham-detail.html*/">
                                <div class="ui dimmer"></div>
                                <img src="recent-products-1.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-1.jpg" class="visible content" alt="woo-single-2" />
                            </div>
                            <div class="content">
                                <a href="san-pham-detail.html" tppabs="http://demo01.123corp.com.vn/furniture/san-pham-detail.html"class="header"><h2>SẢN PHẨM GHẾ DÀI</h2></a>
                                <div class="tools">
                                    <div class="ui pro rating autooff" data-rating="0" data-p="47073"></div>&nbsp;
                                    (<span class="rank" data-tooltip="Lượt đánh giá" data-position="right center">0</span>)
                                    <span class="btnwishlist right floated" onclick="toggleWishList(event,47073)">
											<i class="heart outline like icon"></i>
											<span class="datalike">0</span>
										</span>
                                </div>
                                <div class="meta"><p class="ui red header"><small> 300,000 ¥</small></p></div>
                                <div class="button-group extra" data-p="47073">
                                    <div class="ui button" onclick="addtoCart(event,undefined,47073);">
                                        <i class="cart icon"></i> Thêm vào giỏ
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image" onclick="location.href='san-pham-detail.html'/*tpa=http://demo01.123corp.com.vn/furniture/san-pham-detail.html*/">
                                <div class="ui dimmer"></div>
                                <img src="recent-products-1.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-1.jpg" class="visible content" alt="woo-single-2" />
                            </div>
                            <div class="content">
                                <a href="san-pham-detail.html" tppabs="http://demo01.123corp.com.vn/furniture/san-pham-detail.html"class="header"><h2>SẢN PHẨM GHẾ DÀI</h2></a>
                                <div class="tools">
                                    <div class="ui pro rating autooff" data-rating="0" data-p="47073"></div>&nbsp;
                                    (<span class="rank" data-tooltip="Lượt đánh giá" data-position="right center">0</span>)
                                    <span class="btnwishlist right floated" onclick="toggleWishList(event,47073)">
											<i class="heart outline like icon"></i>
											<span class="datalike">0</span>
										</span>
                                </div>
                                <div class="meta"><p class="ui red header"><small> 300,000 ¥</small></p></div>
                                <div class="button-group extra" data-p="47073">
                                    <div class="ui button" onclick="addtoCart(event,undefined,47073);">
                                        <i class="cart icon"></i> Thêm vào giỏ
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image" onclick="location.href='san-pham-detail.html'/*tpa=http://demo01.123corp.com.vn/furniture/san-pham-detail.html*/">
                                <div class="ui dimmer"></div>
                                <img src="recent-products-1.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-1.jpg" class="visible content" alt="woo-single-2" />
                            </div>
                            <div class="content">
                                <a href="san-pham-detail.html" tppabs="http://demo01.123corp.com.vn/furniture/san-pham-detail.html"class="header"><h2>SẢN PHẨM GHẾ DÀI</h2></a>
                                <div class="tools">
                                    <div class="ui pro rating autooff" data-rating="0" data-p="47073"></div>&nbsp;
                                    (<span class="rank" data-tooltip="Lượt đánh giá" data-position="right center">0</span>)
                                    <span class="btnwishlist right floated" onclick="toggleWishList(event,47073)">
											<i class="heart outline like icon"></i>
											<span class="datalike">0</span>
										</span>
                                </div>
                                <div class="meta"><p class="ui red header"><small> 300,000 ¥</small></p></div>
                                <div class="button-group extra" data-p="47073">
                                    <div class="ui button" onclick="addtoCart(event,undefined,47073);">
                                        <i class="cart icon"></i> Thêm vào giỏ
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="image" onclick="location.href='san-pham-detail.html'/*tpa=http://demo01.123corp.com.vn/furniture/san-pham-detail.html*/">
                                <div class="ui dimmer"></div>
                                <img src="recent-products-1.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-1.jpg" class="visible content" alt="woo-single-2" />
                            </div>
                            <div class="content">
                                <a href="san-pham-detail.html" tppabs="http://demo01.123corp.com.vn/furniture/san-pham-detail.html"class="header"><h2>SẢN PHẨM GHẾ DÀI</h2></a>
                                <div class="tools">
                                    <div class="ui pro rating autooff" data-rating="0" data-p="47073"></div>&nbsp;
                                    (<span class="rank" data-tooltip="Lượt đánh giá" data-position="right center">0</span>)
                                    <span class="btnwishlist right floated" onclick="toggleWishList(event,47073)">
											<i class="heart outline like icon"></i>
											<span class="datalike">0</span>
										</span>
                                </div>
                                <div class="meta"><p class="ui red header"><small> 300,000 ¥</small></p></div>
                                <div class="button-group extra" data-p="47073">
                                    <div class="ui button" onclick="addtoCart(event,undefined,47073);">
                                        <i class="cart icon"></i> Thêm vào giỏ
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end cards -->
                </div> <!-- end wm-module || tab -->
            </div>
        </div>
    </div>
</div>
<div class="ui padded grid" >
    <div class="news-home  wm-mobile column" >
        <div id='row-three' class="ui grid  wm-mobile container" >
            <div class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column" >
                <div class="wm-module wm-post news-h">
                    <div class="ui dividing header"><h3>Tin tức</h3></div>
                    <div class="ui three stackable doubling_ cards">
                        <a class="card" href="tin-tuc-detail.html" tppabs="http://demo01.123corp.com.vn/furniture/tin-tuc-detail.html">
                            <div class="blurring dimmable image wm-dimmer">
                                <div class="ui dimmer"><div class="content"><div class="center"></div></div></div>
                                <img src="recent-products-2.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-2.jpg" alt=""/>
                            </div>
                            <div class="content">
                                <h4 class="header">In hac habitasse platea dictumst.</h4>
                                <div class="meta">
                                    <span class="price"><i class="icon calendar"></i>&nbsp;18-01-2018</span>
                                    <span class="stay"></span>
                                </div>
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tellus nunc, feugiat sed urna id, iaculis...	</p>
                                </div>
                            </div>
                        </a>
                        <a class="card" href="tin-tuc-detail.html" tppabs="http://demo01.123corp.com.vn/furniture/tin-tuc-detail.html">
                            <div class="blurring dimmable image wm-dimmer">
                                <div class="ui dimmer"><div class="content"><div class="center"></div></div></div>
                                <img src="recent-products-2.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-2.jpg" alt=""/>
                            </div>
                            <div class="content">
                                <h4 class="header">In hac habitasse platea dictumst.</h4>
                                <div class="meta">
                                    <span class="price"><i class="icon calendar"></i>&nbsp;18-01-2018</span>
                                    <span class="stay"></span>
                                </div>
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tellus nunc, feugiat sed urna id, iaculis...	</p>
                                </div>
                            </div>
                        </a>
                        <a class="card" href="tin-tuc-detail.html" tppabs="http://demo01.123corp.com.vn/furniture/tin-tuc-detail.html">
                            <div class="blurring dimmable image wm-dimmer">
                                <div class="ui dimmer"><div class="content"><div class="center"></div></div></div>
                                <img src="recent-products-2.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-2.jpg" alt=""/>
                            </div>
                            <div class="content">
                                <h4 class="header">In hac habitasse platea dictumst.</h4>
                                <div class="meta">
                                    <span class="price"><i class="icon calendar"></i>&nbsp;18-01-2018</span>
                                    <span class="stay"></span>
                                </div>
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi tellus nunc, feugiat sed urna id, iaculis...	</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui padded grid" >
    <div class="row-doitac  wm-mobile column" >
        <div class="ui grid  wm-mobile container" >
            <div class="column" >
                <div class="wm-module wm-free-text"><h2 class="ui header">NHÃN HIỆU CỦA CHÚNG TÔI</h2></div>
                <div class="wm-module wm-slider doi-tac">
                    <div class="owl-carousel" id="owl_carousel_349">
                        <a href="#"><img src="b1.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/b1.jpg" alt="Đối tác"/></a>
                        <a href="#"><img src="b2.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/b2.jpg" alt="Đối tác"/></a>
                        <a href="#"><img src="b3.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/b3.jpg" alt="Đối tác"/></a>
                        <a href="#"><img src="b1.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/b1.jpg" alt="Đối tác"/></a>
                        <a href="#"><img src="b2.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/b2.jpg" alt="Đối tác"/></a>
                        <a href="#"><img src="b3.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/b3.jpg" alt="Đối tác"/></a>
                    </div>
                </div>
                <script type="text/javascript">
                    if ((typeof config_slider) === 'undefined') {
                        config_slider = [];
                    }
                    var config = {};
                    var str_custom = "";
                    if(str_custom !== ''){
                        config = eval('()');
                    }else{
                        var animateOut = "default";
                        var animateIn = "default";
                        var animateOut_final, animateIn_final;
                        if(animateOut == 'default'){
                            animateOut_final = false;
                        }else{
                            animateOut_final = animateOut;
                        }
                        if(animateIn == 'default'){
                            animateIn_final = false;
                        }else{
                            animateIn_final = animateIn;
                        }
                        config = {
                            animateOut: animateOut_final,
                            animateIn: animateIn_final,
                            smartSpeed: "1000",
                            onInitialized  :function(){text_animate(this.$element,"Initialized");},
                            responsive:{
                                0:{
                                    items: 2,
                                    nav: false,
                                    dots: false,
                                    loop: true,
                                    autoplay: false                    },
                                768:{
                                    items: 4,
                                    nav: false,
                                    dots: false,
                                    loop: true,
                                    autoplay: false                    },
                                993:{
                                    items: 6,
                                    nav: false,
                                    dots: false,
                                    loop: true,
                                    autoplay: false                    },
                                1200:{
                                    items: 6,
                                    nav: false,
                                    dots: false,
                                    loop: true,
                                    autoplay: false                    }
                            }
                        }
                    }
                    var config_slider_tmp = {
                        id: "owl_carousel_349",
                        config: config
                    };
                    config_slider.push(config_slider_tmp);
                    // console.log(config_slider_tmp);
                </script>
            </div>
        </div>
    </div>
</div>
@endsection
