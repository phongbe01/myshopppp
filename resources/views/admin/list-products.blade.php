@extends('template.header')
@section('content')
    <div class="col-12 col-md-11 mt-2 border">
        <table id="cart" class="table table-hover">
            <thead>
            <tr>
                <th style="width:10%">STT</th>
                <th style="width:10%">Product</th>
                <th style="width:15%">Name</th>
                <th style="width:10%">Price</th>
                <th style="width:10%">More</th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $key => $product)
                    <tr>
                        <td class="">{{++$key}}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-5 hidden-xs"><img src="{{ asset('storage/' . $product->image) }}"
                                                                     alt="..."
                                                                     class="img-responsive" width="150%"/></div>

                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class=" p-7">
                                    <h4 class="nomargin">{{ $product->product_name }}</h4>
                                </div>
                            </div>
                        </td>
                        <td >{{ $product->price }}</td>
                        <td>
                            <div class="d-flex">
                                <button  class="btn  m-lg-2"><a href="{{route('products.edit',$product->id)}}">Update</a></button>
                                <form action="{{route('products.destroy',$product->id)}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <button class="btn btn-danger m-lg-2" type="submit">Delete</button>
                                </form>
                            </div>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $products->links() }}
    </div>
    @endsection
