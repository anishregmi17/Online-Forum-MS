<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Forum</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        .header {
            background-color: #ff2d20;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .header a:hover {
            text-decoration: underline;
        }
        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px 20px;
            text-align: center;
        }
        .main h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        .feature {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 300px;
            text-align: left;
        }
        .feature h3 {
            margin-top: 0;
            color: #ff2d20;
        }
        .feature p {
            font-size: 1rem;
            line-height: 1.6;
        }
        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .footer a {
            color: #ff2d20;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header class="header">
        <div>
            <h1>Online Forum</h1>
        </div>
        <div>
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </header>
    <main class="main">
        <h1>Welcome to Our Community!</h1>
        <p>Join our online forum to connect with like-minded individuals, share your thoughts, and explore new ideas. Our community is designed to foster healthy discussions and provide a platform for you to express yourself.</p>
        <div class="features">
            <div class="feature">
                <h3>Engage in Discussions</h3>
                <p>Participate in a wide range of discussions on various topics. Whether you're passionate about technology, arts, or social issues, there's something for everyone.</p>
            </div>
            <div class="feature">
                <h3>Share Your Knowledge</h3>
                <p>Contribute to the community by sharing your expertise and insights. Help others learn and grow by providing valuable information and resources.</p>
            </div>
            <div class="feature">
                <h3>Connect with Others</h3>
                <p>Build connections with people who share your interests. Make new friends, network with professionals, and become a part of our vibrant community.</p>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Online Forum. All rights reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer>
</body>
</html>
