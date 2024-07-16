<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Forum</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
    <nav class="sticky-top anish">
        <div class="fluid-container pt-2">
            <div class="row">
                <div class="col-md-3">
                    <nav-logo class="p-2">
                        <a href="{{ route('home') }}">
                            <img src="/images/image2.png" alt="Logo" height="50x" width="100px" /></a>
                    </nav-logo>
                </div>
                <div class="col-md-6">
                    <form class="form-inline my-2 my-lg-0 d-flex border-3 bg-light">
                        <input class="form-control mr-sm-2 flex-grow-1" type="search" placeholder="Search"
                            aria-label="Search" />
                        <button class="btn btn-outline-dark my-2 my-sm-0 border-1" type="submit">
                            Search
                        </button>
                    </form>
                </div>

                <div class="col-md-0.5 notification-container"
                    style="padding-top: 9px; padding-left: 20px; position: relative;">
                    <a href="#" id="notification-bell" class="notification-bell" style="position: relative;">
                        <i class="fa fa-bell" style="color: black; position: relative;"></i>
                        <span class="notification-badge"
                            style="position: absolute; top: -5px; right: -10px; padding: 2px 6px; border-radius: 50%; background: red; color: white; font-size: 10px;">3</span>
                        <!-- Badge -->
                    </a>
                    &nbsp;&nbsp;
                    <div id="notification-popup" class="notification-popup"
                        style="display: none; position: absolute; top: 35px; right: 0; width: 300px; background: white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); z-index: 1000;">
                        <div class="notification-header"
                            style="padding: 10px; background: #f1f1f1; border-bottom: 1px solid #ddd; font-weight: bold;">
                            Notifications
                            <span id="close-popup" class="close-popup"
                                style="float: right; cursor: pointer;">&times;</span>
                        </div>
                        <div class="notification-body" style="max-height: 200px; overflow-y: auto; padding: 10px;">
                            <!-- Add your notification messages here -->
                            <p>You have a new message!</p>
                            <p>Your order has been shipped!</p>
                            <p>Reminder: Meeting at 3 PM.</p>
                        </div>
                    </div>
                </div>

                <script>
                    document.getElementById('notification-bell').addEventListener('click', function(event) {
                        event.preventDefault();
                        var popup = document.getElementById('notification-popup');
                        popup.style.display = popup.style.display === 'block' ? 'none' : 'block';
                    });

                    document.getElementById('close-popup').addEventListener('click', function() {
                        document.getElementById('notification-popup').style.display = 'none';
                    });

                    // Close the popup if the user clicks outside of it
                    window.addEventListener('click', function(event) {
                        var popup = document.getElementById('notification-popup');
                        if (event.target !== popup && !popup.contains(event.target) && event.target !== document.getElementById(
                                'notification-bell')) {
                            popup.style.display = 'none';
                        }
                    });
                </script>


                <div class="col-md-0.5 message-container"
                    style="padding-top: 9px; padding-left: 20px; position: relative;">
                    <a href="#" id="message-icon" class="message-icon" style="position: relative;">
                        <i class="fa fa-comment-dots" style="color: black; position: relative;"></i>
                        <span class="message-badge"
                            style="position: absolute; top: -5px; right: -10px; padding: 2px 6px; border-radius: 50%; background: blue; color: white; font-size: 10px;">5</span>
                        <!-- Badge -->
                    </a>
                    &nbsp;&nbsp;
                    <div id="message-popup" class="message-popup"
                        style="display: none; position: absolute; top: 35px; right: 0; width: 300px; background: white; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); z-index: 1000;">
                        <div class="message-header"
                            style="padding: 10px; background: #f1f1f1; border-bottom: 1px solid #ddd; font-weight: bold;">
                            Messages
                            <span id="close-message-popup" class="close-message-popup"
                                style="float: right; cursor: pointer;">&times;</span>
                        </div>
                        <div class="message-body" style="max-height: 200px; overflow-y: auto; padding: 10px;">
                            <!-- Add your message list here -->
                            <p>New message from John Doe</p>
                            <p>Meeting reminder for tomorrow</p>
                            <p>You have unread messages</p>
                        </div>
                    </div>
                </div>

                <script>
                    document.getElementById('message-icon').addEventListener('click', function(event) {
                        event.preventDefault();
                        var popup = document.getElementById('message-popup');
                        popup.style.display = popup.style.display === 'block' ? 'none' : 'block';
                    });

                    document.getElementById('close-message-popup').addEventListener('click', function() {
                        document.getElementById('message-popup').style.display = 'none';
                    });

                    // Close the popup if the user clicks outside of it
                    window.addEventListener('click', function(event) {
                        var popup = document.getElementById('message-popup');
                        if (event.target !== popup && !popup.contains(event.target) && event.target !== document.getElementById(
                                'message-icon')) {
                            popup.style.display = 'none';
                        }
                    });
                </script>


                <div class="col-md-1">
                    <div style="margin-top: 10px">
                        <a href="{{ route('technology') }}"
                            style="color: black;
                  border: 1px solid rgb(9, 6, 6);
                  background-color: transparent;
                  text-decoration: none;">
                            <i class="fa-solid fa-plus"><span style="font-size: smaller">Create</span></i>
                        </a>
                    </div>
                </div>


                <div class="col-md-1">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ 'profile' }}">View Profile</a>
                                </li>
                                <nav>
                                    <ul>
                                        <li>
                                            <a href="#" class="text">
                                                <div>
                                                    <!-- Dark mode toggle button -->
                                                    <button id="darkModeToggle"
                                                        style="
                                background-color: transparent;
                                border: none;
                                color: rgb(11, 11, 11);
                                padding-left: 22px;
                              ">
                                                        Mode
                                                        <i class="far fa-sun" style="display: inline"></i>
                                                        <!-- Light mode icon -->
                                                        <i class="far fa-moon"
                                                            style="display: none; color: #6c0b0b"></i>
                                                        <!-- Dark mode icon -->
                                                    </button>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                                <script>
                                    const darkModeToggle =
                                        document.getElementById("darkModeToggle");
                                    let isDarkMode = false;

                                    darkModeToggle.addEventListener("click", () => {
                                        isDarkMode = !isDarkMode;
                                        updateTheme();
                                    });

                                    function updateTheme() {
                                        if (isDarkMode) {
                                            document.body.style.backgroundColor = "#1e1e1e";
                                            document.body.style.color = "#ffffff";
                                            document.getElementById("darkModeToggle").style.color =
                                                "#ffffff";
                                            document.querySelector(".fa-sun").style.display =
                                                "none";
                                            document.querySelector(".fa-moon").style.display =
                                                "inline";
                                        } else {
                                            document.body.style.backgroundColor = "#ffffff";
                                            document.body.style.color = "#000000";
                                            document.getElementById("darkModeToggle").style.color =
                                                "inherit";
                                            document.querySelector(".fa-sun").style.display =
                                                "inline";
                                            document.querySelector(".fa-moon").style.display =
                                                "none";
                                        }
                                    }
                                </script>
                                <li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="#"
                                        onclick="event.preventDefault(); confirmLogout();">
                                        Logout
                                    </a>
                                </li>

                                <script>
                                    function confirmLogout() {
                                        if (confirm('Are you sure you want to logout?')) {
                                            document.getElementById('logout-form').submit();
                                        }
                                    }
                                </script>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr />
    </nav>

    <!-- main section starts here -->
    @include('frontend.leftsidebar')

    <!-- Post (Middle Column) -->
    <div class="col-md-6">
        <div class="content">
            <h2>Technology Feed</h2>
            <!-- Post Content Goes Here -->

            @foreach ($technologies as $technology)
                <div class="card mb-3" style="max-width: 800px;">
                    <div class="card-body">
                        <div class="profile-section">
                            <a href="profile.html">
                                <img src="{{ asset($technology->profileimage) }}" alt="Profile Image"
                                    style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;" />
                                <!-- Profile icon -->
                                <span style="font-weight: bold; color: #070606;">{{ $technology->username }}</span>
                                <!-- Username -->
                            </a>
                            <span><small class="text-muted">Last updated at
                                    {{ $technology->updated_at }}</small></span>
                        </div>
                        <div style="color: black;">
                            <h5 class="card-title">{{ $technology->title }}</h5>
                            <p class="card-text" id="firstParagraph">{{ $technology->description }}</p>
                        </div>
                        <img src="{{ asset($technology->image) }}" class="card-img-top mt-3"
                            alt="Technology Image" />
                        <div class="d-flex align-items-center mt-3">
                            <div>
                                <a href="#"><i class="far fa-thumbs-up me-3 p-2"></i></a>
                                <!-- Thumbs up icon -->
                                <a href="#"> <i class="far fa-comment me-3 p-2"></i></a>
                                <!-- Comment icon -->
                                <a href="#"> <i class="far fa-share-square me-3 p-2"></i></a>
                                <!-- Share icon -->
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <br />
        </div>
    </div>

    <!-- popular communities -->
    @include('frontend.communities')
    </div>
    </div>

    <!-- footer part for online forum -->
    @include('frontend.footers')
