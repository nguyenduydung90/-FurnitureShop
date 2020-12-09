@extends('customer.masterCustomer')
@section('content')
    <div class="ui padded grid">
        <div class="bread  wm-mobile column">
            <div class="ui grid  wm-mobile container">
                <div class="column">
                    <div class="wm-module wm-breadcrumb">
                        <div class="ui segment">
                            <div class="ui large breadcrumb" style="background-color: #0b2e13">
                                <a href="index.html" ><i class="icon home"></i></a>
                                <i class="right angle icon divider"></i>
                                <div class="active section">Thanh toán</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ui padded grid">
        <div class=" wm-mobile column">
            <div class="ui grid  wm-mobile container">
                <div class="column">
                    <form name="frm_checkout" action="{{route('checkout.checkout')}}" method="post" class="frm_checkout ui form ">
                        @csrf
                        <div class="ui grid stackable three column grid">
                            <div class="column">
                                <h2 class="ui dividing header">Thông tin giao hàng</h2>
                                <div class="field">
                                    <label>Họ và tên</label>
                                    <div class="field">
                                        <input type="text" id="" name="name" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Số điện thoại</label>
                                    <div class="field">
                                        <input type="text" id="" name="phone" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Email</label>
                                    <div class="field">
                                        <input type="text" id="" name="email" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Địa chỉ</label>
                                    <div class="field">
                                        <input type="text" id="" name="address" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Ghi chú</label>
                                    <div class="field"><textarea rows="2" name="note"></textarea></div>
                                </div>
                            </div>
                            <div class="column">

                            </div>
                            <div class="column">
                                <h2 class="ui dividing header">Đơn hàng</h2>
                                <div class="ui attached segment wrap-order-content">
                                    @if(\Illuminate\Support\Facades\Session::has('cart'))
                                        @foreach($cart->items as $product)
                                    <div class="ui grid column">
                                        <div class="ten wide column">{{$product['item']->productName}}<div style="margin-left: 15px"></div></div>
                                        <div class="six wide column right aligned"> {{number_format($product['price'])}} VNĐ</div>
                                        <div class="sixteen wide column" style="padding-top: 0; padding-bottom: 0">
                                            <div class="border-bottom-dashed"></div>
                                        </div>
                                    </div>
                                        @endforeach
                                    <div class="ui grid column">
                                        <div class="ten wide column"><strong>Tạm tính</strong></div>
                                        <div id="cart_calculated" data-weigh="0" data-calculated="499000" class="six wide column right aligned"><strong>{{number_format($cart->totalPrice)}} VNĐ</strong></div>
                                        <div class="sixteen wide column" style="padding-top: 0; padding-bottom: 0">
                                            <div class="border-bottom-solid"></div>
                                        </div>
                                    </div>
                                    <div class="ui grid column">
                                        <div class="ten wide column">Phí vận chuyển</div>
                                        <div class="six wide column right aligned lbl-shipfee" data-shipping-fee="0">Miễn phí</div>
                                        <div class="sixteen wide column" style="padding-top: 0; padding-bottom: 0">
                                            <div class="border-bottom-solid"></div>
                                        </div>
                                    </div>

                                </div>
                                <h3 class="ui bottom attached header" style="background: #f0f0f0">
                                    <div class="ui grid column">
                                        <div class="eight wide column">Tổng cộng</div>
                                        <div id="cart_total_money" class="eight wide column right aligned" data-total-money="499000"><span> {{number_format($cart->totalPrice)}} VNĐ</span></div>
                                    </div>
                                </h3>

                                <div><input type="submit" name="btnCheckOut" class="ui button" value="Đặt hàng"></div>
                            </div>
                            @endif
                        </div>
                    </form>
                    <style type="text/css">
                        .ui.radio.checkbox+.ui.message{
                            display: none;
                        }
                        .ui.radio.checkbox.checked+.ui.message{
                            display: block;
                        }

                        i.VISA, i.MASTE, i.AMREX, i.JCB, i.VCB, i.TCB, i.MB, i.VIB, i.ICB, i.EXB, i.ACB, i.HDB, i.MSB, i.NVB, i.DAB, i.SHB, i.OJB, i.SEA, i.TPB, i.PGB, i.BIDV, i.AGB, i.SCB, i.VPB, i.VAB, i.GPB, i.SGB,i.NAB,i.BAB
                        { width:80px; height:30px; display:block; background:url(bank_logo-1.png)/*tpa=https://www.nganluong.vn/webskins/skins/nganluong/checkout/version3/images/bank_logo.png*/ no-repeat;}
                        i.MASTE { background-position:0px -31px}
                        i.AMREX { background-position:0px -62px}
                        i.JCB { background-position:0px -93px;}
                        i.VCB { background-position:0px -124px;}
                        i.TCB { background-position:0px -155px;}
                        i.MB { background-position:0px -186px;}
                        i.VIB { background-position:0px -217px;}
                        i.ICB { background-position:0px -248px;}
                        i.EXB { background-position:0px -279px;}
                        i.ACB { background-position:0px -310px;}
                        i.HDB { background-position:0px -341px;}
                        i.MSB { background-position:0px -372px;}
                        i.NVB { background-position:0px -403px;}
                        i.DAB { background-position:0px -434px;}
                        i.SHB { background-position:0px -465px;}
                        i.OJB { background-position:0px -496px;}
                        i.SEA { background-position:0px -527px;}
                        i.TPB { background-position:0px -558px;}
                        i.PGB { background-position:0px -589px;}
                        i.BIDV { background-position:0px -620px;}
                        i.AGB { background-position:0px -651px;}
                        i.SCB { background-position:0px -682px;}
                        i.VPB { background-position:0px -713px;}
                        i.VAB { background-position:0px -744px;}
                        i.GPB { background-position:0px -775px;}
                        i.SGB { background-position:0px -806px;}
                        i.NAB { background-position:0px -837px;}
                        i.BAB { background-position:0px -868px;}
                    </style>
                </div>
            </div>
        </div>
    </div>
@endsection
