<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/myprofile') ? 'active' : ''}}" href="/dashboard/myprofile">
              <span data-feather="user" class="align-text-bottom"></span>
              My Profil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/createproject') ? 'active' : ''}}" href="/dashboard/createproject">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Create Project
            </a>
        </ul>
      </div>
    </nav>