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
                        <a href="{{ 'home' }}" class="text-decoration-none">
                            <i class="fa-solid fa-fire mb-3"></i> Popular</a>
                    </li>
                </ul>

                <h3>Categories</h3>
                <!-- Dashboard Content Goes Here -->
                @foreach ($categories as $category)
                    <ul class="inline-item-list">
                        <li>
                            <a href="{{ route('sports') }}">{{ $category->title }}-<i
                                    class="{{ $category->icon }}"></i></a>
                        </li>
                    </ul>
                @endforeach
                <br />


                {{-- <li>
                <a href="sports.html"
                  >Sports Related Post <i class="fa-solid fa-medal"></i
                ></a>
              </li>
              <li>
                <a href="technology.html"
                  >Technology Related Post <i class="fa-solid fa-laptop"></i
                ></a>
              </li>
              <li>
                <li>
                <a href="technology.html"
                  >Health Related Post <i class="fa-regular fa-hospital"></i
                ></a>
              </li>
              <li>
                <a href="travel.html"
                  >Travel Related Post <i class="fa-solid fa-location-dot"></i
                ></a>
              </li> --}}

                <h3>Resources</h3>
                <!-- Dashboard Content Goes Here -->
                <ul class="inline-item-list">
                    <li>
                        <a href="{{ route('aboutforum') }}">About Forum <i class="fa-brands fa-forumbee"></i></a>
                    </li>
                    <li>
                        <a href="contentpolicy.html">Content Policy <i class="fa-solid fa-handcuffs"></i></a>
                    </li>
                    <li>
                        <a href="privacypolicy.html">Privacy Policy <i class="fa-solid fa-shield-halved"></i></a>
                    </li>
                    <li>
                        <a href="useragreement.html">User Agreement <i class="fa-solid fa-handshake"></i></a>
                    </li>
                </ul>
            </div>
        </div>
