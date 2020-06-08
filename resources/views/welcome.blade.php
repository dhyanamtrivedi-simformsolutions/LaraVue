<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
                <a class="navbar-brand" href="#">Logo</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link to="/" class="nav-link">Simple Counter</router-link>
                        <!-- <a class="nav-link" href="#">Link one</a> -->
                    </li>
                    <li class="nav-item">
                        <router-link to="/task" class="nav-link">Task CRUD</router-link>
                        <!-- <a class="nav-link" href="#">Link two</a> -->
                    </li>
                    <li class="nav-item">
                        <router-link to="/basic" class="nav-link">Call Component</router-link>
                        <!-- <a class="nav-link" href="#">Link two</a> -->
                    </li>
                    <li class="nav-item">
                        <router-link to="/search" class="nav-link">Bind Value</router-link>
                        <!-- <a class="nav-link" href="#">Link two</a> -->
                    </li>
                </ul>
            </nav>

            <router-view></router-view>
        </div>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
