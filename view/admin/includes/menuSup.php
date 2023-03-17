<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
					<a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
						<h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
					</a>
					<a href="#" class="sidebar-toggler flex-shrink-0">
						<i class="fa fa-bars"></i>
					</a>
					<form class="d-none d-md-flex ms-4">
						<input class="form-control border-0" type="search" placeholder="Pesquisar">
					</form>
					<div class="navbar-nav align-items-center ms-auto">
					
						<div class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
								<i class="fa fa-bell me-lg-2"></i>
								<span class="d-none d-lg-inline-flex">Notificação</span>
							</a>
							<div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
								<a href="#" class="dropdown-item">
									<h6 class="fw-normal mb-0">perfil atualizado</h6>
									<small>Há 15 minutos</small>
								</a>
								<hr class="dropdown-divider">
								
								<a href="#" class="dropdown-item text-center">Veja todas as notificações</a>
							</div>
						</div>
						<div class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
								<img class="rounded-circle me-lg-2" src="../assets/img/user.jpg" alt="" style="width: 40px; height: 40px;">
								<span class="d-none d-lg-inline-flex"><?php echo $nome_usua;?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
								<a href="#" class="dropdown-item">Perfil</a>
								<a href="#" class="dropdown-item">Configurações</a>
								<a href="#" class="dropdown-item">Sair</a>
							</div>
						</div>
					</div>
				</nav>
				<!-- Navbar End -->
