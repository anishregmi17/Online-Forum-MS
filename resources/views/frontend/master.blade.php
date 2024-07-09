@include('frontend.header')


@include('frontend.leftsidebar')


<!-- Post (Middle Column) -->
<div class="col-md-6 ">
    <div class="content">
        <h2>Forum Feed</h2>
        <!-- Post Content Goes Here -->


        @foreach ($posts as $post)
            <div class="card mb-3" style="max-width: 3000px">
                <div class="card-body">
                    <div class="profile-section">
                        <a href="profile.html">
                            <img src="{{ asset($post->profileimage) }}" alt="pic"
                                style="
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
     " />
                            <!-- Profile icon -->
                            <span style="font-weight: bold; color: #070606">{{ $post->username }}</span>
                            <!-- Username --></a>
                        <span><small class="text-muted">Last updated at {{ $post->updated_at }}</small></span>
                    </div>
                    <div style="color: black">
                        <h5 class="card-title">
                            {{ $post->title }}
                        </h5>
                        <p class="card-text" id="firstParagraph">
                            {{ $post->description }}
                        </p>
                    </div>

                    <img src="{{ asset($post->image) }}" class="card-img-top" alt="..." />
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
        @endforeach
    </div>
</div>
@include('frontend.communities')
</div>
</div>



{{-- @include('frontend.pagination') --}}

@include('frontend.footers')
