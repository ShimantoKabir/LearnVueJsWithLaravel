<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    </head>
    <body>
        <div id="app" >

            <nav class="navbar navbar-expand-sm bg-dark">
                <!-- Brand -->
                <a class="navbar-brand" href="#">Learn Vue Js</a>

                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <router-link to="/table">Table</router-link>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <router-link to="/card">Card</router-link>
                        </a>
                    </li>
                </ul>
            </nav>
            <br>
            <router-view></router-view>
        </div>
        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>
