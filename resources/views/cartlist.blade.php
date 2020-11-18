@extends('master')
@section('content')    
<div class="custom-product">
      <div class="col-sm-10">
        <div class="trending">
            <h2>cart Lists</h2>
            <div>
                @foreach ($products as $item)
                <div class="row cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img src="{{$item->gallery}}" class="trending-img" alt="">
                        </a>
                    </div>
                    <div class="col-sm-3">
                            <div class="">
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                            </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove from cart</a>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
      </div>
</div>
@endsection