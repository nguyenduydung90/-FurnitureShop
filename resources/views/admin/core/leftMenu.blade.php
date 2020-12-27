<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{route('admin.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Danh sách sản phẩm
                </a>
                <a class="nav-link" href="{{route('categories.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Danh mục sản phẩm
                </a>
                <a class="nav-link" href="{{route('cateDetail.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Danh mục sản phẩm chi tiết
                </a>
                <a class="nav-link" href="{{route('manage.showManageOrder')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Quản lý đơn hàng
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Đăng nhập bởi:</div>
            {{\Illuminate\Support\Facades\Auth::user()->name}}
        </div>
    </nav>
</div>
