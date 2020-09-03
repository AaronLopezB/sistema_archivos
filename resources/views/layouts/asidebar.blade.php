<aside class="main-sidebar sidebar-dark-primary elevation-4">

	<!-- Brand Logo -->

	<a class="brand-link" href="javascript:;">

		<span class="brand-text font-weight-light">

			Sistema de archivos

		</span>

	</a>

	<!-- Sidebar -->

	<div class="sidebar">

		<!-- Sidebar user panel (optional) -->

		<div class="user-panel mt-3 pb-3 mb-3 d-flex">

			<div class="image">

				<img alt="User Image" class="img-circle elevation-2" src="dist/img/user2-160x160.jpg">

			</div>

			<div class="info">

				<a class="d-block" href="#!">

					{{ request()->session()->get('nombre') }} ({{ request()->session()->get('role')}})

				</a>

			</div>

		</div>

		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-accordion="false" data-widget="treeview" role="menu">
				<li class="nav-item">
					<a class="nav-link {{ (request()->is('admin') ? 'active' : '') }}" href="#!">
						<i class="nav-icon fas fa-file">
						</i>
						<p>
							Cargar archivo
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ (request()->is('devoluciones') ? 'active' : '') }}"
						href="#!">
						<i class="nav-icon fas fa-arrows-alt-h">
						</i>
						<p>
							Diseño
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ (request()->is('respuesta') ? 'active' : '') }}" href="#!">
						<i class="nav-icon fas fa-poll">
						</i>
						<p>
							Convenios
						</p>
					</a>


				</li>
				<li class="nav-item">
					<a class="nav-link {{ (request()->is('historial') ? 'active' : '') }}" href="#!">
						<i class="nav-icon far fa-calendar-alt">
						</i>
						<p>
							Ventas
						</p>
					</a>
				</li>
			</ul>

		</nav>

	</div>

</aside>
