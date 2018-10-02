<aside class="sidebar">
    <nav class="navbar navbar-dark bg-primary">
      <a class="navbar-brand m-0 py-2 brand-title" href="#">{{ Auth::user()->name }}</a>
      <a class="navbar-brand py-2 material-icons toggle-sidebar" href="#">menu</a>
    </nav>

    <nav class="navigation" >
      <ul>
        {{-- <li class="{{explode('.', Request::route()->getName())[0] == 'home' ? 'active' : ''}}">
          <a href="{{route('home')}}" title="Dashboard"><span class="nav-icon material-icons">public</span> Dashboard</a>
        </li> --}}
        <li class="{{explode('.', Request::route()->getName())[0] == 'accounts' ? 'active' : ''}}">
          <a  href="" title="Dashboard"><span class="nav-icon material-icons">face</span> Accouts</a>
        </li> 
      </ul>

      <div style="position:absolute; bottom:0">
        <img src=" {{ asset('img/logo.png') }}" alt="Thiply"  class='img-fluid p-5' />
      </div>
     

    </nav>


 
  </aside>

