<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRUD</title>

        <!-- Fonts -->
        @include('script')

    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
        
    </body>    
</html>
