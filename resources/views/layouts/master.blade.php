<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Michiel's blog with Laravel</title>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ URL::asset("/resources/assets/css/blog.css") }}">

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('layouts.nav')

    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">An example blog of Michiel</h1>
            <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
    </div>

    <div class="container">

        <div class="row">

            @yield('content')

            @include("layouts.sidebar")

        </div><!-- /.row -->

    </div><!-- /.container -->

   @include('layouts.footer')

</body>
</html>
