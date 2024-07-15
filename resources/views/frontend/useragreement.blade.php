@include('frontend.header')

<!-- main section starts here -->
@include('frontend.leftsidebar')

<!-- Post (Middle Column) -->
<div class="col-md-6">
    <div class="content">
        <h2>User Agreement for Online Forum</h2>
        <!-- Post Content Goes Here -->
        <p style="text-align: justify; padding: 10px; border: 1px solid #f8f5f5; background-color: #fcfcfc;">
            This User Agreement is a legal contract between you and Forum governing your access to and use
            of our online forum platform. By accessing or using the Platform, you agree to be bound by this
            Agreement. If you do not agree to abide by the terms of this Agreement, you may not access or
            use the Platform.
        </p>
        @foreach ($useragreements as $useragreement)
            <h4 style="font-size: 1.2em; color: #333; margin-top: 10px;">{{ $useragreement->title }}</h4>
            <p style="text-align: justify; padding: 10px; border: 1px solid #ccc; background-color: #f7f1f1;">
                {{ $useragreement->content }}
            </p>
        @endforeach
        <p style="text-align: justify; padding: 10px; border: 1px solid #f8f5f5; background-color: #fcfcfc;">
            By accessing or using the Platform, you acknowledge that you have read, understood, and agree to
            be bound by this Agreement.
        </p>
    </div>
</div>


<!-- popular communities -->
@include('frontend.communities')
</div>
</div>

<!-- footer part for online forum -->
@include('frontend.footers')
