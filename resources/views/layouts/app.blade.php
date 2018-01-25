<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'MitrasIAS') }}</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Ibrahim CISSE (Ibraci)" />
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="{{asset('assets/plugins/metrojs/MetroJs.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/plugins/weather-icons-master/css/weather-icons.min.css')}}">
        <!-- Theme Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/alpha.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
        <!-- Pick a theme, load the plugin & initialize plugin -->
        <script src="{{asset('assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    </head>
    <body>
        <div class="signin-page">
            <div class="mn-content valign-wrapper">
                <main class="mn-inner container">
                    <div class="valign">
                        <div class="row">
                            <div class="col s12 m6 l4 offset-l4 offset-m3">
                                <div class="card white darken-1">
                                    <div class="card-content ">

                                        @yield('content')
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- Javascripts -->
        <script src="{{asset('assets/plugins/jquery/jquery-2.2.0.min.js')}}"></script>
        <script src="{{asset('assets/plugins/materialize/js/materialize.min.js')}}"></script>
        <script src="{{asset('assets/plugins/material-preloader/js/materialPreloader.min.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.js')}}"></script>
        <script src="{{asset('assets/js/alpha.min.js')}}"></script>
    </body>
</html>
{{--
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html> --}}
