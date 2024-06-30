
        <!-- popular communities -->
        <div class="col-md-3">
            <div class="content sticky-sidebar">
              <h3>Popular Topic Communities</h3>
              <!-- Popular Communities Content Goes Here -->
              <!-- Add more popular communities content here -->
               @foreach($communities as $community)
              <ul class="list-unstyled">
                <li>
                  <a href="#">
                    <span class="font-weight-bold community-name p-2"
                      >{{$community->title}}<i class="{{$community->icon}}"></i
                    ></span>
                  </a>
                </li>

                {{-- <li>
                  <a href="#">
                    <span class="font-weight-bold community-name p-2"
                      >r/sports <i class="fa-solid fa-medal"></i
                    ></span>
                    <!-- <img src="profile_icons/sports_icon.png" alt="Sports Community Icon" class="community-icon"> -->
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="font-weight-bold community-name p-2"
                      >r/health <i class="fa-solid fa-hospital"></i
                    ></span>

                    <!-- <img src="profile_icons/health_icon.png" alt="Health Community Icon" class="community-icon"> -->
                  </a>
                </li>
                <!-- Add more communities -->
                <li>
                  <a href="#">
                    <span class="font-weight-bold community-name p-2"
                      >r/travel <i class="fa-solid fa-plane"></i
                    ></span>
                    <!-- <img src="profile_icons/travel_icon.png" alt="Travel Community Icon" class="community-icon"> -->
                  </a>
                </li> --}}

              </ul>
              @endforeach
            </div>
          </div>
