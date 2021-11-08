@php
	$appSidebarClass = (!empty($appSidebarTransparent)) ? 'app-sidebar-transparent' : '';
@endphp
<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar {{ $appSidebarClass }}">
	<!-- BEGIN scrollbar -->
	<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
		<div class="menu">
			@if (!$appSidebarSearch)
			<div class="menu-profile">
				<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
					<div class="menu-profile-cover with-shadow"></div>
					<div class="menu-profile-image">
						<img src="{{ asset('storage/avatars/'.auth()->user()->avatar) }}" alt="" />
					</div>
					<div class="menu-profile-info">
						<div class="d-flex align-items-center">
							<div class="flex-grow-1">
								{{ auth()->user()->name }}
							</div>
							<div class="menu-caret ms-auto"></div>
						</div>
						<small>
                            @forelse (auth()->user()->roles->take(1) as $role)
                                {{$role->name}}
                            @empty
                                Sin Asginar Rol
                            @endforelse
                        </small>
					</div>
				</a>
			</div>
			<div id="appSidebarProfileMenu" class="collapse">

				<div class="menu-item">
					<a href="/profile" class="menu-link">
						<div class="menu-icon"><i class="fa fa-address-card"></i></div>
						<div class="menu-text"> Perfil</div>
					</a>
				</div>


                @can('crear usuario')
                    <div class="menu-item">
                        <a href="/usuarios" class="menu-link">
                            <div class="menu-icon"><i class="fa fa-user-plus"></i></div>
                            <div class="menu-text"> Usuarios</div>
                        </a>
                    </div>
                @endcan

				<div class="menu-item pb-5px">
					<a href="/logout" class="menu-link">
						<div class="menu-icon"><i class="fa fa-key"></i></div>
						<div class="menu-text"> Salir</div>
					</a>
				</div>
				<div class="menu-divider m-0"></div>
			</div>
			@endif

			@if ($appSidebarSearch)
				<div class="menu-search mb-n3">
					<input type="text" class="form-control" placeholder="Sidebar menu filter..." data-sidebar-search="true" />
				</div>
			@endif

			<div class="menu-header">Menu</div>

			<div class="menu-item">
				<a href="/dashboard" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-home"></i>
					</div>
					<div class="menu-text">Inicio</div>
				</a>
			</div>

			<div class="menu-item has-sub">
				<a href="javascript:;" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-sitemap"></i>
					</div>
					<div class="menu-text">Dirección General</div>
					<div class="menu-caret"></div>
				</a>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="/pgo" class="menu-link"><div class="menu-text">PGO</div></a>
					</div>
					<div class="menu-item">
						<a href="" class="menu-link"><div class="menu-text">Obras</div></a>
					</div>
					<div class="menu-item">
						<a href="" class="menu-link"><div class="menu-text">Presupuesto</div></a>
					</div>
				</div>
			</div>

			<div class="menu-item has-sub">
				<a href="javascript:;" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-tasks"></i>
					</div>
					<div class="menu-text">Planeación</div>
					<div class="menu-caret"></div>
				</a>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="" class="menu-link"><div class="menu-text">Obras</div></a>
					</div>
					<div class="menu-item">
						<a href="" class="menu-link"><div class="menu-text">Presupuesto</div></a>
					</div>
				</div>
			</div>

			<div class="menu-item has-sub">
				<a href="javascript:;" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-chart-line"></i>
					</div>
					<div class="menu-text">Costos</div>
					<div class="menu-caret"></div>
				</a>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="" class="menu-link"><div class="menu-text">Obras</div></a>
					</div>
					<div class="menu-item">
						<a href="" class="menu-link"><div class="menu-text">Presupuesto</div></a>
					</div>
				</div>
			</div>

			<div class="menu-item has-sub">
				<a href="javascript:;" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-dollar-sign"></i>
					</div>
					<div class="menu-text">Contabilidad</div>
					<div class="menu-caret"></div>
				</a>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="" class="menu-link"><div class="menu-text">Obras</div></a>
					</div>
				</div>
			</div>

			<div class="menu-item has-sub">
				<a href="javascript:;" class="menu-link">
					<div class="menu-icon">
						<i class="fa fa-columns"></i>
					</div>
					<div class="menu-text">Catalogos</div>
					<div class="menu-caret"></div>
				</a>
				<div class="menu-submenu">
					<div class="menu-item">
						<a href="/catalogos/areas" class="menu-link"><div class="menu-text">Áreas</div></a>
					</div>
                    <div class="menu-item">
						<a href="/catalogos/fuentes" class="menu-link"><div class="menu-text">Fuentes</div></a>
					</div>
					<div class="menu-item">
						<a href="/catalogos/modalidades" class="menu-link"><div class="menu-text">Modalidades</div></a>
					</div>
					<div class="menu-item">
						<a href="/catalogos/contratistas" class="menu-link"><div class="menu-text">Contratistas</div></a>
					</div>
				</div>
			</div>



			<!-- BEGIN minify-button -->
			<div class="menu-item d-flex">
				<a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
			</div>
			<!-- END minify-button -->

		</div>
		<!-- END menu -->
	</div>
	<!-- END scrollbar -->
</div>
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
<!-- END #sidebar -->

