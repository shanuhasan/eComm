@extends('master')
@section('content')    
<div class="custom-product">
      <div class="col-sm-3">
          <a href="">Filter</a>
      </div>
      <div class="col-sm-4">
        <div class="trending">
            <h4>Result for Products</h4>
            @foreach ($products as $item)
                <div class="">
                    <a href="detail/{{$item['id']}}">
                        <img src="{{$item['gallery']}}" class="trending-img" alt="">
                        <div class="">
                            <h2>{{$item['name']}}</h2>
                            <h5>{{$item['description']}}</h5>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
      </div>
</div>
@endsection