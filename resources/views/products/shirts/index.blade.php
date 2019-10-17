@extends('template.header')
@section('content')
    <header class="shop_header_area">
        <div class="container">
            <table>
            <div class="related_product_inner">
                <div class="row">
                    @foreach($shirts as $shirt)
                    <div class="col-lg-3 col-sm-6">
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <a href="{{route('products.show',$shirt->id)}}">
                                    <img class="img-fluid" src="{{asset('/'.$shirt->image)}}" alt="" >
                                </a>
                            </div>
                            <div class="l_p_text">
{{--                                <ul>--}}
{{--                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>--}}
{{--                                    <li><a class="add_cart_btn" href="{{route('cart.addToCart',$shirt->id)}}">Add To Cart</a></li>--}}
{{--                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>--}}
{{--                                </ul>--}}
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="#">{{$shirt->product_name}}</a>
                                    </h5>
                                    <h6 class="card-img-bottom ">${{ number_format($shirt->price)}}</h6>
                                    <h6 class="card-img-bottom" style="color: red">{{$shirt->product_code}}</h6>
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
                        {{$shirts->links()}}
                    </ul>
                </nav>
        </div>
    </header>
    <!--================End Related Product Area =================-->
    @endsection
