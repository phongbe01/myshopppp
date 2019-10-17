@extends('template.header')
@section('content')
{{--    <div>--}}
{{--        <form  role="form" action="{{route('bills.store')}}" method="post">--}}
{{--            @csrf--}}
{{--            <div><h4>Thong tin khach hang</h4></div>--}}
{{--            <div>--}}
{{--                <label>Tên </label>--}}
{{--                <input type="text" class="form-control col-lg-3 " name="" value="{{$user->name}}">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label for="address">phone</label>--}}
{{--                <input type="text" class="form-control col-lg-3 " name="phone" value="{{$user->phone}}">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label for="email">Email</label>--}}
{{--                <input type="email" class="form-control col-lg-3 " name="email" value="{{$user->email}}">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label for="payDate">Ngay</label>--}}
{{--                <input type="text" class="form-control col-lg-3 " name="payDate" value="{{$date}}">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label for="address">Dia chi</label>--}}
{{--                <input type="text" class="form-control col-lg-3 " name="payAddress">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label for="">Tong tien</label>--}}
{{--                <input type="text" class="form-control col-lg-3 " name="price" value="{{$cart->totalPrice}}">--}}
{{--            </div>--}}
{{--            <div><h4>Phuong thuc thanh toan</h4></div>--}}
{{--            <br>--}}
{{--            <div><h4>Giam gia</h4></div>--}}
{{--            <br>--}}
{{--            <button class="btn btn-primary" type="submit">Submit</button>--}}
{{--        </form>--}}
{{--    </div>--}}
    <div class="col-md-6">
        <div class="form-group">
            <h2>Information</h2>
            <p>Please log in below :</p>
            <form role="form" action="{{route('bills.store')}} " method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name <span>*</span></label>
                    <input type="text" class="form-control"  value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone <span>*</span></label>
                    <input type="text" class="form-control" value="{{$user->phone}}" >
                </div>
                <div class="form-group">
                    <label for="email">Email address <span>*</span></label>
                    <input type="email" class="form-control" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label for="date">Date<span>*</span></label>
                    <input type="text" class="form-control" value="{{$date}}">
                </div>
                <div class="form-group">
                    <label for="">Address<span>*</span></label>
                    <input type="text" class="form-control" name="payAddress">
                </div>
                <div class="form-group">
                    <label for="">Total Price<span>*</span></label>
                    <input type="text" class="form-control" value="${{number_format($cart->totalPrice)}}">
                </div>
                <h3>* Required Filelds</h3>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection
