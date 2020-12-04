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
                    <form name="frm_checkout" action="" method="post" class="frm_checkout ui form ">
                        <div class="ui grid stackable three column grid">
                            <div class="column">
                                <h2 class="ui dividing header">Thông tin giao hàng</h2>
                                <div class="field">
                                    <label>Họ và tên</label>
                                    <div class="field">
                                        <input type="text" id="fullname" name="fullname" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Số điện thoại</label>
                                    <div class="field">
                                        <input type="text" id="fullname" name="fullname" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Email</label>
                                    <div class="field">
                                        <input type="text" id="fullname" name="fullname" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Địa chỉ</label>
                                    <div class="field">
                                        <input type="text" id="fullname" name="fullname" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Phường xã</label>
                                    <div class="field">
                                        <input type="text" id="fullname" name="fullname" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Tỉnh/thành phố</label>
                                    <div class="ui dropdown search selection">
                                        <select id="selProvince" name="selProvince">
                                            <option value="">-- Chọn tỉnh/thành phố --</option>
                                            <option value="1">Hồ Chí Minh</option>
                                            <option value="2">Hà Nội</option>
                                            <option value="3">Bình Dương</option>
                                            <option value="4">Đà Nẵng</option>
                                            <option value="5">Hải Phòng</option>
                                            <option value="6">Long An</option>
                                        </select><i class="dropdown icon"></i>
                                        <input class="search" autocomplete="off" tabindex="0">
                                        <div class="default text">-- Chọn tỉnh/thành phố --</div>
                                        <div class="menu" tabindex="-1">
                                            <div class="item" data-value="1">Hồ Chí Minh</div>
                                            <div class="item" data-value="2">Hà Nội</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Quận/huyện</label>
                                    <div class="search selection ui dropdown">
                                        <select id="selDistrict" name="selDistrict" data-selected=""><option value="">-- Chọn quận/huyện --</option></select>
                                        <i class="dropdown icon"></i>
                                        <input class="search" autocomplete="off" tabindex="0">
                                        <div class="default text">-- Chọn quận/huyện --</div>
                                        <div class="menu" tabindex="-1"></div>
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Ghi chú</label>
                                    <div class="field"><textarea rows="2" name="note"></textarea></div>
                                </div>
                            </div>
                            <div class="column">
                                <h2 class="ui dividing header">Vận chuyển</h2>
                                <div class="grouped fields">
                                    <div class="field">
                                        <label>Chọn phương thức vận chuyển</label>
                                        <div class="search selection ui dropdown">
                                            <select id="selShippingType" name="selShippingType"><option value="">-- Chọn loại vận chuyển --</option></select>
                                            <i class="dropdown icon"></i>
                                            <input class="search" autocomplete="off" tabindex="0">
                                            <div class="text default">-- Chọn loại vận chuyển --</div>
                                            <div class="menu" tabindex="-1"></div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="ui dividing header">Thanh toán</h2>
                                <div class="grouped fields">
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" value="MANUALLY_DEF_1" name="payment_method" checked="" tabindex="0" class="hidden">
                                            <label>Thanh toán khi giao hàng (COD)</label>
                                        </div>
                                        <div class="ui message info" style="margin-left: 25px;">
                                            <div>Thông tin mô tả thanh toán khi giao hàng COD</div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <div class="ui radio checkbox">
                                            <input type="radio" value="MANUALLY_DEF_2" name="payment_method" tabindex="0" class="hidden"><label>Chuyển khoản qua ngân hàng</label>
                                        </div>
                                        <div class="ui message info" style="margin-left: 25px;">
                                            <div>Thông tin mô tả khi chuyển khoản qua ngân hàng</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <h2 class="ui dividing header">Đơn hàng</h2>
                                <div class="ui attached segment wrap-order-content">
                                    <div class="ui grid column">
                                        <div class="ten wide column">Ghế cao cấp<div style="margin-left: 15px"></div></div>
                                        <div class="six wide column right aligned"> 499,000 ¥</div>
                                        <div class="sixteen wide column" style="padding-top: 0; padding-bottom: 0">
                                            <div class="border-bottom-dashed"></div>
                                        </div>
                                    </div>
                                    <div class="ui grid column">
                                        <div class="ten wide column"><strong>Tạm tính</strong></div>
                                        <div id="cart_calculated" data-weigh="0" data-calculated="499000" class="six wide column right aligned"><strong> 499,000 ¥</strong></div>
                                        <div class="sixteen wide column" style="padding-top: 0; padding-bottom: 0">
                                            <div class="border-bottom-solid"></div>
                                        </div>
                                    </div>
                                    <div class="ui grid column">
                                        <div class="ten wide column">Phí vận chuyển</div>
                                        <div class="six wide column right aligned lbl-shipfee" data-shipping-fee="0"> 0 ¥</div>
                                        <div class="sixteen wide column" style="padding-top: 0; padding-bottom: 0">
                                            <div class="border-bottom-solid"></div>
                                        </div>
                                    </div>
                                    <div style="padding-top: 30px">
                                        <a id="toggleInputCoupon" href="javascript:;" style="display: block;">Sử dụng mã giảm giá <i class="angle double right icon"></i></a>

                                        <div class="wrap-form-coupon" style="display: block;">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Nhập mã giảm giá">
                                                <div class="coupon-error">Mã khuyến mãi này không khả dụng</div>
                                            </div>
                                            <div class="ui grid column">
                                                <div class="ten wide column"></div>
                                                <div class="six wide column right aligned">
                                                    <button id="btnUseCoupon" type="button" class="ui primary button">Sử dụng</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap-discount-coupon" data-discount-coupon="0" style="display: none;">
                                            <a class="remove" href="javascript:;">Xóa</a>
                                            <span>Mã giảm giá giảm</span>
                                            <span class="discount right aligned"><span>0</span></span>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="ui bottom attached header" style="background: #f0f0f0">
                                    <div class="ui grid column">
                                        <div class="eight wide column">Tổng cộng</div>
                                        <div id="cart_total_money" class="eight wide column right aligned" data-total-money="499000"><span> 499,000 ¥</span></div>
                                    </div>
                                </h3>
                                <div><input type="submit" name="btnCheckOut" class="ui button" value="Đặt hàng"></div>
                            </div>
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
