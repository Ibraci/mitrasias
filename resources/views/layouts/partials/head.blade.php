    <head>
        <!-- Title -->
        <title>{{ $title or 'Web App' }} - Mitras IAS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="mitrasias, enquiry, registration, video, api" />
        <meta name="author" content="Ibrahim CISSSE <ibraci1960@gmail.com>" />

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/materialize.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/materialize.css')}}">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/MetroJs.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/weather-icons.min.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Theme Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" >
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/master.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/alpha.min.css')}}"/>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

        <!-- Pick a theme, load the plugin & initialize plugin -->
        <script src="{{asset('assets/js/jquery-2.2.0.min.js')}}"></script>

        {{-- for enquiry --}}
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALZTMjn4rQvBC-ldebXgJjmNflEWklQ6E&libraries=places&callback=initialize" async defer></script>
        <!-- First, include the Webcam.js JavaScript Library -->
        <script type="text/javascript" src="{{asset('assets/js/webcam.js')}}"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="http://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
