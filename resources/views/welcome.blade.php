<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Laravel</title>

    </head>

    <body>

        <ul>

            @foreach ($techniques as $technique)

                <li>{{ $technique }}</li>


            @endforeach


        </ul>




    </body>
</html>
