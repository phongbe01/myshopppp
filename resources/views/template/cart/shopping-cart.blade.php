@extends('template.header')
@section('content')
        <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>shopping cart</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="shopping-cart.blade.php">Shopping cart</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        @if (Session::has('success'))
            <div class="col-12 alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('success') }}</strong>
            </div>

        @endif

        @if (Session::has('delete_error'))
            <div class="col-12 alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('delete_error') }}</strong>
            </div>
        @endif
        <!--================Shopping Cart Area =================-->
        @if(Session::has('cart'))
        <section class="shopping_cart_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart_product_list">
                            <h3 class="cart_single_title">Discount Cupon</h3>
                            <div class="table-responsive-md">
                                @if(count($cart->items) == 0)
                                    <tr>
                                        <td colspan="5" class="text-center"><p>{{ "Bạn chưa mua sản phẩm nào" }}</p></td>
                                    </tr>
                                @else
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">product</th>
                                            <th scope="col">price</th>
                                            <th scope="col">quantity</th>
                                            <th scope="col">total</th>
                                            <th scope="col">more</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cart->items as $product)
                                            <tr>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="{{asset('storage/' . $product['item']->image)}}" alt="" width="50px">
                                                    </div>
                                                    <div class="media-body">
                                                        <a href="{{route('products.show',$product['item']->id)}}">
                                                            <h4 class="nomargin">{{ $product['item']->product_name }}</h4>
                                                        </a>

                                                    </div>
                                                </div>
                                            </td>
                                            <td data-th="Price"><p>{{ '$' . number_format($product['item']->price) }}</p></td>
                                                <td data-th="quantity">
{{--                                                    <input type="number" class="form-control text-center" min="1" name="qty" value="{{ $product['qty'] }}">--}}
                                                    <form action="{{ route('cart.updateIntoCart',$product['item']->id) }}" method="post">
                                                        @csrf
                                                        <button type="submit" onclick="return decreaseQty({{$product['item']->id}})">-</button>
                                                        <span
                                                            class="input-group mb-3"
                                                            style="display: none;"></span>
                                                        <input id="{{$product['item']->id.'qty'}}" type="tel" name="qty" value="{{ $product['qty'] }}"
                                                               min="1" max="100" >
                                                        <button type="submit" onclick="return increaseQty({{$product['item']->id}})">+</button>
                                                    </form>
                                                </td>
                                                <td data-th="Subtotal" class="text-center">{{ number_format( $product['price']) }}</td>
                                                <td><a href="{{route('cart.removeIntoCart',$product['item']->id)}}">Remove</a></td>

{{--                                            <form action="{{route('cart.updateIntoCart',$product['item']->id)}}" method="post">--}}
{{--                                                @csrf--}}
{{--                                                <td data-th="quantity">--}}
{{--                                                    <input type="number" class="form-control text-center" min="1" name="qty" value="{{ $product['qty'] }}">--}}
{{--                                                </td>--}}
{{--                                                <td data-th="Subtotal" class="text-center">{{ number_format( $product['price']) }}</td>--}}

{{--                                                <td class="actions" data-th="">--}}
{{--                                                    <div class="d-flex">--}}
{{--                                                        <button class="btn btn-info btn-sm" type="submit">Update</button>--}}
{{--                                                        <a class="btn btn-danger btn-sm" href="{{route('cart.removeIntoCart',$product['item']->id)}}">Remove</a>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </form>--}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="total_amount_area">
                            <div class="cart_totals">
                                <h3 class="cart_single_title">Discount Cupon</h3>
                                <div class="cart_total_inner">
                                    <ul>
                                        <li><a href="#"><span>Cart Subtotal</span> ${{ number_format($cart->totalPrice) }}</a></li>
                                        <li><a href="#"><span>Shipping</span> Free</a></li>
                                        <li><a href="#"><span>Totals</span>  ${{ number_format($cart->totalPrice) }}</a></li>
                                    </ul>
                                </div>
                                @if($cart->totalQty != 0)
                                    <button type="submit" class="add_cart_btn "  ><a href="{{route('bills.create')}}">Check out</a></button>

                                @endif
                                <button type="submit" class="add_cart_btn  red"  ><a href="{{route('home')}}">Continue Shopping</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <tr>
                    <td colspan="5" class="text-center"><p>{{ "Bạn chưa mua sản phẩm nào" }}</p></td>
                </tr>
            @endif
        </section>
        <!--================End Shopping Cart Area =================-->
@endsection

<script>

    function increaseQty(productId) {
        let qty = 0;
        let value = document.getElementById(productId + 'qty').value;
        if (parseInt(value) >= 1 && parseInt(value) < 100) {
            qty = parseInt(value) + 1;
            return document.getElementById(productId + 'qty').value = qty;
        }
    }

    function decreaseQty(productId) {
        let qty = 0;
        let value = document.getElementById(productId + 'qty').value;
        if (parseInt(value) > 1 && parseInt(value) < 100) {
            qty = parseInt(value) - 1;
            return document.getElementById(productId + 'qty').value = qty;
        }
    }

    $(document).ready(function(){
        $("button").click(function(){
            $.ajax({url: "demo_test.txt", success: function(result){
                    $("#div1").html(result);
                }});
        });
    });
</script>
