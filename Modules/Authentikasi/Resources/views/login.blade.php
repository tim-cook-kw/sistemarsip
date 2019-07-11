<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>


<div class="login-box">
    <form class="form-horizontal" role="form" method="POST" action="{{ route('login.attempt') }}">
        {{ csrf_field() }}
        <h1>Login</h1>
            <div class="textbox {{ $errors->has('email') ? ' has-error' : '' }}">
                <i class="fa fa-user"></i>
                <input type="text" placeholder="Email" name="email" id="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
            </div>

            <div class="textbox {{ $errors->has('password') ? ' has-error' : '' }}">
                <i class="fa fa-lock"></i>
                <input type="password" placeholder="Password" name="password" id="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>
            <input class="btn" type="submit" name="" value="Login">
    </form>
</div>


</body>
</html>