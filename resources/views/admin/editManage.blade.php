@extends('admin.master')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header"><h2>Cập nhật đơn hàng</h2></div>
            <div class="card-body">
                <form action="{{route('manage.update',$orders->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="email"><h5>Ngày gửi hàng :</h5></label>
                        <input type="date" class="form-control" name="shipped"  id="email">
                    </div>

                    <div class="form-group">
                        <label><h5>Trạng thái :</h5></label>
                        <select class="form-control" id="detail" name="status">
                            <option value="Đang chờ xử lý">Đang chờ xử lý</option>
                            <option value="Đã gửi">Đã gửi</option>

                        </select>
                    </div>
                    <button type="ubmit" class="btn btn-success" data-dismiss="modal">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection


