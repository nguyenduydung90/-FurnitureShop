@extends('customer.masterCustomer')
@section('content')
    <div class="ui padded grid">
        <div class="bread  wm-mobile column">
            <div class="ui grid  wm-mobile container">
                <div class="column">
                    <div class="wm-module wm-breadcrumb">
                        <div class="ui segment">
                            <div class="ui large breadcrumb">
                                <a href="index.html" tppabs="http://demo01.123corp.com.vn/furniture/index.html" class="section"><i class="icon home"></i></a>
                                <i class="right angle icon divider"></i>
                                <div class="active section">Giỏ hàng</div>
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
                    <div class="wm-widget wm-cart">
                        <h1 class="ui header">Giỏ hàng của bạn</h1>
                        <div class="cart-content" style="overflow-x:auto;">
                            <table class="ui celled unstackable table">
                                <thead>
                                <tr>
                                    <th class="two wide center aligned">Ảnh</th>
                                    <th class="four wide center aligned">Sản phẩm</th>
                                    <th class="three wide center aligned">Số lượng</th>
                                    <th class="three center aligned">Giá</th>
                                    <th class="three wide center aligned">Thành tiền</th>
                                    <th class="one wide center aligned">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr><td>
                                        <a href="san-pham-detail.html" tppabs="http://demo01.123corp.com.vn/furniture/san-pham-detail.html"><img class="ui tiny centered image" src="recent-products-2.jpg" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-2.jpg" alt="image"></a></td>
                                    <td><strong class=""><a class="p-name" href="javascript:if(confirm(%27http://demo01.123corp.com.vn/p/album-woo-3.html  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo01.123corp.com.vn/p/album-woo-3.html%27" tppabs="http://demo01.123corp.com.vn/p/album-woo-3.html">ALBUM WOO # 3</a></strong></td>
                                    <td>
                                        <div class="ui fluid action input rfresh-control" >
                                            <input class="txt-qty" type="number" min="1" value="1"/>
                                            <button class="ui icon button btn-rfresh-qty" rel-p="19367">
                                                <i class="refresh icon"></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="right aligned"> 499,000 ¥</td>
                                    <td class="right aligned"><strong> 499,000 ¥</strong></td>
                                    <td class="center aligned">
                                        <button title="Xoá" class="ui icon red button btn-trash-cart" rel-p="19367">
                                            <i class="icon trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th colspan="4" class="right aligned"><strong>Tổng cộng :</strong></th>
                                    <th class="right aligned error"><strong> 499,000 ¥</strong> <sup>đ</sup></th>
                                    <th>&nbsp;</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div><br>
                        <button class="ui left floated icon green button">
                            <a href="javascript:void(0);" onclick="history.back();" style="color:#fff"><i class="icon long arrow left"></i> Tiếp tục mua hàng</a></button>
                        <button class="ui right floated blue icon button"><a href="thanh-toan.html" tppabs="http://demo01.123corp.com.vn/furniture/thanh-toan.html" style="color:#fff"><i class="icon share"></i> Thanh toán</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
