<!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="{{ asset('assets/css/bootstrap4/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}" rel="stylesheet">
<link href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/categories_styles.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/categories_responsive.css') }}" rel="stylesheet" >
<link href="{{ asset('assets/css/main_styles.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

</head>
<body>

    @include('layouts.topo1')

    @yield('content')

    @include('layouts.footer1')

</body>
</html>
