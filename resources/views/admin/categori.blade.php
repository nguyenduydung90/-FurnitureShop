@extends('admin.master')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"></h1>
            <div class="card mb-4">
                <div class="card-header">
                    <a href="{{route('categories.create')}}" class="btn btn-success">Thêm mới danh mục</a>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Loại sản phẩm</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $key=>$categori)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$categori->name}}</td>
                                    <td>
                                        <a href="{{route('categories.edit',$categori->id)}}" class="btn btn-primary">Sửa</a>
                                        <a href="{{route('categories.delete',$categori->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không')" class="btn btn-danger">Xóa</a>
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
@endsection
