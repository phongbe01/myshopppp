@extends("template.header")
@section("content")
    <div class="container">
        <div class="header_top_area">
            <h3>Bill Detail</h3>
        </div>
        <div class="col-12 col-md-11 mt-2 border">
            <table id="cart" class="table table-hover">
                <thead>
                <tr>
                    <th style="width:50%">Product</th>
                    <th style="width:50%">Name</th>
                    <th style="width:10%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($bill->products as $product)
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-md-4 hidden-xs"><img src="{{ asset('storage/' . $product->image) }}"
                                                                     alt="..."
                                                                     class="img-responsive" width="200%"/></div>

                            </div>
                        </td>
                        <td>
                            <div class="col-md-10 p-3 col-3">
                                <h4 class="nomargin">{{ $product->product_name }}</h4>
                            </div>
                        </td>
                        @foreach($billProducts as $billProduct)
                            @if($billProduct->product_id == $product->id)
                                <div class="col-md-6 p-3 col-3">
                                    <td data-th="Product">{{number_format($product->price)}}</td>
                                    <td>{{ $billProduct->quantity }}</td>
                                    <td>{{number_format($product->price * $billProduct->quantity)}}</td>
                                </div>
                            @endif
                        @endforeach
                        <td>{{$product->createt_at}}</td>
                    </tr>
                @endforeach
                </tbody>

                <tfoot>
                </tfoot>
            </table>
        </div>
    </div>

@endsection
