@extends('customer.masterCustomer')
@section('content')

    @if (\Illuminate\Support\Facades\Session::has('success'))
        <div class="col-12 alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ \Illuminate\Support\Facades\Session::get('success') }}</strong>
        </div>

    @endif
    @if (\Illuminate\Support\Facades\Session::has('delete_error'))
        <div class="col-12 alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ \Illuminate\Support\Facades\Session::get('delete_error') }}</strong>
        </div>
    @endif
    <div class="ui padded grid">
        <div class="bread  wm-mobile column">
            <div class="ui grid  wm-mobile container">
                <div class="column">
                    <div class="wm-module wm-breadcrumb">
                        <div class="ui segment">
                            <div class="ui large breadcrumb" style="background-color: #0E566C" >
                                <a href="index.html" tppabs="http://demo01.123corp.com.vn/furniture/index.html" class="section" ><i class="icon home"></i></a>
                                <i class="right angle icon divider"></i>
                                <div class="active section" >Giỏ hàng</div>
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

                            <table class="ui celled unstackable table" id="cart">
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
                                @if(\Illuminate\Support\Facades\Session::has('cart') && $cart->totalQty > 0)
                                    @foreach($cart->items as $product)
                                <tr><td data-th="Ảnh">
                                        <a href="san-pham-detail.html" ><img class="ui tiny centered image" src="{{asset($product['item']->image)}}" tppabs="http://demo01.123corp.com.vn/furniture/images/recent-products-2.jpg" alt="image"></a></td>
                                    <td data-th="Sản phẩm"><strong class=""><a class="p-name" href="javascript:if(confirm(%27http://demo01.123corp.com.vn/p/album-woo-3.html  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo01.123corp.com.vn/p/album-woo-3.html%27" >{{$product['item']->productName}}</a></strong></td>
                                    <td data-th="Số lượng">
{{--                                        <form action="{{route('cart.updateProductIntoCart',$product['item']->id)}}" method="post">--}}
{{--                                            @csrf--}}
                                        <div class="ui fluid action input rfresh-control" >
                                            <input class="txt-qty update-product-cart" id='txt' data-id="{{ $product['item']->id }}" type="number" name="qty" min="0" value="{{$product['qty']}}"/>
{{--                                            <button type="submit" class="ui icon button btn-rfresh-qty" rel-p="19367">--}}
{{--                                                <i class="refresh icon"></i>--}}
{{--                                            </button>--}}
                                        </div>
{{--                                        </form>--}}
                                    </td>
                                    <td data-th="Giá" class="right aligned" style="color: red">{{number_format($product['item']->buyPrice)}} <sup>vnđ</sup></td>
                                    <td  data-th="Thành tiền" class="right aligned"  id="product-subtotal-{{$product['item']->id}}"><strong>{{number_format($product['price'])}} <sup>vnđ</sup></strong></td>
                                    <td data-th=""class="center aligned">
                                        <a title="Xoá" class="ui icon red button btn-trash-cart" rel-p="19367" onclick="return confirm('Bạn có chắc là muốn xóa không?')"
                                        href="{{route('cart.removeProductIntoCart',$product['item']->id)}}">
                                            <i class="icon trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                <tr>
                                    <th colspan="4" class="right aligned"><strong>Tổng cộng :</strong></th>
                                    <th class="right aligned error total-price-cart"><strong>{{number_format($cart->totalPrice)}}</strong> <sup>vnđ</sup></th>
                                    <th>&nbsp;</th>
                                </tr>
                                </tfoot>
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center"><p style="color: red">{{ "Bạn chưa mua sản phẩm nào" }}</p></td>
                                    </tr>
                                @endif
                            </table>

                        </div><br>
                        <button class="ui left floated icon green button">
                            <a href="javascript:void(0);" onclick="history.back();" style="color:#fff"><i class="icon long arrow left"></i> Tiếp tục mua hàng</a></button>
{{--                        <button class="ui right floated blue icon button"><a href="{{route('cart.updateProductIntoCart')}}"  style="color:#fff"><i class="icon fa-refresh"></i> Cập nhật giỏ hàng</a></button>--}}
                        <button class="ui right floated blue icon button"><a href="{{route('checkout')}}" tppabs="http://demo01.123corp.com.vn/furniture/thanh-toan.html" style="color:#fff"><i class="icon share"></i> Thanh toán</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    $(document).ready(function () {
        $('.update-product-cart').change(function () {
            var qtyNew = $(this).val();
            var idProduct = $(this).attr('data-id');
            var origin = location.origin;
            console.log(origin +'/cart/update-to-cart/' + idProduct)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url : origin +'/cart/update-to-cart/' + idProduct,
                method: 'POST',
                data: {
                    qty: qtyNew,
                },
                dataType: 'json',
                success: function (result) {
                     let data = result.productUpdate;

                     $('#product-subtotal-' + idProduct).html('<strong>'+ data.price +' <sup>vnđ</sup>'+'</strong>' )
                     $('.total-price-cart').html('<strong>' + result.totalPriceCart +' <sup>vnđ</sup>'+'</strong>')
                }
            })

        })
    })

</script>

@endsection
