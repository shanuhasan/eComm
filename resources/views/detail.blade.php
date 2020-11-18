@extends('master')

@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$product['gallery']}}" class="detail-img" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>Name : {{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Category : {{$product['category']}}</h4>
            <h4>Description : {{$product['description']}}</h4>
            <br>
            <form action="/add_to_cart" method="post">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
                <button type="submit" class="btn btn-success">Add to Cart</button>
            </form>
            <br>
            <br>
            <button class="btn btn-primary">Buy Now</button>
        </div>
    </div>
</div>

@endsection