<?php
  use App\Http\Controllers\ProductController;
  $total=0;
  if(Session::has('user'))
  {
    $total = ProductController::cartItem();
  }
?>
<nav class="navbar navbar-expand-lg navbar-light nav-custom">
    <a class="navbar-brand" href="/">
      <img src="{{asset('assets/img/design2.png')}}" alt="" style="width: 150px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/myorder">Orders</a>
        </li>  
        <li>
          <form action="/search" class="form-inline my-2 my-lg-0">
            <input class="form-control nav-search" name="query" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </li>      
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item"><a class="nav-link" href="/cartlist">cart({{$total}})</a></li>
        @if(Session::has('user'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            {{Session::get('user')['name']}}
          </a>
          <div class="dropdown-menu">
            <a class="nav-link" class="dropdown-item" href="/logout">Logout</a>
          </div>
        </li>
        @else
        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
        @endif
      </ul>
    </div>
  </nav>