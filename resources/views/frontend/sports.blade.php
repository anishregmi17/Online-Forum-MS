@include('frontend.header')

<!-- main section starts here -->
@include('frontend.leftsidebar')

<!-- Post (Middle Column) -->
<div class="col-md-6">
    <div class="content">
        <h2>SportsFeed</h2>
        <!-- Post Content Goes Here -->

        <div class="card" style="max-width: 3000px">
            <div class="card-body">
                <div class="profile-section">
                    <a href="profile.html"><img src="/images/anish.png" alt=""
                            style="
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        margin-right: 10px;
                      " />
                        <!-- Profile icon -->
                        <span style="font-weight: bold; color: #070606">u/anishregmi</span>
                        <!-- Username --></a>
                    <span><small class="text-muted">Last updated 3 mins ago</small></span>
                </div>
                <div style="color: black">
                    <h5 class="card-title">
                        The Most Affordable Cloud for AI/ML Inference at Scale
                    </h5>
                    <p class="card-text" id="firstParagraph">
                        Deploy AI/ML production models without headaches on the
                        lowest priced GPUs (starting from $0.02/hr) in the market
                        <span id="dots">...</span><span id="more" style="display: none">Lorem
                            ipsum dolor sit amet consectetur, adipisicing elit.
                            Labore quia hic quam voluptate ipsam obcaecati aperiam, id
                            et quisquam totam libero maxime placeat. Eveniet
                            distinctio iure numquam dolores! Laudantium,
                            expedita!</span>
                    </p>
                    <span onclick="toggleText()" id="myBtn"
                        style="border: none; cursor: pointer; color: rgb(4, 4, 21)">See More...</span>
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

                <img src=https://th.bing.com/th/id/R.14bc86cd473d37b966d22b169b8adc26?rik=aeoA%2bYxshsmzmA&riu=http%3a%2f%2fwww.comparethecloud.net%2fwp-content%2fuploads%2f2018%2f12%2fbinary-1536651_1920.jpg&ehk=BmC4IWwLoeRc4DnH%2bge8k7O9fo1bxlS4LkkkJLpIm88%3d&risl=&pid=ImgRaw&r=0
                    class="card-img-top" alt="..." />
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

<!-- popular communities -->
@include('frontend.communities')
</div>
</div>

<!-- footer part for online forum -->
@include('frontend.footers')
