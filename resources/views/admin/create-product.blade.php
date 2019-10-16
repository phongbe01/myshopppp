@extends('template.header')
@section('content')
    <table class="table table-bordered border:1">
        <div class="container">
            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div>
                    <label>Tên sản phẩm</label>
                    <input  type="text" class="form-control col-lg-3 " name="product_name" value="{{old('product_name')}}">
                    @if($errors->has('product_name'))
                        <span class="text-danger">{{$errors->first('product_name')}}</span>
                    @endif
                </div>
                <div>
                    <label>Ma San Pham</label>
                    <input  type="text" class="form-control col-lg-3 " name="product_code" value="{{old('prodct_code')}}">
                    @if($errors->has('product_code'))
                        <span class="text-danger">{{$errors->first('product_code')}}</span>
                    @endif
                </div>
                <div>
                    <label  for="price">Giá</label>
                    <input  type="text" class="form-control col-lg-3 " name="price" value="{{old('price')}}">
                    @if($errors->has('price'))
                        <span class="text-danger">{{$errors->first('price')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="inputFileName">Chọn ảnh</label>
                    <input type="file" class="form-control-file  col-lg-3" name="image">
                </div>
                <button class="btn btn-primary" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </table>


@endsection
