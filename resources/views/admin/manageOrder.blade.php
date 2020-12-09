@extends('admin.master')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Danh sách sản phẩm</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <a href="" class="btn btn-success">Thêm mới sản phẩm</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Danh mục</th>
                                <th>Danh mục chi tiết</th>
                                <th>Chiều cao (cm)</th>
                                <th>Chiều rộng (cm)</th>
                                <th>Chiều dài (cm)</th>
                                <th>Chất liệu</th>
                                <th>Màu sắc</th>
                                <th>Giá mua</th>
                                <th>Hình ảnh</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>

{{--                                    <td>--}}
{{--                                        <a href="{{route('product.edit',$product->id)}}" class="btn btn-success mb-1">Sửa</a>--}}
{{--                                        <a href="{{route('product.destroy',$product->id)}}" class="btn btn-danger ">Xóa</a>--}}
{{--                                    </td>--}}


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
