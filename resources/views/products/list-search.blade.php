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
                                    <img class="img-fluid" src="{{asset('storage/'.$product->image)}}" alt="">
                                </div>
                                <div class="l_p_text">
                                    <ul>
                                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                        <li><a class="add_cart_btn" href="{{route('cart.addToCart',$product->id)}}">Add To Cart</a></li>
                                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                    </ul>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="#">{{$product->product_name}}</a>
                                        </h5>
                                        <h6 class="card-img-bottom ">${{number_format($product->price)}}</h6>
                                        <h6 class="card-img-bottom" style="color: red">{{$product->product_code}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            </table>
            {{ $products->appends(request()->query()) }}
{{--            <nav aria-label="Page navigation example" class="pagination_area">--}}
{{--                <ul class="pagination">--}}
{{--                    <li class="page-item"><a class="page-link" href="#">1</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">4</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">5</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">6</a></li>--}}
{{--                    <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>--}}
{{--                </ul>--}}
{{--            </nav>--}}

        </div>
    </header>
    <!--================End Related Product Area =================-->
@endsection

