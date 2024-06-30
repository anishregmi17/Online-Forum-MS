@extends('admin.layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8" style="margin-top: 1rem;"> <!-- Add margin-top here -->
<h1 class="text-center mb-4 mt-5" style="font-size: 2.5em; color: #333; text-shadow: 1px 1px 1px #051772;">Pokhara Forum</h1>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="card-title">Introduction</h2>
                    <p class="card-text">
                        Welcome to the documentation for Pokhara Online Forum. This guide will provide you with all the necessary information to navigate and utilize the forum effectively.
                    </p>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="card-title">Posting Guidelines</h2>
                        <li>Be respectful to other members</li>
                        <li>Do not post offensive content</li>
                        <li>Stay on topic and keep discussions relevant</li>
                        <li>Use appropriate language</li>
                        <li>Avoid spamming or self-promotion</li>
                    </ol>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h2 class="card-title">Support</h2>
                    <p class="card-text">
                        Need further assistance? Contact our support team for help:
                    </p>
                    <ul class="card-text">
                        <li>Email: support@pokharaonlineforum.com</li>
                        <li>Visit our Help Center for FAQs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
