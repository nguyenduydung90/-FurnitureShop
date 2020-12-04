@extends('admin.master')
@section('content')
    <div class="card mt-5">
        <div class="card-header"><h2>Sửa mục sản phẩm</h2></div>
        <div class="card-body">
            <form action="{{route('categories.update',$categori->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Loại sản phẩm:</label>
                    <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm" id="email" value="{{$categori->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection

