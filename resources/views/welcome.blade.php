<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ecommerce</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
        <h1 style="color: white;float:right;font-size:50px;font-family:Garamond,Times,serif;">Woo Wizard E-commerce!</h1>
            <div class="container" style="left:700px;top:100px;position:absolute;background-color: rgba(255,255,255, 0.7);padding:15px;">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-center"><i class="fas fa-business-time fa-10x" style="color: #0eb4fd" ></i></div>
                                <h2 class="font-18 text-center">We should have given you the logins for the site to start adding your products too:</h2>
                                <form class="form-horizontal m-t-30" action="{{url('/connection')}}" method="post">
                                    {!! csrf_field() !!}
                                    <div class="form-group">
                                        <div class="col-12" style="margin-bottom:20px;">
                                            <label style="font-weight:bold;">URl :</label>
                                            <input name="host" class="form-control" type="text" required="" placeholder="Host">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-12" style="margin-bottom:20px;">
                                            <label style="font-weight:bold;">API client :</label>
                                            <input name="key" class="form-control" type="password" required="" placeholder="Api key">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-12" style="margin-bottom:20px;">
                                            <label style="font-weight:bold;">API  secret :</label>
                                            <input name="secret" class="form-control" type="password" required="" placeholder="Secret key">
                                        </div>
                                    </div>
                                    <div class="form-group text-center m-t-20">
                                        <div class="col-12">
                                            <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>
