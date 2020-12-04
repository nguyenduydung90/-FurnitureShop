@extends('admin.master')
@section('content')
    <div class="card mt-5">
        <div class="card-header"><h2>Thêm danh mục sản phẩm</h2></div>
        <div class="card-body">
            <form action="{{route('cateDetail.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Loại sản phẩm:</label>
                <select class="form-control" id="detail" name="category_id">
                    <option>------Chọn danh mục-----------</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                </div>
                <div class="form-group">
                    <label for="email">Loại sản phẩm chi tiết</label>
                    <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm" id="email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
