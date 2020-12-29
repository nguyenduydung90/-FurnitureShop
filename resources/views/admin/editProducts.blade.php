@extends('admin.master')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header"><h2>Thêm sản phẩm</h2></div>
            <div class="card-body">
                <form action="{{route('product.update',$products->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if($errors->all())
                    <div class="alert alert-danger">Tác vụ bị lỗi</div>

                    @endif
                    <div class="form-group">
                        <label for="email"><h4>Tên sản phẩm</h4></label>
                        <input type="text" class="form-control" name="productName" placeholder="Tên sản phẩm" id="email" value="{{$products->productName}}">
                        @if($errors->first('productName'))
                        <p class="text-danger">{{ $errors->first('productName') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="detail"><h4>Loại sản phẩm</h4></label>
                        <select class="form-control"  name="categories_id">
                            <option>------Chọn danh mục-----------</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="details"><h4>Chi tiết loại sản phẩm</h4></label>
                        <select class="form-control"  name="cateDetail_id">
                            <option>------Chọn danh mục-----------</option>
                            @foreach($cateDetails as $cateDetail)
                                <option value="{{$cateDetail->id}}">{{$cateDetail->cateDetail_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price"><h4>Chiều cao</h4></label>
                        <input type="text" class="form-control" name="height" placeholder="Chiều cao" id="price" value="{{$products->height}}">
                        @if($errors->first('height'))
                    <p class="text-danger">{{ $errors->first('height') }}</p>
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="price"><h4>Chiều rộng</h4></label>
                        <input type="text" class="form-control" name="width" placeholder="Chiều rộng" id="price" value="{{$products->width}}">
                        @if($errors->first('width'))
                    <p class="text-danger">{{ $errors->first('width') }}</p>
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="price"><h4>Chiều dài</h4></label>
                        <input type="text" class="form-control" name="length" placeholder="Chiều dài" id="price" value="{{$products->length}}">
                        @if($errors->first('length'))
                    <p class="text-danger">{{ $errors->first('length') }}</p>
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="price"><h4>Chất liệu</h4></label>
                        <input type="text" class="form-control" name="material" placeholder="Chất liệu" id="price" value="{{$products->material}}">
                        @if($errors->first('material'))
                    <p class="text-danger">{{ $errors->first('material') }}</p>
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="price"><h4>Màu sắc</h4></label>
                        <input type="text" class="form-control" name="color" placeholder="Màu sắc" id="price" value="{{$products->color}}">
                        @if($errors->first('color'))
                    <p class="text-danger">{{ $errors->first('color') }}</p>
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="price"><h4>Giá mua</h4></label>
                        <input type="text" class="form-control" name="buyPrice" placeholder="Giá mua" id="price" value="{{$products->buyPrice}}">
                        @if($errors->first('buyPrice'))
                    <p class="text-danger">{{ $errors->first('buyPrice') }}</p>
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1"><h4>Ảnh sản phẩm</h4></label>
                        <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" >
                        @if($errors->first('image'))
                    <p class="text-danger">{{ $errors->first('image') }}</p>
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"><h4>Mô tả</h4></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="productDescription">{{$products->productDescription}}</textarea>
                        @if($errors->first('productDescription'))
                    <p class="text-danger">{{ $errors->first('productDescription') }}</p>
                    @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

