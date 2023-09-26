@extends('layouts.fontend-master')

@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Orders List</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
    <div class="sign-in-page">
        <div class="row">
            <div class="col-md-4 ">
                @include('user.inc.sidebar')
            </div>
            <div class="col-md-8 mt-1">
                <h3 class="text-center"><strong class="text-warning">{{ Auth::user()->name }}</strong> Your orders list</h3>
                <hr>
                <div class="pd-10 pd-sm-15">
                    <div class="table-wrapper">
                        <table id="datatable1" class="table display responsive nowrap">
                          <thead>
                            <tr>
                              <th class="wd-5p">SL</th>
                              <th class="wd-20p">Order Date</th>
                              <th class="wd-10p">Amount</th>
                              <th class="wd-15p">Payment Method</th>
                              <th class="wd-15p">Invoice No</th>
                              <th class="wd-10p">Order</th>
                              <th class="wd-25p">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($orders as $order)
                            <tr>
                              <td class="wd-5p">{{$loop->iteration}}</td>
                              <td class="wd-20p">{{$order->order_date}}</td>
                              <td class="wd-10p">{{$order->amount}}</td>
                              <td class="wd-15p">{{$order->payment_method}}</td>
                              <td class="wd-15p">{{$order->invoice_no}}</td>
                              <td class="wd-10p">
                                <span class="badge badge-pill badge-warning" style="background: #418DB9; text:white;">{{ucwords($order->status)}}</span>
                                </td>
                              
                              <td class="wd-25p">
                                <a href="{{route('user.view-order',$order->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{route('user.order-invoice',$order->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-download"></i></a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                    </div><!-- table-wrapper -->
                </div>
            </div>
          </div>
    </div>
</div>
</div>
@endsection