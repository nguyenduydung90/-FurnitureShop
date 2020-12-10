@extends('admin.master')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"> Quản lý đơn hàng</h1>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Đơn hàng</th>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Khách hàng</th>
                                <th>Điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Tổng tiền (VNĐ)</th>
                                <th>Ngày gửi hàng</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                                    @foreach($order as $key=>$value)
                                        <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->productName}}</td>
                                        <td>{{$value->quanttityOrder}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->phone}}</td>
                                        <td>{{$value->address}}</td>
                                        <td>{{number_format($value->quanttityOrder * $value->price)}}</td>
                                        <td>{{$value->shippedDate}}</td>
                                        <td>{{$value->status}}</td>
                                    <td>
                                        <a href="{{route('manage.edit',$value->id)}}" class="btn btn-success mb-1" >Cập nhật</a>
                                    </td>
                                        </tr>
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
{{--    <!-- The Modal -->--}}
{{--    <div class="modal" id="myModal">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}

{{--                <!-- Modal Header -->--}}
{{--                <div class="modal-header">--}}
{{--                    <h4 class="modal-title">Cập nhật đơn hàng</h4>--}}
{{--                    <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                </div>--}}

{{--                <!-- Modal body -->--}}
{{--                <div class="modal-body">--}}
{{--                    <form action="{{route('manage.update',$value->id)}}" method="post" class="form-check">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label for="email"><h5>Ngày gửi hàng :</h5></label>--}}
{{--                            <input type="date" class="form-control" name="shipped"  id="email">--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label><h5>Trạng thái :</h5></label>--}}
{{--                            <select class="form-control" id="detail" name="status">--}}
{{--                                <option value="Đang chờ xử lý">Đang chờ xử lý</option>--}}
{{--                                <option value="Đã gửi">Đã gửi</option>--}}

{{--                            </select>--}}
{{--                        </div>--}}
{{--                    <button type="submit" class="btn btn-success" data-dismiss="modal">Cập nhật</button>--}}

{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
