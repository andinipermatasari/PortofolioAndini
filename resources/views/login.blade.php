<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <form action="{{ url('user/auth') }}" method="post">
        @csrf
        <div class="conteiner">
            <div class="row h-100 justify-content-center align-item-center">
                <div class="col-md-6">
                    <h2 class="text-center fw-bold py-3">Login</h2>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Masukan Email">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Login"  class="form-control btn btn-primary btn-sm ">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>