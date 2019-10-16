@extends('template.header')
@section('content')
    <h1>{{ "Chi tiết giỏ hàng" }}</h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #cbd3da">
                    <div class="card-header">
                        Customer Details
                    </div>
                    <div class="card-body">
                        Customer ID: {{ Auth::user()->id}}<br>
                        Customer Name: {{ Auth::user()->name}}<br>
                        Customer Phone: {{ Auth::user()->phone}}<br><br>
                    </div>
                </div>
                <br>
                <div class="card" style="background-color: #6cb2eb">
                    <div class="card-header">
                        Products Details
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <th scope="col">#</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Status</th>
                            </thead>
                            <tbody>
                            @foreach($bills as $key => $bill)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td><a href="{{route('bills.billDetail',$bill->id)}}">{{ $bill->id }}</a></td>
                                    <td>{{ '$'.number_format($bill->price)}}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>
    @endsection
