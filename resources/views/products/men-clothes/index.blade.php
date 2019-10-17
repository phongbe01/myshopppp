@extends('template.header')
@section('content')
    <h2 class="single_c_title">Related Product</h2>
    <header class="shop_header_area">
        <div class="container">
            <table>
                <div class="related_product_inner">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-3 col-sm-6">
                                <div class="l_product_item">
                                    <div class="l_p_img">
                                        <a href="{{route('products.show',$product->id)}}">
                                            <img class="img-fluid" src="{{asset('/'.$product->image)}}" alt="" >
                                        </a>
                                    </div>
                                    <div class="l_p_text">
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <a href="#">{{$product->product_name}}</a>
                                            </h5>
                                            <h6 class="card-img-bottom ">${{ number_format($product->price)}}</h6>
                                            <h6 class="card-img-bottom" style="color: red">{{$product->product_code}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </table>
            <nav aria-label="Page navigation example" class="pagination_area">
                <ul class="pagination">
                </ul>
            </nav>
        </div>
    </header>
    <!--================End Related Product Area =================-->
@endsection
