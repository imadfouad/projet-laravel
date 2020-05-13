@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
            <div class="panel panel-default colo2">
                <div class="panel-heading" id="colo2">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" id="log" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                    
                    <button style="margin-left: 250px;" id="clk" onclick="mafct();" class="btn btn-info">Accéder au site autant que Visiteur </button>

<script type="text/javascript">
var i = 0;
    function mafct(){
        
                
                var clk = document.getElementById('clk');
        
        var email = document.getElementById('email');
    var password = document.getElementById('password');
    var log = document.getElementById('log');

        email.removeAttribute('value');
        email.setAttribute('value','visiteur@gmail.com');

        password.removeAttribute('value');
        password.setAttribute('value','123456');

        log.submit(); 
        clk.click(); 
        clk.click();
    }

</script>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
