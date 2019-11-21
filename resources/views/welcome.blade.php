<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/logo-api.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="red">
    <title>Api - UANGKU</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: #6777ef;font-family: 'Nunito', sans-serif">

<div class="container" style="margin-top: 70px">
    <div class="row">
        <div class="col-md-12" style="margin-top: 100px">
            <div class="text-center">

            </div>
            <div class="col-md-8 offset-md-2" style="text-align: center;">
                <div class="title-app">
                    <img src="{{ asset('images/logo-api.png') }}" style="width: 150px">
                    <br>
                    <p style="color: white;font-family: Nunito;font-size: 30px;margin-top: 15px"> { Api Documentation }</p>
                    <p style="margin-top: 20px;"><a href="{{ url('/') }}/docs/1.0/welcome" class="btn btn-lg btn-dark" style="border-radius: 25px;background-color: #4c5cd2;border: 2px solid #fff;"><i class="fa fa-book"></i> Getting Started</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
