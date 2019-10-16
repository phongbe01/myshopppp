@extends('template.header')
@section('content')
    <div class="col-12 col-md-11 mt-2 border">
        <table id="cart" class="table table-hover">
            <thead>
            <tr>
                <th style="width:10%">STT</th>
                <th style="width:10%">Name</th>
                <th style="width:15%">Phone</th>
                <th style="width:10%">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $key => $customer)
                <tr>
                    <td class=""><a href="{{route('customers.show',$customer->id)}}">{{++$key}}</a></td>
                    <td>
                        <div class="row">
                            <div class=" p-7">
                                <h4 class="nomargin">{{ $customer->name }}</h4>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="row">
                            <div class=" p-7">
                                <h4 class="nomargin">{{ $customer->phone }}</h4>
                            </div>
                        </div>
                    </td>
                    <td >{{ $customer->email }}</td>
{{--                    <td>--}}
{{--                        <div class="d-flex">--}}
{{--                            <button  class="btn  m-lg-2"><a href="">Update</a></button>--}}
{{--                            <form action="" method="post">--}}
{{--                                @csrf--}}
{{--                                <input type="hidden" name="_method" value="delete">--}}
{{--                                <button class="btn btn-danger m-lg-2" type="submit">Delete</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}

{{--                    </td>--}}

                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection
