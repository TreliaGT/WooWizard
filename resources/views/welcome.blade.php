@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">Woo Wizard</h1>
                        <h2 class="font-18 text-center">Start adding your products!:</h2>
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

@endsection
