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
            background-color: #ffffff;
            color: #333;
        }

        .header {
            background-color: #ffffff;
            color: hsl(0, 0%, 100%);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header img {
            height: 50px;
            /* Adjust the logo height as needed */
        }

        .header a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }

        .header a:hover {
            text-decoration: underline;
        }

        .header .search-box {
            flex-grow: 1;
            display: flex;
            justify-content: center;
        }

        .header .search-box input {
            width: 100%;
            max-width: 400px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            text-align: center;
        }

        .main h1 {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }

        .feature {
            background-color: rgb(244, 234, 234);
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
            background-color: #141010;
            color: white;
            padding: 1px;
            text-align: center;
            margin-top: 2rem;
        }

        .footer a {
            color: #b04a44;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .button-link {
            display: inline-block;
            padding: 10px 20px;
            /* Padding inside the button */
            margin: 5px;
            /* Margin around the button */
            border: none;
            /* Remove border */
            text-decoration: none;
            /* Remove underline from links */
            color: white;
            /* Text color */
            background-color: #5e75a7;
            /* Facebook-like blue color */
            border-radius: 5px;
            /* Rounded corners */
            transition: background-color 0.3s, transform 0.3s;
            /* Smooth transition for hover effect */
        }

        .button-link:hover {
            background-color: #365899;
            /* Darker blue on hover */
            transform: scale(1.05);
            /* Slightly enlarge on hover */
            text-decoration: none;
            /* Ensure no underline */
        }

        .button-link.register {
            background-color: #be2510;
            /* Google-like red color */
        }

        .button-link.register:hover {
            background-color: #d8513f;
            /* Darker red on hover */
            transform: scale(1.05);
            /* Slightly enlarge on hover */
            text-decoration: none;
            /* Ensure no underline */
        }

        .button-link.login:hover {
            background-color: #7a46db;
            /* Darker red on hover */
            transform: scale(1.05);
            /* Slightly enlarge on hover */
            text-decoration: none;
            /* Ensure no underline */
        }
    </style>
</head>

<body>
    <header class="header">
        <div>
            <img src="{{ asset('images/image2.png') }}" alt="Online Forum Logo">
        </div>
        <div class="search-box">
            <input type="text" placeholder="Search...">
        </div>
        <div class="in">
            <a href="{{ route('login') }}" class="button-link login">Login</a>
            <a href="{{ route('register') }}" class="button-link register">Register</a>
        </div>
    </header>
    <hr style="border: 3px solid black;">
    <main class="main">
        <h1>Welcome to Our Community!</h1>
        <h2>Pokhara Online Forum</h2>
        <p style="text-align: justify; margin: 1rem;">
            Pokhara Online Forum is a vibrant digital community based in Pokhara, Nepal. It serves as a hub for locals
            and tourists to share news, updates, and insights about the city. Members can find information on local
            events, popular tourist destinations, and recommendations for dining and accommodation.
        </p>

        <div class="features">
            <div class="feature">
                <h3>Engage in Discussions</h3>
                <p>Participate in a wide range of discussions on various topics. Whether you're passionate about
                    technology, arts, or social issues, there's something for everyone.</p>
            </div>
            <div class="feature">
                <h3>Share Your Knowledge</h3>
                <p>Contribute to the community by sharing your expertise and insights. Help others learn and grow by
                    providing valuable information and resources.</p>
            </div>
            <div class="feature">
                <h3>Connect with Others</h3>
                <p>Build connections with people who share your interests. Make new friends, network with professionals,
                    and become a part of our vibrant community.</p>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Pokhara Online Forum. All rights reserved. <a href="">Privacy Policy</a> | <a
                href="#">Terms of Service</a></p>
    </footer>
</body>

</html>
