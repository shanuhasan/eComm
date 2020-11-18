@extends('master')
@section('content')    
<div class="custom-product">
      <div class="col-sm-10">
        <div class="trending">
            <h2>Orders Lists</h2>
            <div>
                @foreach ($orders as $item)
                <div class="row cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img src="{{$item->gallery}}" class="trending-img" alt="">
                        </a>
                    </div>
                    <div class="col-sm-3">
                            <div class="">
                                <h2>{{$item->name}}</h2>
                                <h6>Delivery Status: {{$item->status}}</h6>
                                <h6>Payment Status: {{$item->payment_status}}</h6>
                                <h6>Payment Method: {{$item->payment_method}}</h6>
                                <h6>Delivery Address: {{$item->address}}</h6>
                                <h6>Price: {{$item->price}}</h6>
                            </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
      </div>
</div>
@endsection