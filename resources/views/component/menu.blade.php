<div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="https://app.testpaper.com.my/" class="simple-text logo-normal">
          Testpaper.com.my
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">

        <ul class="nav">
          <li>
              <i class="now-ui-icons users_single-02"></i>
              <p>{{$showuser->name_admin}}</p>
          </li>
          </li>
          <li>
            <a href="dashboardmms">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="modulelearning">
              <i class="now-ui-icons location_map-big"></i>
              <p>Module Learning</p>
            </a>
          </li>
          <li>
            <a href="contributor">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Author/Contributor</p>
            </a>
          </li>
          <li>
              <a href="{{ route('logout') }}">
              <i class="now-ui-icons media-1_button-power"></i>
              <p>Logout</p>
              </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->