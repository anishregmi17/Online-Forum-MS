<h3>Categories</h3>
<!-- Dashboard Content Goes Here -->
@foreach ($categories as $category)
    <ul class="inline-item-list">
        <li>
            <a href="{{ route('sports') }}">{{ $category->title }}-<i class="{{ $category->icon }}"></i></a>
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
