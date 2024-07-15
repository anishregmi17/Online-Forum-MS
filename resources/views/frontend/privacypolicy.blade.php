@include('frontend.header')

<!-- main section starts here -->
@include('frontend.leftsidebar')

<!-- Post (Middle Column) -->
<div class="col-md-6">
    <div class="content">
        <h2>Privacy Policy for Online Forum</h2>
        <!-- Post Content Goes Here -->
        <p style="text-align: justify; padding: 10px; border: 1px solid #f8f5f5; background-color: #fcfcfc;">
            At our online forum, we are committed to protecting the privacy and confidentiality of our
            users' personal information. This privacy policy outlines how we collect, use, disclose, and
            safeguard the information you provide while using our platform.
        </p>
        @foreach ($privacypolicies as $privacypolicy)
            <h4 style="font-size: 1.2em; color: #333; margin-top: 10px;">{{ $privacypolicy->title }}</h4>
            <p style="text-align: justify; padding: 10px; border: 1px solid #ccc; background-color: #f7f1f1;">
                {{ $privacypolicy->content }}
            </p>
        @endforeach
        <h6>Last updated: 2024 May 9</h6>
    </div>
</div>


<!-- popular communities -->
@include('frontend.communities')
</div>
</div>

<!-- footer part for online forum -->
@include('frontend.footers')
