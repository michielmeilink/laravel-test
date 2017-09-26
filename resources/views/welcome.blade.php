<!DOCTYPE html>
<html>
    <head>
        <title>
            Testing Laravel
        </title>

        {{-- CSS --}}
        <link rel="stylesheet" type="text/css" href="../../public/css/style.css">

        {{-- Font --}}
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    </head>


    <body>
        <ul>
            @foreach($tasks as $task)
                <li>{{ $task }}</li>
                @endforeach
        </ul>
    </body>
</html>