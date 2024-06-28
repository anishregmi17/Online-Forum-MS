  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          {{-- <i class="bi bi-grid"></i> --}}
          <span>Online Forum Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link " data-bs-target="#hero" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Posts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="hero" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.posts.create')}}">
              <i class="bi bi-circle"></i><span>Add Post</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.posts.index')}}" class="active">
              <i class="bi bi-circle"></i><span>Manage Post</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#features" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Communities</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="features" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.communities.create')}}">
              <i class="bi bi-circle"></i><span>Add Communities</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.communities.index')}}" class="active">
              <i class="bi bi-circle"></i><span>Manage Communities</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#services" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="services" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.categories.create')}}">
              <i class="bi bi-circle"></i><span>Add Category</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.categories.index')}}" class="active">
              <i class="bi bi-circle"></i><span>Manage Category</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->




      <li class="nav-item">
        <a class="nav-link " data-bs-target="#testimonials" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Home</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="testimonials" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="../testimonials/create.php">
              <i class="bi bi-circle"></i><span>Add Home</span>
            </a>
          </li>
          <li>
            <a href="../testimonials/index.php" class="active">
              <i class="bi bi-circle"></i><span>Manage Home</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#price" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Popular</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="price" class="nav-content collapse" data-bs-parent="">
          <li>
            <a href="../price/create.php">
              <i class="bi bi-circle"></i><span>Add Popular</span>
            </a>
          </li>
          <li>
            <a href="../price/index.php" class="active">
              <i class="bi bi-circle"></i><span>Manage Popular</span>
            </a>
          </li>
        </ul>
      </li>




      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Profile</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="../users/create.php">
              <i class="bi bi-circle"></i><span>Add Profile</span>
            </a>
          </li>
          <li>
            <a href="../users/index.php" class="active">
              <i class="bi bi-circle"></i><span>Manage Profile</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->



     <li class="nav-item">
        <a class="nav-link " data-bs-target="#free_plan_feature" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>About Forum</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="free_plan_feature" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.aboutforum.create')}}">
              <i class="bi bi-circle"></i><span>Add About Forum</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.aboutforum.index')}}" class="active">
              <i class="bi bi-circle"></i><span>Manage About Forum</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#business_plan_feature" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Content Policy</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="business_plan_feature" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.contentpolicy.create')}}">
              <i class="bi bi-circle"></i><span>Add Content Policy</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.contentpolicy.index')}}" class="active">
              <i class="bi bi-circle"></i><span>Manage Content Policy</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#developer_plan_feature" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Privacy Policy</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="developer_plan_feature" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.privacypolicy.create')}}">
              <i class="bi bi-circle"></i><span>Add Privacy Policy</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.privacypolicy.index')}}" class="active">
              <i class="bi bi-circle"></i><span>Manage Privacy Policy</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#faqs" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>User Agreement</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="faqs" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('admin.useragreements.create')}}">
              <i class="bi bi-circle"></i><span>Add User Agreement</span>
            </a>
          </li>
          <li>
            <a href="{{route('admin.useragreements.index')}}" class="active">
              <i class="bi bi-circle"></i><span>Manage User Agreement</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link " data-bs-target="#settings" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>settings</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="settings" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="../settings/create.php">
              <i class="bi bi-circle"></i><span>Add settings</span>
            </a>
          </li>
          <li>
            <a href="../settings/index.php" class="active">
              <i class="bi bi-circle"></i><span>Manage settings</span>
            </a>
          </li>
        </ul>
      </li>


<li class="nav-item">
    <a class="nav-link" data-bs-target="#footers" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Footer</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="footers" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('admin.footers.create') }}">
                <i class="bi bi-circle"></i><span>Add Footer</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.footers.index') }}" class="active">
                <i class="bi bi-circle"></i><span>Manage Footer</span>
            </a>
        </li>
    </ul>
</li>



      <li class="nav-item">
        <a class="nav-link " href="../documentation/document.php">
          Documentation
        </a>

      </li>

    </ul>

  </aside><!-- End Sidebar-->
