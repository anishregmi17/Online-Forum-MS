@include('frontend.header')

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
                    <img src="{{ asset($technology->image) }}" class="card-img-top mt-3" alt="Technology Image" />
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
