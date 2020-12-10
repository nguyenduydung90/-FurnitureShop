<div class="ui padded grid" >
    <div class="top-header  wm-mobile column" >
        <div class="ui grid  wm-mobile container" >
            <div class="large computer only twelve wide large twelve wide computer column" >
                <nav class="wm-module wm-menu ui default  menu computer tablet mobile only wm-men-794">
{{--                    <a class="item" href="tel:0945.518.538"><i class="icon phone"></i>Hotline: 0945.518.538 | 0906.308.380</a>--}}
{{--                    <a class="item" href="javascript:if(confirm(%27http://demo01.123corp.com.vn/  \n\nThis file was not retrieved by Teleport Ultra, because it is addressed on a domain or path outside the boundaries set for its Starting Address.  \n\nDo you want to open it from the server?%27))window.location=%27http://demo01.123corp.com.vn/%27" tppabs="http://demo01.123corp.com.vn/"><i class="icon mail"></i>Email: info@123corp.vn</a>--}}
                    <div class="menu right">
                        <a class="item" href="{{route('customer.showCart')}}">Giỏ hàng</a>
                        <a class="item" href="thanh-toan.html" tppabs="http://demo01.123corp.com.vn/furniture/thanh-toan.html">Thanh toán</a>
                    </div>
                </nav>
            </div>
            <div class="four wide large four wide computer sixteen wide tablet sixteen wide mobile column middle aligned" >
                <div class="wm-module wm-search">
                    <div class="middle aligned content">
                        <form action="{{route('search.product')}}" method="post">
                        <div class="ui action fluid left icon input">
                            <i class="search icon"></i>
                                @csrf
                            <input class="txtKeyword" name="keyword" type="text" placeholder="Từ khóa"  value="">
                            <button type="submit" class="ui button" onclick="">Tìm</button>

                        </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="four wide large four wide computer sixteen wide tablet sixteen wide mobile column middle aligned" >
                <div class="middle aligned content">
                @if(session()->has('login'))
                    <p style="color: white">Xin chào: {{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-link ">Logout</button>
                    </form>
                @endif
            </div>
            </div>

        </div>
    </div>
</div>

<div class="ui padded grid" >
    <div class="header  wm-mobile column" >
        <div id='first-row' class="ui grid  wm-mobile container" >
            <div class="four wide large four wide computer sixteen wide tablet sixteen wide mobile column middle aligned" >
                <style>.wm-module.wm-image .image-76:before{z-index: 2; background: rgba(0, 0, 0, 0.51);}.wm-module.wm-image .image-76{cursor: pointer;}</style>
                <div class="wm-module wm-image logo" onclick="location.href='{{route('customer.index')}}'/*tpa=http://demo01.123corp.com.vn/furniture/index.html*/">
                    <div class="image-76"  >
                        <img class="ui image" src="{{asset('customerCss/logo1_1.png')}}" tppabs="http://demo01.123corp.com.vn/furniture/images/logo1_1.png"  alt="Logo">
                    </div>
                </div>
            </div>
            <div class="ten wide large ten wide computer sixteen wide tablet sixteen wide mobile column middle aligned" >
                <nav class="wm-module wm-menu ui default medium fluid borderless menu nav-main computer only wm-men-552">
                    <a class="item" href="{{route('customer.index')}}" tppabs="http://demo01.123corp.com.vn/furniture/index.html">Trang chủ</a>
                    <a class="item" href="gioi-thieu.html" tppabs="http://demo01.123corp.com.vn/furniture/gioi-thieu.html">Giới thiệu</a>
                    <div class="ui simple dropdown autooff item" >
                        <a href="{{route('customer.showViewProduct')}}" tppabs="http://demo01.123corp.com.vn/furniture/san-pham.html">Sản phẩm</a><i class="dropdown icon" ></i>
                        <div class="menu" >
                            <div class="ui simple dropdown autooff item" >
                                <a  class="item"  href="{{route('search.searchBySofa')}}"  >SOFA</a>
                                <div class="menu" >
                                    <a class="item" href="{{route('search.searchBySofaOne')}}" >SOFA ĐƠN</a>
                                    <a class="item" href="{{route('search.searchBySofaDouble')}}" >SOFA 2 CHỖ</a>
                                    <a class="item" href="{{route('search.sofaThreeSeats')}}" >SOFA 3 CHỖ</a>
                                    <a class="item" href="{{route('search.sofaFourSeats')}}" >SOFA 4 CHỖ</a>
                                    <a class="item" href="{{route('search.sofaCorner')}}" >SOFA GÓC</a>
                                </div>

                            </div>


                            <div class="ui simple dropdown autooff item" >
                                <a class="item" href="{{route('search.category')}}" >BÀN</a>
                                <div class="menu" >
                                    <a class="item" href="{{route('search.dinnerTable')}}" >BÀN ĂN</a>
                                    <a class="item" href="{{route('search.cafeTable')}}" >BÀN CAFE/BÀN BÊN</a>
                                    <a class="item" href="{{route('search.desk')}}" >BÀN LÀM VIỆC</a>
                                </div>
                            </div>

                            <div class="ui simple dropdown autooff item" >
                                <a class="item" href="{{route('search.searchByChair')}}" >GHẾ</a>
                                <div class="menu" >
                                    <a class="item" href="{{route('search.relaxingChair')}}" >GHẾ THƯ GIÃN</a>
                                    <a class="item" href="{{route('search.diningChair')}}" >GHẾ ĂN</a>
                                    <a class="item" href="{{route('search.chair')}}" >GHẾ LÀM VIỆC</a>
                                    <a class="item" href="{{route('search.stool')}}" >GHẾ ĐÔN</a>
                                    <a class="item" href="{{route('search.barChair')}}" >GHẾ BAR</a>
                                </div>
                            </div>

                            <div class="ui simple dropdown autooff item" >
                                <a class="item" href="{{route('search.searchByCabinets')}}" >TỦ</a>
                                <div class="menu" >
                                    <a class="item" href="{{route('search.TVcabinet')}}" >TỦ TIVI</a>
                                    <a class="item" href="{{route('search.sideCabinet')}}" >TỦ BÊN</a>
                                    <a class="item" href="{{route('search.roomCabinet')}}" >TỦ ĐẦU GIƯỜNG</a>
                                </div>
                            </div>

                            <div class="ui simple dropdown autooff item" >
                                <a class="item" href="{{route('search.searchByBed')}}" >GIƯỜNG</a>
                            </div>
                            </form>
                        </div>
                    </div>
                    <a class="item" href="tin-tuc.html" >Hình ảnh</a>
                    <a class="item" href="tin-tuc.html" >Tin tức</a>
                    <a class="item" href="lien-he.html" >Liên hệ</a>
                    <div class="menu right"></div>
                </nav>
                <nav class="wm-module wm-menu ui responsive  fluid borderless menu nav-mobile tablet mobile only wm-men-264">
                    <div class="menu-header">
                        <a href="#mmenu-tgle-wm-men-264" class="toggle-menu ui basic button" data-mn-title="Menu">
                            <i class="icon align justify"></i> Menu</a>
                    </div>
                    <div class="data-menu-mobile" data-target="mmenu-tgle-wm-men-264" style="display:none">
                        <li><a href="index.html" tppabs="http://demo01.123corp.com.vn/furniture/index.html">Trang chủ</a></li>
                        <li><a href="gioi-thieu.html" tppabs="http://demo01.123corp.com.vn/furniture/gioi-thieu.html">Giới thiệu</a></li>
                        <li><a href="san-pham.html" tppabs="http://demo01.123corp.com.vn/furniture/san-pham.html">Sản phẩm</a></li>
                        <li><a href="tin-tuc.html" tppabs="http://demo01.123corp.com.vn/furniture/tin-tuc.html">Hình ảnh</a></li>
                        <li><a href="tin-tuc.html" tppabs="http://demo01.123corp.com.vn/furniture/tin-tuc.html">Tin tức</a></li>
                        <li><a href="lien-he.html" tppabs="http://demo01.123corp.com.vn/furniture/lien-he.html">Liên hệ</a></li>
                    </div>
                    <script>
                        if(typeof mb_menus === "undefined") var mb_menus = {};
                        mb_menus["mmenu-tgle-wm-men-264"] = "left";
                    </script>
                </nav>
            </div>
            <div class="large computer only two wide large two wide computer column column-r-h middle aligned" >
                <div class="wm-module wm-cart">
                    <button class="fluid ui secondary icon button dropdown">
                        <div style="text-align: center">
                            <a href="{{route('cart.index')}}" tppabs="http://demo01.123corp.com.vn/furniture/gio-hang.html" style="color: #fff"><i class="icon cart"></i> {{\Illuminate\Support\Facades\Session::has('cart')?\Illuminate\Support\Facades\Session::get('cart')->totalQty:null}}&nbsp;sản phẩm </a>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
