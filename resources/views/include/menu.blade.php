<ul class="metismenu" id="menu">


                <li class="">
					<a href="{{ route('admin.dashboard')}}" class="">
						<div class="parent-icon"><i class="bx bx-home-alt font-30"></i>
						</div>
						<div class="menu-title">Admin Dashboard</div>
					</a>
				</li>





				<li>
					<form method="POST" action="{{ route('logout') }}">
					<a href="javascript:;">
						<div class="parent-icon"><i class="bx bx-log-out-circle"></i></i>
						</div>

						   {{csrf_field()}}
							<button type="submit" style="background: white !important;border: none;margin-left: 8px;color: #4b5d7cd1;"> Log out</button>
					</a>
					</form>
				</li>

			</ul>
			<!--end navigation-->
		</div>


		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>

					  <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
						<!-- <input class="form-control px-5" disabled type="search" placeholder="Search">
						<span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"><i class='bx bx-search'></i></span> -->
					  </div>


					  <div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item dropdown dropdown-app">
								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="app-container p-2 my-2">
									</div>
								</div>
							</li>

							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;"></a>
									<div class="header-notifications-list"></div>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;"></a>
									<div class="header-message-list"></div>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<img src="/userimage/{{ Auth::user()->image }}" class="user-img" onerror="this.src='/assets/images/avatars/avatar-2.png'" alt="">
							<div class="user-info">
								<p class="user-name mb-0">{{ Auth::user()->name }}</p>
								<p class="designattion mb-0"> {{Auth::user()->type}} </p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center" href="{{ route('admin.profile')}}"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							<li><a class="dropdown-item d-flex align-items-center" href="{{ route('admin.changePassword')}}"><i class="bx bx-cog fs-5"></i><span>Change Password</span></a>
							</li>
							<li>
								<div class="dropdown-divider mb-0"></div>
							</li>
							<li><form method="POST" action="{{ route('logout') }}">
										{{csrf_field()}}
								<button type="submit" class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-log-out-circle"></i><span>Logout</span></button>
								</form>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
