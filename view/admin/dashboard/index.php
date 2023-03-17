<?php 
error_reporting(0);
ini_set('display_errors', '0');
include_once "../includes/header.php"; 


?>


<body id="page-top">
	<!-- Spinner Start -->
	<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<!-- Spinner End -->
	<div id="wrapper">
		<?php include_once "../includes/menuLateral.php"; ?>
		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">
			<!-- Main Content -->
			<div id="content">
				<?php include_once "../includes/menuSup.php"; ?>
				<!-- Begin Page Content -->
				<div class="container-fluid"></div>



				<!-- Sale & Revenue Start -->
				<div class="container-fluid pt-4 px-4">
					<div class="row g-4">
						<div class="col-sm-6 col-xl-3">
							<div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
								<i class="fas fa-download fa-3x text-primary"></i>
								<div class="ms-3">
									<p class="mb-2">Downloads Hoje</p>
									<h6 style="align-items:center;" class="mb-0">100 </h6>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3">
							<div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
								<i class="fas fa-eye fa-3x text-primary"></i>
								<div class="ms-3">
									<p class="mb-2">Total Visitas</p>
									<h6 class="mb-0">$1234</h6>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3">
							<div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
								<i class="fa fa-chart-area fa-3x text-primary"></i>
								<div class="ms-3">
									<p class="mb-2">Today Revenue</p>
									<h6 class="mb-0">$1234</h6>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-xl-3">
							<div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
								<i class="fa fa-chart-pie fa-3x text-primary"></i>
								<div class="ms-3">
									<p class="mb-2">Total Revenue</p>
									<h6 class="mb-0">$1234</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Sale & Revenue End -->


				<!-- Sales Chart Start -->


				<!-- Recent Sales Start -->
				<div class="container-fluid pt-4 px-4">
					<div class="bg-light text-center rounded p-4">
						<div class="d-flex align-items-center justify-content-between mb-4">
							<h6 class="mb-0">Variados</h6>
							<a href="">Ver Todos</a>
						</div>
						<div id="dashboard-content" class="table-responsive">
							
						</div>
					</div>
				</div>
				<!-- Recent Sales End -->


				<!-- Widgets End -->

			</div>
			<!-- Content End -->
			<!-- Footer Start -->
			<div class="container-fluid pt-4 px-4">
				<div class="bg-light rounded-top p-4">
					<div class="row">
						<div class="col-12 col-sm-6 text-center text-sm-start">
							&copy; <a href="#">Informática</a>, All Right Reserved.
						</div>
						<div class="col-12 col-sm-6 text-center text-sm-end">
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a href="https://dudumuniz.tech">DM Tech</a>
							</br>

						</div>
					</div>
				</div>
			</div>
			<!-- Footer End -->
		</div>

	</div>
	</div>
	<!-- Back to Top -->
	<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
	</div>



	
	<?php


	include_once "../includes/footer.php";
	?>