<div class="topnav shadow-sm">
	<div class="container-fluid">
		<nav class="navbar navbar-light navbar-expand-lg topbar-nav">
			<div class="collapse navbar-collapse" id="topnav-menu-content">
				<ul class="metismenu" id="menu-bar">
					<li class="menu-title">Navigation</li>

					<li>
						<a href="/manage/dashboard/index">
							<i data-feather="home"></i>
							<span class="badge badge-success float-right">1</span>
							<span> Index </span>
						</a>
					</li>
					<li>
						<a href="javascript: void(0);">
							<i data-feather="tool"></i>
							<span> Manage </span>
							<span class="menu-arrow"></span>
						</a>

						<ul class="nav-second-level" aria-expanded="false">
							@if ( Helper::checkRole(['ADMIN']) )
							<li>
								<a href="/manage/organizations">Organization</a>
							</li>
							@endif
							<li>
								<a href="/manage/locations">Location</a>
							</li>
							<li>
								<a href="/manage/layouts">Layout</a>
							</li>
						</ul>
					</li>
					@if ( Helper::checkRole(['ADMIN','MANAGER']) )
					<li>
						<a href="javascript: void(0);">
							<i data-feather="users"></i>
							<span> Users </span>
							<span class="menu-arrow"></span>
						</a>

						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/manage/users/managers">Managers</a>
							</li>
							<li>
								<a href="/manage/users/operators">Operators</a>
							</li>
						</ul>
					</li>
					@endif
				</ul>
			</div>
		</nav>
	</div>
</div>
