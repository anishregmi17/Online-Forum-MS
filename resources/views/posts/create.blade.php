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
                        <a href="{{ 'home' }}" class="text-decoration-none">
                            <i class="fa-solid fa-house"></i> Home</a>
                    </li>
                </ul>
                <ul class="inline-item-list">
                    <li>
                        <a href="{{ 'popular' }}" class="text-decoration-none">
                            <i class="fa-solid fa-fire mb-3"></i> Popular</a>
                    </li>
                </ul>

                <h3>Categories</h3>
                <!-- Dashboard Content Goes Here -->
                <ul class="inline-item-list">
                    <li>
                        <a href="{{ route('technology') }}"><i class="fa-solid fa-laptop"></i> Technology Related Post
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sports') }}"><i class="fa-solid fa-medal"> </i>Sports Related Post </a>
                    </li>
                </ul>
                <br />

                <h3>Resources</h3>
                <!-- Dashboard Content Goes Here -->
                <ul class="inline-item-list">
                    <li>
                        <a href="{{ route('aboutforum') }}"><i class="fa-brands fa-forumbee"></i> About Forum </a>
                    </li>
                    <li>
                        <a href="{{ route('contentpolicy') }}"><i class="fa-solid fa-handcuffs"></i> Content Policy </a>
                    </li>
                    <li>
                        <a href="{{ route('privacypolicy') }}"><i class="fa-solid fa-shield-halved"></i> Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('useragreement') }}"><i class="fa-solid fa-handshake"></i> User Agreement </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Post (Middle Column) -->
        <div class="col-md-6">
            <div class="content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <h1>Create New Post</h1>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('admin.posts.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="profileimage">Profile Image</label>
                                    <input type="file" name="profileimage" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-success">Create Post</button>
                            </form>
                        </div>
                    </div>
                </div>
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
