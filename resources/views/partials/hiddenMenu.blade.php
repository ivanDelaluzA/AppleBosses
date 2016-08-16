<div class="layer-container">

		<!-- BEGIN MENU LAYER -->
		<div class="menu-layer">
			<ul>
				<li>
					<a href="{{ route('requests.index') }}"><i class="fa fa-file"></i> Peticiones</a>
				</li>
				<li>
					<a href="javascript:;"><i class="fa fa-cogs"></i> Sistema</a>
					<ul class="child-menu">
						<li>
							<a href="javascript:;"><i class="fa fa-map"></i> Colonias</a>
							<ul class="child-menu">
								<li><a href="{{ route('colonies.index') }}"><i class="fa fa-puzzle-piece"> </i> Gestionar</a></li>
								<li><a href="{{ route('colonies.scopes.index') }}"><i class="fa fa-crosshairs"></i> Ambito</a></li>
								<li><a href="{{ route('colonies.settlement-types.index') }}"><i class="fa fa-building"></i> Tipo de Asentamiento</a></li>
								
							</ul>
						</li>
					</ul>
					<ul class="child-menu">
						<li>
							<a href="javascript:;">Peticiones</a>
							<ul class="child-menu">
								<li><a href="{{ route('requestsStates.index') }}">Estados</a></li>
								<li><a href="{{ route('requestsTypes.index') }}">Tipos de Documento</a></li>
							</ul>
						</li>
					</ul>
					
					<ul class="child-menu">
						<li>
						<a href="{{ route('users.index') }}"><i class="fa fa-file"></i> Usuarios</a>
						</li>
					</ul>
					<ul class="child-menu">
						<li>
						<a href="{{ route('roles.index') }}"><i class="fa fa-file"></i> Roles</a>
						</li>
					</ul>
					<ul class="child-menu">
						<li>
						<a href="{{ route('permissions.index') }}"><i class="fa fa-file"></i> Permisos</a>
						</li>
					</ul>
				</li>
				

			</ul>
		</div><!--.menu-layer-->
		<!-- END OF MENU LAYER -->

	</div><!--.layer-container-->
