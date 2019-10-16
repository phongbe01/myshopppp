
@extends('template.header')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #cbd3da">
                    <div class="card-header">
                        Customer Details
                    </div>
                    <div class="card-body">
                        Customer ID: {{ $customer->id}}<br>
                        Customer Name: {{ $customer->name}}<br>
                        Customer Phone: {{ $customer->phone}}<br>
                        Customer Email: {{ $customer->email}}<br><br>
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
                            @foreach($customer->bills as $key => $bill)
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
                <div>
                    <form action="{{route('customers.index')}}" method="get">
                        <button class="btn btn-primary" type="submit">Back</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
