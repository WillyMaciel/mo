@extends('templates.blank')
@section('body')
<div class="login-container lightmode">
        
        <div class="login-box animated fadeInDown">
            <div class="login-logo"></div>
            <div class="login-body">
                <div class="login-title"><strong>Log In</strong> to your account</div>
                <form action="{{url('auth/login')}}" class="form-horizontal" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="col-md-12">
                        <input name="email" type="text" class="form-control" placeholder="E-mail"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input name="password" type="password" class="form-control" placeholder="Password"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-info btn-block">Log In</button><button type="button" class="btn btn-danger mb-control" data-box="#mb-signout">Danger</button>
                    </div>
                </div>
                <div class="login-or">OR</div>
                <div class="form-group">
                    <div class="col-md-4">
                        <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                    </div>
                    <div class="col-md-4">                            
                        <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                    </div>
                </div>
                <div class="login-subtitle">
                    Don't have an account yet? <a href="#">Create an account</a>
                </div>
                </form>
            </div>
            <div class="login-footer">
                <div class="pull-left">
                    &copy; 2015 {{config('app.name')}}
                </div>
                <div class="pull-right">
                    <a href="#">About</a> |
                    <a href="#">Privacy</a> |
                    <a href="#">Contact Us</a>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
@stop

