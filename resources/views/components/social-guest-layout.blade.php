<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f0f2f5;
            background-image: url('path_to_your_custom_background_image.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            box-sizing: border-box;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            padding: 40px 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .logo img {
            width: 150px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left; /* Ensure text is aligned left */
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        .form-group input {
            width: calc(100% - 20px); /* Adjust width to include margin */
            margin-right: 10px; /* Add right margin */
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s;
        }
        .form-group input:focus {
            border-color: #4a90e2;
            outline: none;
            box-shadow: 0 0 5px rgba(74, 144, 226, 0.5);
        }
        .form-group .error {
            color: red;
            font-size: 0.875em;
            margin-top: 5px;
        }
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
        .form-actions .forgot-password {
            font-size: 0.875em;
        }
        .form-actions .forgot-password a {
            color: #4a90e2;
            text-decoration: none;
        }
        .form-actions .forgot-password a:hover {
            text-decoration: underline;
        }
        .form-actions button {
            background-color: #4a90e2;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-actions button:hover {
            background-color: #357abd;
        }
        @media (max-width: 480px) {
            .login-card {
                padding: 20px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="logo">
                <img src="{{ asset('images/image2.png') }}" alt="Logo">
            </div>
            {{ $slot }}
        </div>
    </div>
</body>
</html>
