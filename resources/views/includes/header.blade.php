<header class="header sticky-top">
    <nav class="navbar navbar-light bg-white px-sm-4 ">
      <a class="navbar-brand py-2 d-md-none  m-0 material-icons toggle-sidebar" href="#">menu</a>
      <ul class="navbar-nav flex-row ml-auto">
       
        <li class="nav-item notification" >
            <a href="#" id="notificationDropdown" data-toggle="dropdown" class="nav-link"><span class="material-icons align-middle">notifications_none</span></a>
            <div class="dropdown-menu p-0 dropdown-lg notificationDropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom" href="#">
                    <span class="badge badge-pill badge-danger mr-2">Warning</span> <small class="text-muted">Somthing went wrong !</small>
                </a>
                <button type="button" class="btn btn-light btn-sm btn-block">View All</button>
            </div>
        </li>
        <li class="nav-item ml-sm-3 user-logedin dropdown">
            <a href="#" id="userLogedinDropdown" data-toggle="dropdown" class="nav-link weight-400 dropdown-toggle">
                    {{ Auth::user()->name }}
            </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userLogedinDropdown">
            {{-- <a class="dropdown-item" href="profile.html">My Account</a>
            <a class="dropdown-item" href="profile.html">Account Settings</a>
            <a class="dropdown-item" target="_blank" href="https://themeforest.net/item/brio-web-app-bootstrap-admin-template-dashboard/9529051/support">Help & Support</a>
            <div class="dropdown-divider"></div> --}}
            <a class="dropdown-item" href="{{route('sign-out')}}">Log Out</a>
          </div>
        </li>
        
      </ul>
    </nav>
  </header>


