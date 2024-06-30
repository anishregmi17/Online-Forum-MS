
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
              </ul>
              @endforeach
            </div>
          </div>
