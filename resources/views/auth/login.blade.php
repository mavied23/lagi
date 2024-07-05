<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SehatQu Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzIA5r93y/0mG6K/2+fq5j/DZhF0jL+nXg5w/fr0+c/7cQlIEogIiR+r" crossorigin="anonymous">
    <style>
        body {
        font-family: sans-serif;
        background-color: #95dafa;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
        }

        .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
        width: 500px;
        padding: 50px;
        }
        .card:hover {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        transform: translateY(-1px); 
        }

        .card-header {
        font-size: 25px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
        }

        .row {
        margin-bottom: 15px;
        }

        .col-md-4 {
        text-align: right;
        padding-right: 10px;
        }

        .col-md-6 {
        padding-left: 10px;
        }

        .form-control {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        font-size: 16px;
        width: 100%;
        }

        .form-check-input {
        margin-left: 10px;
        }

        .btn {
        background-color: #0d00c1;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
        }

        .btn:hover {
        background-color: #5848e8;
        }

        .btn-link {
        color: #ffffff;
        text-decoration: none;
        }

        .btn-link:hover {
        text-decoration: underline;
        }

        .invalid-feedback {
        display: block;
        color: #dc3545;
        font-size: 14px;
        }
        .dont-have-account a {
        color: #007bff;
        text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">{{ __('Login') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address :') }}</label><br><br>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password :') }}</label><br><br>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>
                <div class="dont-have-account">Belum Punya Akun? <a href="{{ route('register') }}">Daftar disini!</a></div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geQ8jz0KMn0kIkxEeB6s69hpfp1/7H+s/jJkm+Eb1mSAgBTyZ0zH7Tkp9/7l" crossorigin="anonymous"></script>
</body>
</html>
