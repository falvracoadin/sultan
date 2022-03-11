<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | {{config('app.name')}}</title>
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
    <style>
        .btn{
            text-decoration: none;
            color: #00cccc;
            font-size: 20px;
            font-weight: bold;
            background-color: #eee;
        }
    </style>
</head>
<body style="overflow: hidden;">
    
    <div class="container" onclick="onclick">
        <form method="POST">
            @csrf
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="center">
                <h2>Please Sign In</h2>
                <input type="email" placeholder="email" name="email"/>
                <input type="password" placeholder="password" name="password" minlength="8"/>
                <input style="cursor: pointer;" type="submit" value="Login" name="submit">
                <h2>&nbsp;</h2>
                <div class="row">
                    <div class="col-md-12">
                        <a class="btn" href="{{url('/ubah-password')}}">Reset Password</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @if(session('credential'))
        <script>
            alert('{{session("credential")}}')
        </script>
    @endif
</body>
</html>