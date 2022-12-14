<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nutanix Self Service Demonstration</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato';
            background-color: rgb(172, 209, 71);,
        }

        .fa-btn {
            margin-right: 6px;
        }

        .task-header {
            color: #D0D0D0;
        }

    </style>
</head>
<body id="app-layout">
    <div id="calmgb" class="calm-background"></div>
    <div class="container">
        <div class="row text-center task-header">
            <h2><h2 style="color: white;">Task Manager Managed by Nutanix Self Service</h2><h2 style="color: white;">[webserver IP: XXSERVERIPXX]</h2><a href="{{URL::asset('arch.jpg')}}">See Architecture</a>
        </div>
    </div>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
