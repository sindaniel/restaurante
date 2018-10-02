<aside class="sidebar">
    <nav class="navbar navbar-dark bg-primary">
      <a class="navbar-brand m-0 py-2 brand-title" href="#">{{ Auth::user()->name }}</a>
      <a class="navbar-brand py-2 material-icons toggle-sidebar" href="#">menu</a>
    </nav>

    <nav class="navigation" >
      	<ul>
			<li class="{{explode('.', Request::route()->getName())[0] == 'home' ? 'active' : ''}}">
				<a href="{{route('home')}}" title="Dashboard"><span class="nav-icon material-icons">public</span> Dashboard</a>
			</li>


			<li class="{{explode('.', Request::route()->getName())[0] == 'recipes' ? 'active' : ''}}">
				<a  href="{{route('recipes.index')}}" title="Dashboard"><span class="nav-icon material-icons">comment</span> Recetas</a>
			</li>

				
				
	  	</ul>
		
			
		

	 	<label title="Products"><span>Productos</span></label>
	  
	  	<ul>

				<li class="{{explode('.', Request::route()->getName())[0] == 'products' ? 'active' : ''}}">
					<a  href="{{route('products.index')}}" title="Dashboard"><span class="nav-icon material-icons">dehaze</span> Productos</a>
				</li>

				<li class="{{explode('.', Request::route()->getName())[0] == 'groups' ? 'active' : ''}}">
					<a  href="{{route('groups.index')}}" title="Dashboard"><span class="nav-icon material-icons">group_work</span> Grupos</a>
				</li>
				<li class="{{explode('.', Request::route()->getName())[0] == 'units' ? 'active' : ''}}">
					<a  href="{{route('units.index')}}" title="Dashboard"><span class="nav-icon material-icons">filter_tilt_shift</span> Unidades</a>
				</li>

				<ul>
					<li class="{{explode('.', Request::route()->getName())[0] == 'suppliers' ? 'active' : ''}}">
						<a  href="{{route('suppliers.index')}}" title="Dashboard"><span class="nav-icon material-icons">local_shipping</span> Proveedores</a>
					</li> 
				</ul>

				
		  </ul>
		 


	


    </nav>


 
  </aside>

