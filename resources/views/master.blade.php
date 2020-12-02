<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Comm</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    {{View::make('header')}}

        <div class="container-fluid">
            @yield('content')
        </div>

    {{-- {{View::make('footer')}} --}}
    
    <style>
        .custom-login{
            height: 500px;
            padding-top: 100px;
        }
        img.slider-img{
            height:400px !important;
        }
        .carousel-caption{
            background-color: #24465454 !important;
        }
        .trending-img{
            height:100px;
        }
        .trending-item{
            float:left;
            width:33%
        }
        .trending{
            margin:20px;
        }
        .detail-img{
            height: 200px;
        }
        .cart-list-divider{
            border-bottom: 1px solid gray;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
    </style>
    
</body>
</html>