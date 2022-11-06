<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<a href="/usershomepage" class="logo m-0">Trip Alpine <span class="text-primary">.</span></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li class="active"><a href="/usershomepage">Home</a></li>
					
					
					@if(Session::get('user')) {{Session::get('name')}} 

					<li><a href="/userpanel">User Panel</a></li>
					<li><a href="/studentsList">My Profile</a></li>
					
					<li><a href="/logout">Logout</a></li>
					@else
					<li><a href="/userregistration">User Registration</a></li>
					<li><a href="/userlogin">User Login</a></li>



    				@endif
					
					
					

					

					

				
					<!-- <li><a href="/contact">Contact Us</a></li> -->
				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>