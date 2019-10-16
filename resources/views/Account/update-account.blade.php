
@extends('template.header')
@section('content')
    <div class="col-lg-12">
        <div>
            <h1>Update Product</h1>
        </div>
        <div class="form-group">
            <form action="{{route('customers.update',$customer->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <input name="_method" type="hidden" value="put">
                <table class="table">

                    <div class="form-group">
                        <label class="col-form-label" for="cus_name">Name</label>
                        <input class="input-group-text" type="text" name="name" value="{{$customer->name}}"><br>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="product_code">Phone</label>
                        <input class="input-group-text" type="text" name="phone" value="{{$customer->phone}}">
                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="price">Email</label>
                        <input class="input-group-text" type="email" name="email" value="{{$customer->email}}"><br>
                    </div>
                    <button class="btn btn-primary" type="submit" class="btn btn-primary">Submit</button>
                </table>

            </form>

        </div>
    </div>
@endsection
