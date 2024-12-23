        <!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-logo">
				<!-- Logo Header -->
				<div class="logo-header" data-background-color="blue">

					<a href="dashboard.php" class="logo">
						<img src="{{ asset('storage/' . $websetting->system_logo) }}" alt="navbar brand"  class="navbar-brand" height="35">
					</a>
					<div class="nav-toggle">
						<button class="btn btn-toggle toggle-sidebar">
							<i class="gg-menu-right"></i>
						</button>
						<button class="btn btn-toggle sidenav-toggler">
							<i class="gg-menu-left"></i>
						</button>
					</div>
					<button class="topbar-toggler more">
						<i class="gg-more-vertical-alt"></i>
					</button>
				</div>
				<!-- End Logo Header -->
			</div>
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<ul class="nav nav-primary mt-2">
						<!--Dashboard Menue-->
						<li class="nav-item active">
							<a href="{{route('dashboard')}}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<!--Dashboard Menue-->
						<!--Chart of Accounts Menue-->
						<li class="nav-item">
							<a href="{{route('chart-of-accounts.index')}}">
								<i class="fas fa-sitemap"></i>
								<p>Chart of Accounts</p>
							</a>
						</li>
						<!--Chart of Accounts Menue-->
						<!--Voucher Menue-->
						<li class="nav-item">
							<a data-bs-toggle="collapse" href="#voucher-nav">
								<i class="fas fa-file-invoice"></i>
								<p>Voucher</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="voucher-nav">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('vouchers.create')}}">
										    <i class="fas fa-file-signature"></i>
											<span class="sub-item">Create Voucher</span>
										</a>
									</li>
									<li>
										<a href="{{route('vouchers.index')}}">
										    <i class="fas fa-file-alt"></i>
											<span class="sub-item">Voucher List</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!--Voucher Menue-->
						<!--Reports Menue-->
						<li class="nav-item">
							<a data-bs-toggle="collapse" href="#report-nav">
								<i class="far fa-list-alt"></i>
								<p>Reports</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="report-nav">
								<ul class="nav nav-collapse">
									<li>
										<a href="#">
										    <i class="fas fa-list-ol"></i>
											<span class="sub-item">Daily Transaction Report</span>
										</a>
									</li>
									<li>
										<a href="#">
										    <i class="fas fa-indent"></i>
											<span class="sub-item">A/C Head wise Ledger</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!--Reports Menue-->
						<!--User Management Menue-->
						<li class="nav-item">
							<a data-bs-toggle="collapse" href="#user-nav">
								<i class="fas fa-users"></i>
								<p>System Users</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="user-nav">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('users.index')}}">
										    <i class="fas fa-user-plus"></i>
											<span class="sub-item">Manage User</span>
										</a>
									</li>
									<li>
										<a href="{{route('roles.index')}}">
										    <i class="fas fa-users-cog"></i>
											<span class="sub-item">User Roles</span>
										</a>
									</li>
									<li>
										<a href="{{route('permissions.index')}}">
										    <i class="fas fa-user-shield"></i>
											<span class="sub-item">User Permission</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!--User Management Menue-->
						<!--Setting/Configure Menue-->
						<li class="nav-item">
							<a data-bs-toggle="collapse" href="#configure-nav">
								<i class="fas fa-cogs"></i>
								<p>Configure</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="configure-nav">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('company.index')}}">
										    <i class="fas fa-pen-nib"></i>
											<span class="sub-item">Company</span>
										</a>
									</li>
									<li>
										<a href="{{route('branch.index')}}">
										    <i class="fas fa-pen-nib"></i>
											<span class="sub-item">Branch</span>
										</a>
									</li>
									<li>
										<a href="{{route('project_category.index')}}">
										    <i class="fas fa-pen-nib"></i>
											<span class="sub-item">Project Category</span>
										</a>
									</li>
									<li>
										<a href="{{route('project.index')}}">
										    <i class="fas fa-pen-nib"></i>
											<span class="sub-item">Project</span>
										</a>
									</li>
									<li>
										<a href="{{route('funding_organization.index')}}">
										    <i class="fas fa-pen-nib"></i>
											<span class="sub-item">Funding Organization</span>
										</a>
									</li>
									<li>
										<a href="{{route('currency_type.index')}}">
										    <i class="fas fa-pen-nib"></i>
											<span class="sub-item">Currency type</span>
										</a>
									</li>
                                    <li>
										<a href="{{route('websetting.index')}}">
										    <i class="fas fa-pen-nib"></i>
											<span class="sub-item">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!--Setting/Configure Menue-->
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->
