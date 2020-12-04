@extends('customer.masterCustomer')
@section('content')
    <div class="ui padded grid" >
        <div class="products  wm-mobile column" >
            <div id='pro' class="ui grid  wm-mobile container" >
                <div class="sixteen wide large sixteen wide computer sixteen wide tablet sixteen wide mobile column" >
                    <div class="wm-module wm-product products-h dele-header ui active tab" data-tab="product-595">
                        <div class="ui dividing header">Sản phẩm </div>
                        <div class="ui stackable doubling link cards four pro-code-product-595"> <!-- items / cards -->
                            @foreach($products as $product)
                                <div class="card" style="box-shadow: 5px 10px 18px lightgrey !important;">
                                    <div class="ui image wm-dimmer blurring dimmable" onclick="location.href='{{route('customer.showProductDetail')}}'/*tpa=http://demo01.123corp.com.vn/furniture/san-pham-detail.html*/">
                                        <div class="ui dimmer"></div>
                                        <img src="{{asset($product->image)}}" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-2.jpg" class="visible content" alt="album-woo-3" />
                                    </div>
                                    <div class="content">
                                        <a href="{{route('customer.showProductDetail')}} " class="header"><h2>{{$product->productName}}</h2></a>
                                        <div class="left floated meta">
                                            <p class="ui red header"><small>{{number_format($product->buyPrice,0,',','.')}} VNĐ</small></p>
                                        </div>
                                    </div>
                                    <div class="button-group ui buttons bottom two attached" data-p="47077">
                                        <div class="ui button" onclick="addtoCart(event,undefined,47077);">
                                            <i class="cart icon"></i> Thêm vào giỏ
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!-- end cards -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
