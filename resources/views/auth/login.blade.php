<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - HEI Admin Portal V.2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-container img {
            max-width: 150px;
            margin-bottom: 20px;
        }

        .login-container h2 {
            margin-bottom: 30px;
        }

        .powered-by {
            margin-top: 20px;
            font-size: 15px;
            color: #6c757d;
        }

        .powered-by img {
            height: 50px;
        }
    </style>
</head>

<body>
    <div class="login-container">

        <img src="{{ asset('images/uf_logo.png') }}" alt="TES Logo">


        <h2 class="fw-bold">HEI ADMIN PORTAL V.2</h2>


        <form method="POST" action="{{ route('login_execute') }}">
            @csrf
            <div class="mb-3 text-start">
                <label for="hei_username" class="form-label">Username</label>
                <input type="text" class="form-control" id="hei_username" name="hei_username"
                    placeholder="Enter your username" required autofocus>
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Enter your password" required>
            </div>
            <div class="mb-3 form-check text-start">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <button type="submit" class="btn btn-dark w-100">LOG IN</button>
        </form>

        @if ($errors->has('credentials'))
            <div class="alert alert-danger">
                {{ $errors->first('credentials') }}
            </div>
        @endif



        <div class="powered-by mt-4">
            <p>Powered by:</p>
            <img src="{{ asset('images\Laravel-Logo.wine.png') }}" alt="Laravel Logo">
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
