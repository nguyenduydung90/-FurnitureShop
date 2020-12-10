@extends('customer.masterCustomer')
@section('content')
    <div class="ui padded grid">
        <div class="bread  wm-mobile column">
            <div class="ui grid  wm-mobile container">
                <div class="column">
                    <div class="wm-module wm-breadcrumb">
                        <div class="ui segment">
                            <div class="ui large breadcrumb" style="background-color: #0c5460">
                                <a href="index.html" tppabs="http://demo01.123corp.com.vn/furniture/index.html" class="section"><i class="icon home"></i></a>
                                <i class="minus icon divider"></i>
                                <div class="section">Sản phẩm</div>
                                <i class="right angle icon divider"></i>
                                <div class="active section">Sản phẩm chi tiết</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ui padded grid" >
        <div class=" wm-mobile column" >
            <div class="ui grid  wm-mobile container" >
                <div class="column" >
                    <div class="wm-module wm-p-detail content">
                        <script>if(typeof fields === "undefined") fields = {};</script>
                        <div class="ui stackable grid">
                            <div class="three column row">
                                <div class="column">
                                    <div class="ui segment">
                                        <div class="myfotorama" data-allowfullscreen="true" data-nav="thumbs">
                                            <img style="width: 100%" src="{{asset($products->image)}}" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="column"><h1 class="ui grey header h2">{{$products->productName}}</h1>
                                    <table class="ui very basic table">
                                        <tbody>
                                        <tr>
                                            <td class=""><strong>Giá sản phẩm</strong></td>
                                            <td class="lbl-price right aligned">{{number_format($products->buyPrice)}} VNĐ</td>
                                        </tr>
                                        <tr>
                                            <td class=""><strong>Chiều cao</strong></td>
                                            <td class="lbl-price right aligned">{{$products->height}} cm</td>
                                        </tr>
                                        <tr>
                                            <td class=""><strong>Chiều rộng</strong></td>
                                            <td class="lbl-price right aligned">{{$products->width}} cm</td>
                                        </tr>
                                        <tr>
                                            <td class=""><strong>Chiều dài</strong></td>
                                            <td class="lbl-price right aligned">{{$products->length}} cm</td>
                                        </tr>
                                        <tr>
                                            <td class=""><strong>Chất liệu</strong></td>
                                            <td class="lbl-price right aligned">{{$products->material}}</td>
                                        </tr>
                                        <tr>
                                            <td class=""><strong>Màu sắc</strong></td>
                                            <td class="lbl-price right aligned">{{$products->color}} </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="description-short">
                                        <p class="grey"><strong>Mô tả</strong></p><p> </p>
                                        <p class="lead">{{$products->productDescription}}</p>
                                    </div>
                                </div>
                                <div class="column">
                                    <form id="byinfo" class="ui form" data-p="47073">
                                        <div class="btn-add-cart ui animated green big button" tabindex="0" >
                                            <div class="visible content"><a href="{{route('cart.addToCart',$products->id)}}">Thêm vào giỏ</a></div>
                                            <div class="hidden content"><i class="icon add to cart"></i></div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="ui padded grid" >--}}
{{--        <div class="products  wm-mobile column" >--}}
{{--            <div class="ui grid  wm-mobile container" >--}}
{{--                <div class="column" >--}}
{{--                    <div class="wm-module wm-product products-h" data-tab="">--}}
{{--                        <div class="ui dividing header">sản phẩm liên quan</div>--}}
{{--                        <div class="ui stackable doubling link cards four pro-code-product-853"> <!-- items / cards -->--}}
{{--                            <div class="card">--}}
{{--                                <div class="ui image wm-dimmer blurring dimmable" onclick="location.href='san-pham-detail.html'/*tpa=http://demo01.123corp.com.vn/furniture/san-pham-detail.html*/">--}}
{{--                                    <div class="ui dimmer"></div>--}}
{{--                                    <img src="recent-products-1.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-1.jpg" class="visible content" alt="" /></div>--}}
{{--                                <div class="content">--}}
{{--                                    <a href="san-pham-detail.html" tppabs="http://demo01.123corp.com.vn/furniture/san-pham-detail.html" class="header"><h2>Ghế dài cao cấp</h2></a>--}}
{{--                                    <div class="left floated meta">--}}
{{--                                        <p class="ui red header"><small> 499,000 ¥</small></p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="button-group ui buttons bottom two attached" data-p="47077">--}}
{{--                                    <div class="ui button" onclick="addtoCart(event,undefined,47077);">--}}
{{--                                        <i class="cart icon"></i> Thêm vào giỏ--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card">--}}
{{--                                <div class="ui image wm-dimmer blurring dimmable" onclick="location.href='san-pham-detail.html'/*tpa=http://demo01.123corp.com.vn/furniture/san-pham-detail.html*/">--}}
{{--                                    <div class="ui dimmer"></div>--}}
{{--                                    <img src="recent-products-1.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-1.jpg" class="visible content" alt="" /></div>--}}
{{--                                <div class="content">--}}
{{--                                    <a href="san-pham-detail.html" tppabs="http://demo01.123corp.com.vn/furniture/san-pham-detail.html" class="header"><h2>Ghế dài cao cấp</h2></a>--}}
{{--                                    <div class="left floated meta">--}}
{{--                                        <p class="ui red header"><small> 499,000 ¥</small></p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="button-group ui buttons bottom two attached" data-p="47077">--}}
{{--                                    <div class="ui button" onclick="addtoCart(event,undefined,47077);">--}}
{{--                                        <i class="cart icon"></i> Thêm vào giỏ--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card">--}}
{{--                                <div class="ui image wm-dimmer blurring dimmable" onclick="location.href='san-pham-detail.html'/*tpa=http://demo01.123corp.com.vn/furniture/san-pham-detail.html*/">--}}
{{--                                    <div class="ui dimmer"></div>--}}
{{--                                    <img src="recent-products-1.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-1.jpg" class="visible content" alt="" /></div>--}}
{{--                                <div class="content">--}}
{{--                                    <a href="san-pham-detail.html" tppabs="http://demo01.123corp.com.vn/furniture/san-pham-detail.html" class="header"><h2>Ghế dài cao cấp</h2></a>--}}
{{--                                    <div class="left floated meta">--}}
{{--                                        <p class="ui red header"><small> 499,000 ¥</small></p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="button-group ui buttons bottom two attached" data-p="47077">--}}
{{--                                    <div class="ui button" onclick="addtoCart(event,undefined,47077);">--}}
{{--                                        <i class="cart icon"></i> Thêm vào giỏ--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="card">--}}
{{--                                <div class="ui image wm-dimmer blurring dimmable" onclick="location.href='san-pham-detail.html'/*tpa=http://demo01.123corp.com.vn/furniture/san-pham-detail.html*/">--}}
{{--                                    <div class="ui dimmer"></div>--}}
{{--                                    <img src="recent-products-1.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-1.jpg" class="visible content" alt="" /></div>--}}
{{--                                <div class="content">--}}
{{--                                    <a href="san-pham-detail.html" tppabs="http://demo01.123corp.com.vn/furniture/san-pham-detail.html" class="header"><h2>Ghế dài cao cấp</h2></a>--}}
{{--                                    <div class="left floated meta">--}}
{{--                                        <p class="ui red header"><small> 499,000 ¥</small></p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="button-group ui buttons bottom two attached" data-p="47077">--}}
{{--                                    <div class="ui button" onclick="addtoCart(event,undefined,47077);">--}}
{{--                                        <i class="cart icon"></i> Thêm vào giỏ--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div> <!-- end cards -->--}}
{{--                    </div> <!-- end wm-module || tab -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
