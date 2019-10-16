@extends('template.header')
@section('content')
        <!--================Register Area =================-->
        <section class="register_area p_100 row justify-content-center">
            <div class="container ">
                <div class="register_inner ">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="billing_details">
                                <h2 class="reg_title">Register</h2>
                                <form class="billing_inner row" action="{{route('register')}}" method="post">
                                    @csrf

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="name">Name <span>*</span></label>
                                            <input type="text" class="form-control" id="name" aria-describedby="name" value="{{ old('name') }}"  required autocomplete="name" autofocus name="name">

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="phone">Phone number <span>*</span></label>
                                            <input type="text" class="form-control" id="phone" aria-describedby="phone" value="{{old('phone')}}" autofocus name="phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Email <span>*</span></label>
                                            <input type="email" class="form-control" id="email" aria-describedby="email" value="{{old('email')}}" name="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="password">Password <span>*</span></label>
                                            <input type="password" class="form-control" id="password" aria-describedby="password" value="{{old('password')}}" name="password">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Register') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
{{--                        <div class="col-lg-5">--}}
{{--                            <div class="order_box_price">--}}
{{--                                <h2 class="reg_title">Your Order</h2>--}}
{{--                                <div class="payment_list">--}}
{{--                                    <div class="price_single_cost">--}}
{{--                                        <h5>Mens Casual Shirt <span>$25.20</span></h5>--}}
{{--                                        <h5>Mens Casual Shirt <span>$25.20</span></h5>--}}
{{--                                        <h4>Cart Subtotal <span>$50.00</span></h4>--}}
{{--                                        <h3><span class="normal_text">Order Totals</span> <span>$50.00</span></h3>--}}
{{--                                    </div>--}}
{{--                                    <div id="accordion" role="tablist" class="price_method">--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-header" role="tab" id="headingOne">--}}
{{--                                                <h5 class="mb-0">--}}
{{--                                                    <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                    direct bank transfer--}}
{{--                                                    </a>--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}

{{--                                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's.--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-header" role="tab" id="headingTwo">--}}
{{--                                                <h5 class="mb-0">--}}
{{--                                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">--}}
{{--                                                    cheque payment--}}
{{--                                                    </a>--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}
{{--                                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's.--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-header" role="tab" id="headingThree">--}}
{{--                                                <h5 class="mb-0">--}}
{{--                                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">--}}
{{--                                                    cash on delivery--}}
{{--                                                    </a>--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}
{{--                                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's.--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card">--}}
{{--                                            <div class="card-header" role="tab" id="headingfour">--}}
{{--                                                <h5 class="mb-0">--}}
{{--                                                    <a class="collapsed" data-toggle="collapse" href="#collapsefour" role="button" aria-expanded="false" aria-controls="collapsefour">--}}
{{--                                                    paypal--}}
{{--                                                    </a>--}}
{{--                                                </h5>--}}
{{--                                            </div>--}}
{{--                                            <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's.--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button type="submit" value="submit" class="btn subs_btn form-control">place order</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </section>
        <!--================End Register Area =================-->

   @endsection
