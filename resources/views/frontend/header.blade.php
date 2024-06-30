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
