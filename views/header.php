<header>
	<div class="nav">
		<div class="navLogo">
			<a href="?content=ruta-virtual">
				<img src="img/logo-blanco.svg" alt="CUMBRE">
			</a>
		</div>
		<div class="navItems">
			<ul>
				<li class="special-item">
					<a href="?content=inicio">
						Dashboard
					</a>
				</li>
				<li class="special-item">
					<a href="?content=cronograma-base ">
						Cronograma de actividades
					</a>
				</li>
				<li class="user">
					<a href="#"	>
						Jhon Doe
						<img src="http://placehold.it/30x30" alt="Avatar" class="img-circle">
					</a>
					<ul class="userDrop">
						<li><a href="?content=perfil">Mi Perfil</a></li>
						<li><a href="?logout=1">Cerrar Sesión</a></li>
					</ul>
				</li>
				<li class="u-notification">
					<a href="#">
						<img src="img/notification.svg" alt="Menu">
					</a>
				</li>
				<li class="u-mian-menu">
					<a href="#" onclick="openMenu()">
						<img src="img/menu.svg" alt="Menu">
					</a>
				</li>
				<li class="u-mian-fases">
					<a href="#" onclick="mapaMenu()">
						<img src="img/menu-fases.svg" alt="Menu">
					</a>
				</li>
			</ul>
		</div>
	</div>
</header>

<div class="menu" id="menu">
	<div class="menuContainer">
		<button class="close" onclick="closeMenu()">
			<i class="fa fa-times" aria-hidden="true"></i>
		</button>
		<h4>MENU</h4>
		<ul>
			<li>
				<a href="?content=dashboard">
					Home
				</a>
			</li>
			<li>
				<a href="?content=perfil">
					Mi perfil
				</a>
			</li>
			<li>
				<a href="?content=cronograma">
					Calendario de Actividades
				</a>
			</li>
			<li>
				<a href="?content=que-es">
					¿Que es CUMBRE?
				</a>
			</li>
		</ul>

		<h4>FASES</h4>
		<ul>
			<li>
				<a href="?content=alistamiento">
					Alistamiento
				</a>
			</li>
			<li>
				<a href="?content=base">
					Campamento base
				</a>
			</li>
			<li>
				<a href="?content=uno">
					Campamento 1
				</a>
			</li>
			<li>
				<a href="?content=dos">
					Campamento 2
				</a>
			</li>
			<li>
				<a href="?content=cumbre">
					Cumbre
				</a>
			</li>
		</ul>
	</div>
</div>