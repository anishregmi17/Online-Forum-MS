<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Forum</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
</head>

<body>
    <nav class="sticky-top anish">
        <div class="fluid-container pt-2">
            <div class="row">
                <div class="col-md-3">
                    <nav-logo class="p-2">
                        <a href="index.html">
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

                <div class="col-md-0.5" style="padding-top: 9px; padding-left: 20px">
                    <a href=""><i class="fa fa-bell" style="color: black"></i></a>
                    &nbsp;&nbsp;
                </div>

                <div class="col-md-0.5" style="padding-top: 9px; padding-left: 20px">
                    <a href=""><i class="fa fa-comment-dots" style="color: black"></i></a>&nbsp;&nbsp;
                </div>

                <div class="col-md-1">
                    <div style="margin-top: 10px">
                        <a href="create.html"
                            style="
                  color: black;
                  border: 1px solid rgb(9, 6, 6);
                  background-color: transparent;
                  text-decoration: none;
                "><i
                                class="fa-solid fa-plus"><span style="font-size: smaller">Create</span></i></a>
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
                                    <a class="dropdown-item" href="profile.html">View Profile</a>
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
                                <li><a class="dropdown-item" href="login.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr />
    </nav>

    <!-- main section starts here -->
    <div class="container-fluid">
        <div class="row">
            <!-- Dashboard (Left Column) -->
            <div class="col-md-3" id="sticky-dashboard">
                <div class="content">
                    <!-- Dashboard Content Goes Here -->
                    <ul class="inline-item-list">
                        <li>
                            <a href="index.html" class="text-decoration-none">
                                <i class="fa-solid fa-house"></i> Home</a>
                        </li>
                    </ul>
                    <ul class="inline-item-list">
                        <li>
                            <a href="sports.html" class="text-decoration-none">
                                <i class="fa-solid fa-fire mb-3"></i> Popular</a>
                        </li>
                    </ul>

                    <h3>Categories</h3>
                    <!-- Dashboard Content Goes Here -->
                    <ul class="inline-item-list">
                        <li>
                            <a href="health.html">Health Related Post <i class="fa-regular fa-hospital"></i></a>
                        </li>
                        <li>
                            <a href="sports.html">Sports Related Post <i class="fa-solid fa-medal"></i></a>
                        </li>
                        <li>
                            <a href="technology.html">Technology Related Post <i class="fa-solid fa-laptop"></i></a>
                        </li>
                        <li>
                            <a href="travel.html">Travel Related Post <i class="fa-solid fa-location-dot"></i></a>
                        </li>
                    </ul>
                    <br />
                    <h3>Resources</h3>
                    <!-- Dashboard Content Goes Here -->
                    <ul class="inline-item-list">
                        <li>
                            <a href="{{ route('aboutforum') }}">About Forum <i class="fa-brands fa-forumbee"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('contentpolicy') }}">Content Policy <i
                                    class="fa-solid fa-handcuffs"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('privacypolicy') }}">Privacy Policy <i
                                    class="fa-solid fa-shield-halved"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('useragreement') }}">User Agreement <i
                                    class="fa-solid fa-handshake"></i></a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Post (Middle Column) -->
            <!-- Post (Middle Column) -->
            <!-- Post (Middle Column) -->
            <div class="col-md-6">
                <div class="content">
                    <h2>Content Policy for Online Forum</h2>
                    <!-- Post Content Goes Here -->
                    <p
                        style="text-align: justify; padding: 10px; border: 1px solid #f8f5f5; background-color: #fcfcfc;">
                        Welcome to our online forum! We're excited to have you join our community where users can share
                        and discuss various topics including sports, health, entertainment, and more. To ensure a
                        positive and enriching experience for all members, we have established the following content
                        policy:
                        <br>

                        @foreach ($contentpolicies as $contentpolicy)
                            <h4 style="font-size: 1.2em; color: #333; margin-top: 10px;">{{ $contentpolicy->title }}
                            </h4>
                            <p
                                style="text-align: justify; padding: 10px; border: 1px solid #ccc; background-color: #f7f1f1;">
                                {{ $contentpolicy->content }}
                            </p>
                        @endforeach
                        By participating in our online forum, you agree to abide by these content policies. We value
                        the diverse perspectives and contributions of our members and strive to maintain a welcoming and
                        inclusive environment for everyone.

                        Thank you for being a part of our community!
                    </p>
                </div>
            </div>



            <!-- popular communities -->
            <div class="col-md-3">
                <div class="content sticky-sidebar">
                    <h3>Popular Topic Communities</h3>
                    <!-- Popular Communities Content Goes Here -->
                    <!-- Add more popular communities content here -->
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <span class="font-weight-bold community-name p-2">r/tech <i
                                        class="fa-solid fa-computer"></i></span>
                                <!-- <img src="profile_icons/tech_icon.png" alt="Tech Community Icon" class="community-icon"> -->
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="font-weight-bold community-name p-2">r/sports <i
                                        class="fa-solid fa-medal"></i></span>
                                <!-- <img src="profile_icons/sports_icon.png" alt="Sports Community Icon" class="community-icon"> -->
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="font-weight-bold community-name p-2">r/health <i
                                        class="fa-solid fa-hospital"></i></span>

                                <!-- <img src="profile_icons/health_icon.png" alt="Health Community Icon" class="community-icon"> -->
                            </a>
                        </li>
                        <!-- Add more communities -->
                        <li>
                            <a href="#">
                                <span class="font-weight-bold community-name p-2">r/travel <i
                                        class="fa-solid fa-plane"></i></span>
                                <!-- <img src="profile_icons/travel_icon.png" alt="Travel Community Icon" class="community-icon"> -->
                            </a>
                        </li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <!-- footer part for online forum -->
    <footer
        style="
        text-align: center;
        padding: 0.1px;
        background-color: rgb(213, 200, 202);
      ">
        <p>
            &copy; 2024 POKHARA FORUM. All rights reserved. |
            <a href="{{ route('contentpolicy') }}">Content Policy</a> |
            <a href="{{ route('privacypolicy') }}">Privacy Policy</a> |
            <a href="{{ route('useragreement') }}">User Agreement</a>
        </p>
    </footer>

    <!-- javascript link part -->
    <script src="https://kit.fontawesome.com/3110fbbca9.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
