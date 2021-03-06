<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>$('.carousel').carousel({
        interval: 1000
        })</script>
</head>
<body>
    @include('header')


        @yield('content')


    @include('footer')






</body>
<style>
    img.slider-img{
        height: 400px !important
    }


    .custom-product{
        height: 600px;
        margin-left: 10px;;
    }
    .carousel-inner .carousel-caption h3, p, h2 {
        color: rgb(6, 63, 51) !important
    }

    .trendinng-img{
        height: 100px;
    }
    .trendding-item{
        float: left;
        width: 25%;
    }
    .trendding-wrapper{
        margin-left: 200px;
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }

    .cart-list-divider{
        border-bottom: 1px solid #000;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }

</style>
</html>
