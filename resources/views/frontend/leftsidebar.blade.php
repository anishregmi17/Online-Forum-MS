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
                        <a href="{{ route('technology') }}" style="text-decoration: none;"><i
                                class="fa-solid fa-laptop"></i> Technology Related Post
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sports') }}" style="text-decoration: none;"><i class="fa-solid fa-medal">
                            </i>Sports Related Post </a>
                    </li>
                </ul>
                <br />

                <h3>Resources</h3>
                <!-- Dashboard Content Goes Here -->
                <ul class="inline-item-list">
                    <li>
                        <a href="{{ route('aboutforum') }}" style="text-decoration: none;"><i
                                class="fa-brands fa-forumbee"></i> About Forum </a>
                    </li>
                    <li>
                        <a href="{{ route('contentpolicy') }}" style="text-decoration: none;"><i
                                class="fa-solid fa-handcuffs"></i> Content Policy </a>
                    </li>
                    <li>
                        <a href="{{ route('privacypolicy') }}" style="text-decoration: none;"><i
                                class="fa-solid fa-shield-halved"></i> Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('useragreement') }}" style="text-decoration: none;"><i
                                class="fa-solid fa-handshake"></i> User Agreement </a>
                    </li>
                </ul>

            </div>
        </div>
