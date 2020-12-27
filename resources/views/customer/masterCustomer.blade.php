<!DOCTYPE html>
<html lang="vi-VN">
<head>
    <base href="{{asset('/customerCss/ ')}}">
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="fb:app_id" content="1754319418117348" />
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{asset('customerCss/semantic.min.css')}}" tppabs="http://furniture.weba.vn/public/plugins/Semantic-UI/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('customerCss/style.css')}}" tppabs="http://demo01.123corp.com.vn/furniture/css/style.css">
    <style> body{ background-color: #ffffff }</style>
    <link rel="stylesheet" href="{{asset('customerCss/jquery.mmenu.all.css')}}" tppabs="http://demo01.123corp.com.vn/furniture/css/jquery.mmenu.all.css">
    <link rel="stylesheet" href="{{asset('customerCss/hover-min.css')}}" tppabs="http://demo01.123corp.com.vn/furniture/css/hover-min.css">
    <link rel="stylesheet" href="{{asset('customerCss/animate.css')}}" tppabs="http://demo01.123corp.com.vn/furniture/css/animate.css">
    <link rel="stylesheet" href="{{asset('customerCss/sweetalert.min.css')}}" tppabs="http://demo01.123corp.com.vn/furniture/css/sweetalert.min.css">
    <link rel="stylesheet" href="{{asset('customerCss/bootstrap-notify.min.css')}}" tppabs="http://demo01.123corp.com.vn/furniture/css/bootstrap-notify.min.css">
    <link rel="stylesheet" href="{{asset('customerCss/owl.carousel.css')}}" tppabs="http://demo01.123corp.com.vn/furniture/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('customerCss/owl.theme.default.min.css')}}" tppabs="http://demo01.123corp.com.vn/furniture/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('customerCss/menu.css')}}" tppabs="http://demo01.123corp.com.vn/furniture/css/menu.css">
    <link rel="stylesheet" href="{{asset('customerCss/image.css')}}" tppabs="http://demo01.123corp.com.vn/furniture/css/image.css">
    <link rel="stylesheet" href="{{asset('customerCss/slider.css')}}" tppabs="http://demo01.123corp.com.vn/furniture/css/slider.css">
    <link rel="stylesheet" href="{{asset('customerCss/style1.css')}}" tppabs="http://demo01.123corp.com.vn/furniture/css/style1.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    {{--  <script src="{{ asset('js/my.js') }}"></script>  --}}

</head>
<body class="index ">
<div class="pusher">
    @include('customer.core.header')

   @yield('content')
   @include('customer.core.footer')
</div>

<script src="{{asset('customerCss/jquery.1.11.2.min.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/jquery.1.11.2.min.js"></script>
<div id="back-to-top" style="position: fixed; width: 45px; height: 45px; border-radius: 50%; line-height: 45px; background: #000; color: #fff; bottom: 50px; right: 40px; text-align: center; cursor: pointer;display: none;" title="quay về đầu trang" data-inverted data-position="top center"><i style="margin: 0" class="icon angle up"></i></div>
<script>
    $(window).scroll(function() {
        var win_top = $(window).scrollTop() || 0,
            doc_height  = $(document).height(),
            win_height  = $(window).height(),
            show_height = '';
        if((win_top + win_height) === doc_height || (show_height && win_top >= show_height)) $("#back-to-top").fadeIn();
        else $("#back-to-top").fadeOut();
    });
    $("#back-to-top").on("click",function(){$("html, body").animate({ scrollTop: 0 }, "slow");});
</script>
<div id="hotline-button" style="position: fixed; bottom: 0px; left: 0px;z-index:99">
    <a onclick="goog_report_conversion('tel:')" href="tel:"><img src="phone.gif" tppabs="http://demo01.123corp.com.vn/furniture/images/phone.gif" alt=""></a>
</div>
<div id="modal-small-custom" class="ui small modal"></div>
<script src="{{asset('customerCss/semantic.min.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/semantic.min.js"></script>
<script src="{{asset('customerCss/app.min.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/app.min.js"></script>
<script type="text/javascript" src="{{asset('customerCss/jquery.mmenu.all.min.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/jquery.mmenu.all.min.js"></script>
<script type="text/javascript" src="{{asset('customerCss/sweetalert.min.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/sweetalert.min.js"></script>
<script type="text/javascript" src="{{asset('customerCss/bootstrap-notify.min.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/bootstrap-notify.min.js"></script>
<script type="text/javascript" src="{{asset('customerCss/owl.carousel.min.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{asset('customerCss/fb.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/fb.js"></script>
<script type="text/javascript" src="{{asset('customerCss/platform.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/platform.js"></script>
<script type="text/javascript" src="{{asset('customerCss/menu.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/menu.js"></script>
<script type="text/javascript" src="{{asset('customerCss/image.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/image.js"></script>
<script type="text/javascript" src="{{asset('customerCss/slider.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/slider.js"></script>
<script type="text/javascript" src="{{asset('customerCss/product.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/product.js"></script>
<script type="text/javascript" src="{{asset('customerCss/post.js')}}" tppabs="http://demo01.123corp.com.vn/furniture/js/post.js"></script>

<script>
    addthis.layers({
        theme : 'transparent',
        responsive : {
            maxWidth : '979px',
            minWidth : '0px'
        },
        share : ''
    });
</script>
</body>
</html>
