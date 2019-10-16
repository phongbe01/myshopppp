@extends('template.header')
@section('content')
    <div class="col-lg-12">
        <div>
            <h1>Edit Product</h1>
        </div>
        <div class="form-group">
            <form action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input name="_method" type="hidden" value="put">
                <table class="table">

                    <div class="form-group">
                        <label class="col-form-label" for="cus_name">Name</label>
                        <input class="input-group-text" type="text" name="product_name" value="{{$product->product_name}}"><br>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="product_code">Code</label>
                        <input class="input-group-text" type="text" name="product_code" value="{{$product->product_code}}">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="price">Price</label>
                        <input class="input-group-text" type="text" name="price" value="{{$product->price}}"><br>
                    </div>
                    <div class="form-group">
                        <label for="inputFileName">Chọn ảnh</label>
                        <input type="file" class="form-control-file  col-lg-3" name="image">
                    </div>
                    <button class="btn btn-primary" type="submit" class="btn btn-primary">Submit</button>
                </table>

            </form>

        </div>
    </div>
    @endsection
