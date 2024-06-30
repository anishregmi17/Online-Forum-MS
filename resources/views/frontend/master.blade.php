<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Forum</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="/css/style.css" />
  </head>

  <body>
    <nav class="sticky-top anish">
      <div class="fluid-container pt-2">
        <div class="row">
          <div class="col-md-3">
            <nav-logo class="p-2">
              <a href="index.html">
                <img
                  src="/images/image2.png"
                  alt="Logo"
                  height="50x"
                  width="100px"
              /></a>
            </nav-logo>
          </div>
          <div class="col-md-6">
            <form class="form-inline my-2 my-lg-0 d-flex border-3 bg-light">
              <input
                class="form-control mr-sm-2 flex-grow-1"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
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
            <a href=""
              ><i class="fa fa-comment-dots" style="color: black"></i></a
            >&nbsp;&nbsp;
          </div>

          <div class="col-md-1">
            <div style="margin-top: 10px">
              <a
                href="create.html"
                style="
                  color: black;
                  border: 1px solid rgb(9, 6, 6);
                  background-color: transparent;
                  text-decoration: none;
                "
                ><i class="fa-solid fa-plus"
                  ><span style="font-size: smaller">Create</span></i
                ></a
              >
            </div>
          </div>
          <div class="col-md-1">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="fas fa-user"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li>
                    <a class="dropdown-item" href="profile.html"
                      >View Profile</a
                    >
                  </li>
                  <nav>
                    <ul>
                      <li>
                        <a href="#" class="text">
                          <div>
                            <!-- Dark mode toggle button -->
                            <button
                              id="darkModeToggle"
                              style="
                                background-color: transparent;
                                border: none;
                                color: rgb(11, 11, 11);
                                padding-left: 22px;
                              "
                            >
                              Mode
                              <i class="far fa-sun" style="display: inline"></i>
                              <!-- Light mode icon -->
                              <i
                                class="far fa-moon"
                                style="display: none; color: #6c0b0b"
                              ></i>
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
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    <a class="dropdown-item" href="#" onclick="event.preventDefault(); confirmLogout();">
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
    <div class="container-fluid">
      <div class="row">
        <!-- Dashboard (Left Column) -->
        <div class="col-md-3" id="sticky-dashboard">
          <div class="content">
            <!-- Dashboard Content Goes Here -->
            <ul class="inline-item-list">
              <li>
                <a href="index.html" class="text-decoration-none">
                  <i class="fa-solid fa-house"></i> Home</a
                >
              </li>
            </ul>
            <ul class="inline-item-list">
              <li>
                <a href="sports.html" class="text-decoration-none">
                  <i class="fa-solid fa-fire mb-3"></i> Popular</a
                >
              </li>
            </ul>

            @foreach ($categories as $category)
            <h3>Categories</h3>
            <!-- Dashboard Content Goes Here -->
            <ul class="inline-item-list">
              <li>
                <a href="health.html"
                  >{{$category->title}} <i class="fa-regular fa-hospital"></i
                ></a>
              </li>
                          </ul>
                @endforeach


              {{-- <li>
                <a href="sports.html"
                  >Sports Related Post <i class="fa-solid fa-medal"></i
                ></a>
              </li>
              <li>
                <a href="technology.html"
                  >Technology Related Post <i class="fa-solid fa-laptop"></i
                ></a>
              </li>
              <li>
                <a href="travel.html"
                  >Travel Related Post <i class="fa-solid fa-location-dot"></i
                ></a>
              </li> --}}





            <br />


            <h3>Resources</h3>
            <!-- Dashboard Content Goes Here -->
            <ul class="inline-item-list">
              <li>
                <a href="{{ route('aboutforum') }}"
                  >About Forum <i class="fa-brands fa-forumbee"></i
                ></a>
              </li>
              <li>
                <a href="contentpolicy.html"
                  >Content Policy <i class="fa-solid fa-handcuffs"></i
                ></a>
              </li>
              <li>
                <a href="privacypolicy.html"
                  >Privacy Policy <i class="fa-solid fa-shield-halved"></i
                ></a>
              </li>
              <li>
                <a href="useragreement.html"
                  >User Agreement <i class="fa-solid fa-handshake"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Post (Middle Column) -->
        <div class="col-md-6">
          <div class="content">
            <h2>Forum Feed</h2>
            <!-- Post Content Goes Here -->

            <div class="card" style="max-width: 3000px">
              <div class="card-body">
                <div class="profile-section">
                  <a href="profile.html"
                    ><img
                      src="/images/anish.png"
                      alt=""
                      style="
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        margin-right: 10px;
                      "
                    />
                    <!-- Profile icon -->
                    <span style="font-weight: bold; color: #070606"
                      >u/anishregmi</span
                    >
                    <!-- Username --></a
                  >
                  <span
                    ><small class="text-muted"
                      >Last updated 3 mins ago</small
                    ></span
                  >
                </div>
                <div style="color: black">
                  <h5 class="card-title">
                    The Most Affordable Cloud for AI/ML Inference at Scale
                  </h5>
                  <p class="card-text" id="firstParagraph">
                    Deploy AI/ML production models without headaches on the
                    lowest priced GPUs (starting from $0.02/hr) in the market
                    <span id="dots">...</span
                    ><span id="more" style="display: none"
                      >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Labore quia hic quam voluptate ipsam obcaecati aperiam, id
                      et quisquam totam libero maxime placeat. Eveniet
                      distinctio iure numquam dolores! Laudantium,
                      expedita!</span
                    >
                  </p>
                  <span
                    onclick="toggleText()"
                    id="myBtn"
                    style="border: none; cursor: pointer; color: rgb(4, 4, 21)"
                    >See More...</span
                  >
                </div>
                <!-- js for card see more -->
                <script>
                  function toggleText() {
                    var dots = document.getElementById("dots");
                    var moreText = document.getElementById("more");
                    var btnText = document.getElementById("myBtn");

                    if (dots.style.display === "none") {
                      dots.style.display = "inline";
                      moreText.style.display = "none";
                      btnText.innerHTML = "See More...";
                    } else {
                      dots.style.display = "none";
                      moreText.style.display = "inline";
                      btnText.innerHTML = "See Less";
                    }
                  }
                </script>

                <img
                  src=https://th.bing.com/th/id/R.14bc86cd473d37b966d22b169b8adc26?rik=aeoA%2bYxshsmzmA&riu=http%3a%2f%2fwww.comparethecloud.net%2fwp-content%2fuploads%2f2018%2f12%2fbinary-1536651_1920.jpg&ehk=BmC4IWwLoeRc4DnH%2bge8k7O9fo1bxlS4LkkkJLpIm88%3d&risl=&pid=ImgRaw&r=0
                  class="card-img-top"
                  alt="..."
                />
                <div class="d-flex align-items-center icon1">
                  <div>
                    <a href=""><i class="far fa-thumbs-up me-3 p-2"></i></a>
                    <!-- Thumbs up icon -->
                    <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                    <!-- Comment icon -->
                    <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                    <!-- Comment icon -->
                  </div>
                  <div></div>
                </div>
              </div>
            </div>

            <br />
            <div class="card" style="max-width: 3000px">
              <div class="card-body">
                <div class="profile-section">
                  <a href="profile.html"
                    ><img
                      src="/images/anish.png"
                      alt=""
                      style="
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        margin-right: 10px;
                      "
                    />
                    <!-- Profile icon -->
                    <span style="font-weight: bold; color: #070606"
                      >u/anishregmi</span
                    >
                    <!-- Username --></a
                  >
                  <span
                    ><small class="text-muted"
                      >Last updated 3 mins ago</small
                    ></span
                  >
                </div>
                <div style="color: black">
                  <h5 class="card-title">
                    The Most Affordable Cloud for AI/ML Inference at Scale
                  </h5>
                  <p class="card-text" id="firstParagraph">
                    Deploy AI/ML production models without headaches on the
                    lowest priced GPUs (starting from $0.02/hr) in the market
                    <span id="dots">...</span
                    ><span id="more" style="display: none"
                      >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Labore quia hic quam voluptate ipsam obcaecati aperiam, id
                      et quisquam totam libero maxime placeat. Eveniet
                      distinctio iure numquam dolores! Laudantium,
                      expedita!</span
                    >
                  </p>
                  <span
                    onclick="toggleText()"
                    id="myBtn"
                    style="border: none; cursor: pointer; color: rgb(4, 4, 21)"
                    >See More...</span
                  >
                </div>
                <!-- js for card see more -->
                <script>
                  function toggleText1() {
                    var dots = document.getElementById("dots");
                    var moreText = document.getElementById("more");
                    var btnText = document.getElementById("myBtn");

                    if (dots.style.display === "none") {
                      dots.style.display = "inline";
                      moreText.style.display = "none";
                      btnText.innerHTML = "See More...";
                    } else {
                      dots.style.display = "none";
                      moreText.style.display = "inline";
                      btnText.innerHTML = "See Less";
                    }
                  }
                </script>

                <img
                  src="https://en.sepoin.com/wp-content/uploads/2020/01/AI-ML-4.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="d-flex align-items-center icon1">
                  <div>
                    <a href=""><i class="far fa-thumbs-up me-3 p-2"></i></a>
                    <!-- Thumbs up icon -->
                    <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                    <!-- Comment icon -->
                    <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                    <!-- Comment icon -->
                  </div>
                  <div></div>
                </div>
              </div>
            </div>

            <br />
            <div class="card" style="max-width: 3000px">
              <div class="card-body">
                <div class="profile-section">
                  <a href="profile.html"
                    ><img
                      src="/images/anish.png"
                      alt=""
                      style="
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        margin-right: 10px;
                      "
                    />
                    <!-- Profile icon -->
                    <span style="font-weight: bold; color: #070606"
                      >u/anishregmi</span
                    >
                    <!-- Username --></a
                  >
                  <span
                    ><small class="text-muted"
                      >Last updated 3 mins ago</small
                    ></span
                  >
                </div>
                <div style="color: black">
                  <h5 class="card-title">
                    The Most Affordable Cloud for AI/ML Inference at Scale
                  </h5>
                  <p class="card-text" id="firstParagraph">
                    Deploy AI/ML production models without headaches on the
                    lowest priced GPUs (starting from $0.02/hr) in the market
                    <span id="dots">...</span
                    ><span id="more" style="display: none"
                      >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Labore quia hic quam voluptate ipsam obcaecati aperiam, id
                      et quisquam totam libero maxime placeat. Eveniet
                      distinctio iure numquam dolores! Laudantium,
                      expedita!</span
                    >
                  </p>
                  <span
                    onclick="toggleText()"
                    id="myBtn"
                    style="border: none; cursor: pointer; color: rgb(4, 4, 21)"
                    >See More...</span
                  >
                </div>
                <!-- js for card see more -->
                <script>
                  function toggleText() {
                    var dots = document.getElementById("dots");
                    var moreText = document.getElementById("more");
                    var btnText = document.getElementById("myBtn");

                    if (dots.style.display === "none") {
                      dots.style.display = "inline";
                      moreText.style.display = "none";
                      btnText.innerHTML = "See More...";
                    } else {
                      dots.style.display = "none";
                      moreText.style.display = "inline";
                      btnText.innerHTML = "See Less";
                    }
                  }
                </script>

                <img
                  src="https://en.sepoin.com/wp-content/uploads/2020/01/AI-ML-4.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="d-flex align-items-center icon1">
                  <div>
                    <a href=""><i class="far fa-thumbs-up me-3 p-2"></i></a>
                    <!-- Thumbs up icon -->
                    <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                    <!-- Comment icon -->
                    <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                    <!-- Comment icon -->
                  </div>
                  <div></div>
                </div>
              </div>
            </div>

            <br />
            <div class="card" style="max-width: 3000px">
              <div class="card-body">
                <div class="profile-section">
                  <a href="profile.html"
                    ><img
                      src="/images/anish.png"
                      alt=""
                      style="
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        margin-right: 10px;
                      "
                    />
                    <!-- Profile icon -->
                    <span style="font-weight: bold; color: #070606"
                      >u/anishregmi</span
                    >
                    <!-- Username --></a
                  >
                  <span
                    ><small class="text-muted"
                      >Last updated 3 mins ago</small
                    ></span
                  >
                </div>
                <div style="color: black">
                  <h5 class="card-title">
                    The Most Affordable Cloud for AI/ML Inference at Scale
                  </h5>
                  <p class="card-text" id="firstParagraph">
                    Deploy AI/ML production models without headaches on the
                    lowest priced GPUs (starting from $0.02/hr) in the market
                    <span id="dots">...</span
                    ><span id="more" style="display: none"
                      >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                      Labore quia hic quam voluptate ipsam obcaecati aperiam, id
                      et quisquam totam libero maxime placeat. Eveniet
                      distinctio iure numquam dolores! Laudantium,
                      expedita!</span
                    >
                  </p>
                  <span
                    onclick="toggleText()"
                    id="myBtn"
                    style="border: none; cursor: pointer; color: rgb(4, 4, 21)"
                    >See More...</span
                  >
                </div>
                <!-- js for card see more -->
                <script>
                  function toggleText() {
                    var dots = document.getElementById("dots");
                    var moreText = document.getElementById("more");
                    var btnText = document.getElementById("myBtn");

                    if (dots.style.display === "none") {
                      dots.style.display = "inline";
                      moreText.style.display = "none";
                      btnText.innerHTML = "See More...";
                    } else {
                      dots.style.display = "none";
                      moreText.style.display = "inline";
                      btnText.innerHTML = "See Less";
                    }
                  }
                </script>

                <img
                  src="https://en.sepoin.com/wp-content/uploads/2020/01/AI-ML-4.jpg"
                  class="card-img-top"
                  alt="..."
                />
                <div class="d-flex align-items-center icon1">
                  <div>
                    <a href=""><i class="far fa-thumbs-up me-3 p-2"></i></a>
                    <!-- Thumbs up icon -->
                    <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                    <!-- Comment icon -->
                    <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                    <!-- Comment icon -->
                  </div>
                  <div></div>
                </div>
              </div>
            </div>
            <br />
            <div class="card" style="max-width: 3000px">
                <div class="card-body">
                  <div class="profile-section">
                    <a href="profile.html"
                      ><img
                        src="/images/anish.png"
                        alt=""
                        style="
                          width: 40px;
                          height: 40px;
                          border-radius: 50%;
                          margin-right: 10px;
                        "
                      />
                      <!-- Profile icon -->
                      <span style="font-weight: bold; color: #070606"
                        >u/anishregmi</span
                      >
                      <!-- Username --></a
                    >
                    <span
                      ><small class="text-muted"
                        >Last updated 3 mins ago</small
                      ></span
                    >
                  </div>
                  <div style="color: black">
                    <h5 class="card-title">
                      The Most Affordable Cloud for AI/ML Inference at Scale
                    </h5>
                    <p class="card-text" id="firstParagraph">
                      Deploy AI/ML production models without headaches on the
                      lowest priced GPUs (starting from $0.02/hr) in the market
                      <span id="dots">...</span
                      ><span id="more" style="display: none"
                        >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Labore quia hic quam voluptate ipsam obcaecati aperiam, id
                        et quisquam totam libero maxime placeat. Eveniet
                        distinctio iure numquam dolores! Laudantium,
                        expedita!</span
                      >
                    </p>
                    <span
                      onclick="toggleText()"
                      id="myBtn"
                      style="border: none; cursor: pointer; color: rgb(4, 4, 21)"
                      >See More...</span
                    >
                  </div>
                  <!-- js for card see more -->
                  <script>
                    function toggleText() {
                      var dots = document.getElementById("dots");
                      var moreText = document.getElementById("more");
                      var btnText = document.getElementById("myBtn");

                      if (dots.style.display === "none") {
                        dots.style.display = "inline";
                        moreText.style.display = "none";
                        btnText.innerHTML = "See More...";
                      } else {
                        dots.style.display = "none";
                        moreText.style.display = "inline";
                        btnText.innerHTML = "See Less";
                      }
                    }
                  </script>

                  <img
                    src=https://th.bing.com/th/id/R.14bc86cd473d37b966d22b169b8adc26?rik=aeoA%2bYxshsmzmA&riu=http%3a%2f%2fwww.comparethecloud.net%2fwp-content%2fuploads%2f2018%2f12%2fbinary-1536651_1920.jpg&ehk=BmC4IWwLoeRc4DnH%2bge8k7O9fo1bxlS4LkkkJLpIm88%3d&risl=&pid=ImgRaw&r=0
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="d-flex align-items-center icon1">
                    <div>
                      <a href=""><i class="far fa-thumbs-up me-3 p-2"></i></a>
                      <!-- Thumbs up icon -->
                      <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                      <!-- Comment icon -->
                      <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                      <!-- Comment icon -->
                    </div>
                    <div></div>
                  </div>
                </div>
              </div>

              <br />
              <div class="card" style="max-width: 3000px">
                <div class="card-body">
                  <div class="profile-section">
                    <a href="profile.html"
                      ><img
                        src="/images/anish.png"
                        alt=""
                        style="
                          width: 40px;
                          height: 40px;
                          border-radius: 50%;
                          margin-right: 10px;
                        "
                      />
                      <!-- Profile icon -->
                      <span style="font-weight: bold; color: #070606"
                        >u/anishregmi</span
                      >
                      <!-- Username --></a
                    >
                    <span
                      ><small class="text-muted"
                        >Last updated 3 mins ago</small
                      ></span
                    >
                  </div>
                  <div style="color: black">
                    <h5 class="card-title">
                      The Most Affordable Cloud for AI/ML Inference at Scale
                    </h5>
                    <p class="card-text" id="firstParagraph">
                      Deploy AI/ML production models without headaches on the
                      lowest priced GPUs (starting from $0.02/hr) in the market
                      <span id="dots">...</span
                      ><span id="more" style="display: none"
                        >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Labore quia hic quam voluptate ipsam obcaecati aperiam, id
                        et quisquam totam libero maxime placeat. Eveniet
                        distinctio iure numquam dolores! Laudantium,
                        expedita!</span
                      >
                    </p>
                    <span
                      onclick="toggleText()"
                      id="myBtn"
                      style="border: none; cursor: pointer; color: rgb(4, 4, 21)"
                      >See More...</span
                    >
                  </div>
                  <!-- js for card see more -->
                  <script>
                    function toggleText1() {
                      var dots = document.getElementById("dots");
                      var moreText = document.getElementById("more");
                      var btnText = document.getElementById("myBtn");

                      if (dots.style.display === "none") {
                        dots.style.display = "inline";
                        moreText.style.display = "none";
                        btnText.innerHTML = "See More...";
                      } else {
                        dots.style.display = "none";
                        moreText.style.display = "inline";
                        btnText.innerHTML = "See Less";
                      }
                    }
                  </script>

                  <img
                    src="https://en.sepoin.com/wp-content/uploads/2020/01/AI-ML-4.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="d-flex align-items-center icon1">
                    <div>
                      <a href=""><i class="far fa-thumbs-up me-3 p-2"></i></a>
                      <!-- Thumbs up icon -->
                      <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                      <!-- Comment icon -->
                      <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                      <!-- Comment icon -->
                    </div>
                    <div></div>
                  </div>
                </div>
              </div>

              <br />
              <div class="card" style="max-width: 3000px">
                <div class="card-body">
                  <div class="profile-section">
                    <a href="profile.html"
                      ><img
                        src="/images/anish.png"
                        alt=""
                        style="
                          width: 40px;
                          height: 40px;
                          border-radius: 50%;
                          margin-right: 10px;
                        "
                      />
                      <!-- Profile icon -->
                      <span style="font-weight: bold; color: #070606"
                        >u/anishregmi</span
                      >
                      <!-- Username --></a
                    >
                    <span
                      ><small class="text-muted"
                        >Last updated 3 mins ago</small
                      ></span
                    >
                  </div>
                  <div style="color: black">
                    <h5 class="card-title">
                      The Most Affordable Cloud for AI/ML Inference at Scale
                    </h5>
                    <p class="card-text" id="firstParagraph">
                      Deploy AI/ML production models without headaches on the
                      lowest priced GPUs (starting from $0.02/hr) in the market
                      <span id="dots">...</span
                      ><span id="more" style="display: none"
                        >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Labore quia hic quam voluptate ipsam obcaecati aperiam, id
                        et quisquam totam libero maxime placeat. Eveniet
                        distinctio iure numquam dolores! Laudantium,
                        expedita!</span
                      >
                    </p>
                    <span
                      onclick="toggleText()"
                      id="myBtn"
                      style="border: none; cursor: pointer; color: rgb(4, 4, 21)"
                      >See More...</span
                    >
                  </div>
                  <!-- js for card see more -->
                  <script>
                    function toggleText() {
                      var dots = document.getElementById("dots");
                      var moreText = document.getElementById("more");
                      var btnText = document.getElementById("myBtn");

                      if (dots.style.display === "none") {
                        dots.style.display = "inline";
                        moreText.style.display = "none";
                        btnText.innerHTML = "See More...";
                      } else {
                        dots.style.display = "none";
                        moreText.style.display = "inline";
                        btnText.innerHTML = "See Less";
                      }
                    }
                  </script>

                  <img
                    src="https://en.sepoin.com/wp-content/uploads/2020/01/AI-ML-4.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="d-flex align-items-center icon1">
                    <div>
                      <a href=""><i class="far fa-thumbs-up me-3 p-2"></i></a>
                      <!-- Thumbs up icon -->
                      <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                      <!-- Comment icon -->
                      <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                      <!-- Comment icon -->
                    </div>
                    <div></div>
                  </div>
                </div>
              </div>

              <br />
              <div class="card" style="max-width: 3000px">
                <div class="card-body">
                  <div class="profile-section">
                    <a href="profile.html"
                      ><img
                        src="/images/anish.png"
                        alt=""
                        style="
                          width: 40px;
                          height: 40px;
                          border-radius: 50%;
                          margin-right: 10px;
                        "
                      />
                      <!-- Profile icon -->
                      <span style="font-weight: bold; color: #070606"
                        >u/anishregmi</span
                      >
                      <!-- Username --></a
                    >
                    <span
                      ><small class="text-muted"
                        >Last updated 3 mins ago</small
                      ></span
                    >
                  </div>
                  <div style="color: black">
                    <h5 class="card-title">
                      The Most Affordable Cloud for AI/ML Inference at Scale
                    </h5>
                    <p class="card-text" id="firstParagraph">
                      Deploy AI/ML production models without headaches on the
                      lowest priced GPUs (starting from $0.02/hr) in the market
                      <span id="dots">...</span
                      ><span id="more" style="display: none"
                        >Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Labore quia hic quam voluptate ipsam obcaecati aperiam, id
                        et quisquam totam libero maxime placeat. Eveniet
                        distinctio iure numquam dolores! Laudantium,
                        expedita!</span
                      >
                    </p>
                    <span
                      onclick="toggleText()"
                      id="myBtn"
                      style="border: none; cursor: pointer; color: rgb(4, 4, 21)"
                      >See More...</span
                    >
                  </div>
                  <!-- js for card see more -->
                  <script>
                    function toggleText() {
                      var dots = document.getElementById("dots");
                      var moreText = document.getElementById("more");
                      var btnText = document.getElementById("myBtn");

                      if (dots.style.display === "none") {
                        dots.style.display = "inline";
                        moreText.style.display = "none";
                        btnText.innerHTML = "See More...";
                      } else {
                        dots.style.display = "none";
                        moreText.style.display = "inline";
                        btnText.innerHTML = "See Less";
                      }
                    }
                  </script>

                  <img
                    src="https://en.sepoin.com/wp-content/uploads/2020/01/AI-ML-4.jpg"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="d-flex align-items-center icon1">
                    <div>
                      <a href=""><i class="far fa-thumbs-up me-3 p-2"></i></a>
                      <!-- Thumbs up icon -->
                      <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                      <!-- Comment icon -->
                      <a href=""> <i class="far fa-comment me-3 p-2"></i></a>
                      <!-- Comment icon -->
                    </div>
                    <div></div>
                  </div>
                </div>
              </div>
              <br />
          </div>
        </div>

@include('frontend.communities')

      </div>
    </div>



    <!-- pagination starts here -->
    <div>
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"
              >Previous</a
            >
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="sports.html">2</a></li>
          <li class="page-item"><a class="page-link" href="health.html">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </div>

    @yield('footer')
