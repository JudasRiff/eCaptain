<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>e-Captain - @yield('title')</title>
    </head>

    <body>
        <div>
            <div class="row">
                <div class="col-sm-2">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link active" href="#">Eenvoudige weergave</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Uitgebreide weergave</a>
                        </li>
                    </ul>
                </div>
        
                <div class="col-sm-6">
                    @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>