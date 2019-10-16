@extends('template.header')
@section('content')
    <h1>{{ "Chi tiết giỏ hàng" }}</h1>
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
    <div class="col-12 col-md-11 mt-2 border">
        <table id="cart" class="table table-hover">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
            @if(Session::has('cart'))
                @foreach($cart->items as $product)
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-2 hidden-xs"><img src="{{ asset('storage/' . $product['item']->image) }}"
                                                                     alt="..."
                                                                     class="img-responsive" width="150%"/></div>
                                <div class="col-md-10 p-5">
                                    <h4 class="nomargin">{{ $product['item']->product_name }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">{{ '$' . number_format($product['item']->price) }}</td>

                        <form action="{{route('cart.updateIntoCart',$product['item']->id)}}" method="post">
                            @csrf
                            <td data-th="quantity">
                                <div class="custom">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon_minus-06"></i></button>
                                    <input type="text" name="qty" id="sst" maxlength="12" value="{{ $product['qty'] }}" title="Quantity:" class="input-text qty">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="icon_plus"></i></button>
                                </div>
{{--                                <input type="number" class="form-control text-center" min="1" name="qty" value="{{ $product['qty'] }}">--}}
                            </td>
                            <td data-th="Subtotal" class="text-center">{{ number_format( $product['price']) }}</td>

                                <td class="actions" data-th="">
                                    <div class="d-flex">
                                    <button class="btn btn-info btn-sm" type="submit">Cap nhap<i class="fa fa-refresh"></i></button>
                                    <a class="btn btn-danger btn-sm" href="{{route('cart.removeIntoCart',$product['item']->id)}}">Xoa<i class="fa fa-trash-o"></i></a>
                                    </div>
                                </td>
                        </form>
                    </tr>
                @endforeach
            </tbody>

            <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Tổng tiền: ${{ number_format($cart->totalPrice) }}</strong></td>
            </tr>
            <tr>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><strong>Tổng tiền: ${{number_format( $cart->totalPrice) }}</strong></td>
                <td><a href="{{route('bills.create')}}" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
            </tr>
            </tfoot>
            @else
                <tr>
                    <td colspan="5" class="text-center" style="color:#c69500 "><p>{{ "Bạn chưa mua sản phẩm nào" }}</p></td>
                </tr>
            @endif
        </table>
    </div>


@endsection
