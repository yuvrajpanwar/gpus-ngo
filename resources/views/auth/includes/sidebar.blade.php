<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

      <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('photo_gallery') }}">
          <i class="ti-image menu-icon"></i>
          <span class="menu-title">Photo Gallery</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('video_gallery') }}">
          <i class="ti-video-clapper menu-icon"></i>
          <span class="menu-title">Video Gallery</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('flash_news') }}">
          <i class="ti-book menu-icon"></i>
          <span class="menu-title">Flash News</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('events') }}">
          <i class="ti-announcement menu-icon"></i>
          <span class="menu-title">Events</span>
        </a>
      </li>



    </ul>
  </nav>