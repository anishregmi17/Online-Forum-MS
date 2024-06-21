
@extends('frontend.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- Post (Middle Column) -->
        <div class="col-md-6">
            <div class="content">
                <h2>Forum Feed</h2>
                <!-- Post Content Goes Here -->
                @foreach($posts as $post)
                <div class="card" style="max-width: 3000px; margin-bottom: 20px;">
                    <div class="card-body">
                        <div class="profile-section">
                            <a href="profile.html">
                                <img src="{{ asset($post->profileimage) }}" alt="" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
                                <!-- Profile icon -->
                                <span style="font-weight: bold; color: #070606">u/{{ $post->username }}</span>
                                <!-- Username -->
                            </a>
                            <span><small class="text-muted">Last updated {{ $post->updated_at->diffForHumans() }}</small></span>
                        </div>
                        <div style="color: black">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text" id="firstParagraph">
                                {{ Str::limit($post->description, 100, '...') }}
                                <span id="dots">...</span><span id="more" style="display: none">{{ $post->description }}</span>
                            </p>
                            <span onclick="toggleText()" id="myBtn" style="border: none; cursor: pointer; color: rgb(4, 4, 21)">See More...</span>
                        </div>
                        <!-- JS for card see more -->
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

                        <img src="{{ asset($post->image) }}" class="card-img-top" alt="...">
                        <div class="d-flex align-items-center icon1">
                            <div>
                                <a href="#"><i class="far fa-thumbs-up me-3 p-2"></i></a>
                                <!-- Thumbs up icon -->
                                <a href="#"><i class="far fa-comment me-3 p-2"></i></a>
                                <!-- Comment icon -->
                                <a href="#"><i class="far fa-comment me-3 p-2"></i></a>
                                <!-- Comment icon -->
                            </div>
                            <div></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
  <!-- footer part for online forum -->
  <footer
  style="
    text-align: center;
    padding: 0.1px;
    background-color: rgb(213, 200, 202);
  "
>
  <p>
    &copy; 2024 POKHARA FORUM. All rights reserved. |
    <a href="contentpolicy.html">Content Policy</a> |
    <a href="privacypolicy.html">Privacy Policy</a> |
    <a href="useragreement.html">User Agreement</a>
  </p>
</footer>

<!-- javascript link part -->
<script
  src="https://kit.fontawesome.com/3110fbbca9.js"
  crossorigin="anonymous"
></script>
<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
@endsection

