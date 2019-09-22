<html>
<head>
    <title>mca-web</title>
    <link href="public/css/a1style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/style1.css">
    <link href="public/css/slide.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/css/newsblock.css') }}">
    @include('layout/style')

</head>
<body>
@include('header')
<div class="a1-container">
    @yield('AboutusAndSlider')
    @yield('NewsAndUpdates')
</div>
@include('footer')
</div>
</body>
</html>
