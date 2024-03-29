<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Arsip | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
      .error{
          color: red;
      }
      *{
            margin: 0px;
            padding: 0px;
        }
        body{
            background-image: url('https://images.unsplash.com/photo-1526554850534-7c78330d5f90?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80');
            background-size: cover;
            background-attachment: fixed;
            font-family: new time roman;
        }
        h1{
            font-size: 40px;
            color: black;
            margin-top: 250px;
        }
        p{
            font-size: 17px;
            color: black;
        }
        h3{
            font-size: 25px;
            color: white;
        }
        .glyphicon-log-in
        {
            font-size: 50px;
            color: white;
            float: right;
            margin-top: 20px;
        }
        .col-md-5{
            margin-top:80px;
            box-shadow: -1px 1px 60px 10px white;
            background: rgba(0,0,0,0.4);
        }
        .label{
            font-weight: normal;
            margin-top: 15px;
            color: white;
            font-size: 18px;
        }
        .form-control{
            background: transparent;
            border-radius: 0px;
            border: 0px;
            border-bottom: 1px solid white;
            font-size: 18px;
            margin-top: 15px;
            height: 40px;
            color: white;
        }
        .btn-info{
            margin-top: 20px;
            font-size: 20px;
            width: 120px;
            margin-left: 80px;
            margin-bottom: 20px;
        }
        .tengah{
            position: absolute;
            top: 7.5%;
            left: 30%
        }
  </style>
</head>
<body>
    <div class="container tengah">
        <div class="row">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-left">Register in here!</h3>
                    </div>
                    <div class="col-md-6">
                        <span class="glyphicon glyphicon-log-in"></span>
                    </div>
                </div>
                    <hr>
                    <form action="register" method="post">
                    {{ csrf_field() }}
                        <div class="row">
                            <label class="label col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Input Full Name" name="name" >
                            </div>
                        </div>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="row">
                            <label class="label col-md-2 control-label">E-mail</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Input Email" name="email" >
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="row">
                            <label class="label col-md-2 control-label">Password</label>
                            <div class="col-md-10">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Input Password" name="password" >
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="row">
                            <label class="label col-md-2 control-label">Retype Password</label>
                            <div class="col-md-10" style="margin-top: 25px;">
                                <input type="password" class="form-control" placeholder="Retype Password" name="retype_password" >
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info" style="margin-left: 40%;">Sign In</button>
                    </form>
                    <a href="{{route('login')}}" class="text-center" style="margin-left: 35%; color:white;">I already have a membership</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>