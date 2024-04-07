<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <style>
        @import url('https://rsms.me/inter/inter-ui.css');
        ::selection {
            background: #2D2F36;
        }
        ::-webkit-selection {
            background: #2D2F36;
        }
        ::-moz-selection {
            background: #2D2F36;
        }
        body {
            background-image: url('{{asset('assets/images/background.jpg')}}');
            background-repeat: no-repeat;
            font-family: 'Inter UI', sans-serif;
            background-size: cover;
            margin: 0;
        }
        .page {
            display: flex;
            flex-direction: column;
            height: 100vh;
            place-content: center;
            width: 100%;
        }
        @media (max-width: 767px) {
            .page {
                height: auto;
                margin-bottom: 20px;
                padding-bottom: 20px;
            }
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 480px;
            width: 840px;
            margin: 0 auto;
        }
        @media (max-width: 767px) {
            .container {
                flex-direction: column;
                height: auto;
                width: 320px;
            }
        }
        .login {
            font-size: 50px;
            font-weight: 900;
            margin-bottom: 20px;
        }
        .eula {
            color: #999;
            font-size: 14px;
            line-height: 1.5;
        }
        .right {
            background: #1a643d;
            color: #F1F1F2;
            width: 50%;
            position: relative;
            box-shadow: 0px 0px 40px 16px rgba(0,0,0,0.22);
            padding: 20px;
        }
        @media (max-width: 767px) {
            .right {
                width: 100%;
            }
        }
        .form {
            margin: 0 auto;
            max-width: 320px;
        }
        .form .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        .form label {
            font-size: 18px;
            margin-bottom: 5px;
            color: #000;
        }
        .form input[type="email"],
        .form input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form button[type="submit"] {
            width: calc(100% - 20px);
            padding: 10px;
            background-color: #67e0a0;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form button[type="submit"]:hover {
            background-color: #1fd674;
        }
        .form .register-link {
            text-align: center;
            margin-top: 20px;
        }
        .form .register-link a {
            color: #fff;
            text-decoration: none;
        }
        .form .register-link a:hover {
            text-decoration: underline;
        }
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="container">
            <div class="right">
                <div class="form">
                    <form id="loginForm" method="POST" action="{{ route('doLogin') }}">
                        @csrf
                        @if ($errors->any())
                            <div class="error-message">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h2 class="title">Login to your account.</h2>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        <button type="submit">Submit</button>
                    </form>
                    <p class="register-link">Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
