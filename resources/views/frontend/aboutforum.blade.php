@include('frontend.header')

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
                        <a href="{{ url('aboutforum') }}">About Forum <i class="fa-brands fa-forumbee"></i></a>
                    </li>
                    <li>
                        <a href="{{ url('contentpolicy') }}">Content Policy <i class="fa-solid fa-handcuffs"></i></a>
                    </li>
                    <li>
                        <a href="{{ url('privacypolicy') }}">Privacy Policy <i
                                class="fa-solid fa-shield-halved"></i></a>
                    </li>
                    <li>
                        <a href="{{ url('useragreement') }}">User Agreement <i class="fa-solid fa-handshake"></i></a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Post (Middle Column) -->
        <div class="col-md-6">
            <div class="content">
                <h2>About Forum</h2>
                <!-- Post Content Goes Here -->
                <p style="text-align: justify; padding: 10px; border: 1px solid #f8f5f5; background-color: #fcfcfc;">
                    Welcome to our online forum, where passionate individuals from diverse backgrounds
                    converge to share knowledge, engage in discussions, and foster connections across a wide array
                    of topics. Whether you're a tech enthusiast, a sports aficionado, a health-conscious individual,
                    or someone eager to delve into the realms of education and beyond, our forum provides a dynamic
                    platform for exploration and interaction.
                </p>
                @foreach ($aboutforums as $aboutforum)
                    <br>
                    <h4 style="font-size: 1.2em; color: #333; margin-top: 10px;">{{ $aboutforum->text }}</h4>
                    <p style="text-align: justify; padding: 10px; border: 1px solid #ccc; background-color: #f7f1f1;">
                        {{ $aboutforum->description }}</p>
                @endforeach
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
