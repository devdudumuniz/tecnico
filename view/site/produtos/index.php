<?php

//incluindo consultas ao banco
// Inclui o arquivo de configuração do banco de dados
include_once "../../../model/db.php";
// Verifica se o parâmetro GET `id_usua` foi recebido
if (isset($_GET['idProduto'])) {
	// Obtém o valor de `id_usua` do parâmetro GET
	$idProduto = $_GET['idProduto'];
	// Faz a consulta no banco de dados usando a variável `$idMoto`
	$consultarProduto = ConsultarDados("", "", "", "SELECT * FROM `produtos` WHERE id_produto = $idProduto");
}
//include do header
include_once "../includes/header.php"
?>

<body class="goto-here">
	<div class="py-1 bg-black">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">+55 77 9 9192-0364</span>
						</div>
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
							<span class="text">dudumunizads@gmail.com</span>
						</div>
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
							<span class="text">Bahia</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html"><Img style="width:6vw;max-height:3rem;" src="../../assets/images/logo.png"></Img></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link">Sobre</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contato</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<div class="hero-wrap hero-bread" style="background-image: url('../../assets/images/bg/bg_produto.jpg');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span style="color: #bbb;" class="mr-2"><a style="color: #bbb;" href="index.html">Home /</a></span><span style="color: #bbb;">Produtos</span></p>
					<h1 style="color: #bbb;" class="mb-0 bread">Produto</h1>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-5 ftco-animate">
					<a href="images/product-1.png" class="image-popup prod-img-bg"><img src="../../assets/images/produtos/<?php echo $consultarProduto[0]['image_produto']; ?>" class="img-fluid" alt="Colorlib Template"></a>
				</div>
				<div class="col-lg-6 product-details pl-md-5 ftco-animate">
					<h3><?php echo $consultarProduto[0]['titulo_produto']; ?></h3>
					<div class="rating d-flex">
						<p class="text-left mr-4">
							<a href="#" class="mr-2">5.0</a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
							<a href="#"><span class="ion-ios-star-outline"></span></a>
						</p>
						<p class="text-left mr-4">
							<a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
						</p>
						<p class="text-left">
							<a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
						</p>
					</div>
					<p class="price"><span><?php echo $consultarProduto[0]['tamanho_produto']; ?>GB</span></p>
					<p><?php echo $consultarProduto[0]['descript_produtos']; ?></p>
					<p>
						<a href="" class="btn btn-black py-3 px-5 mr-2">Compartilhar
						</a>
						<a href="<?php echo $consultarProduto[0]['link_download']; ?>" class="btn btn-primary py-3 px-5">Download</a>
					</p>
				</div>
			</div>




			<div class="row mt-5">
				<div class="col-md-12 nav-link-wrap">
					<div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Descrição</a>

						<a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Instalação</a>

						<a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Comentários</a>

					</div>
				</div>
				<div class="col-md-12 tab-wrap">

					<div class="tab-content bg-light" id="v-pills-tabContent">

						<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
							<div class="p-4">
								<h3 class="mb-4"><?php echo $consultarProduto[0]['titulo_produto']; ?></h3>
								<p><?php echo $consultarProduto[0]['descript_produtos']; ?></p>
							</div>
						</div>

						<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
							<div class="p-4">
								<h3 class="mb-4">Instalação do <?php echo $consultarProduto[0]['titulo_produto']; ?></h3>
								<p><?php echo $consultarProduto[0]['instala_produto']; ?></p>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
							<div class="row p-4">
								<div class="col-md-7">
									<h3 class="mb-4">23 Comentários</h3>
									<div class="review">
										<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
										<div class="desc">
											<h4>
												<span class="text-left">Helen Melho</span>
												<span class="text-right">01 de Março 2023</span>
											</h4>
											<p class="star">
												<span>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
													<i class="ion-ios-star-outline"></i>
												</span>
												<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
											</p>
											<p>Quando ela chegou às primeiras colinas das montanhas itálicas, ela teve uma última vista no horizonte de sua cidade natal, marcador de marcha ,grovvão</p>
										</div>
									</div>
									
									
								</div>
								<div class="col-md-4">
									<div class="rating-wrap">
										<h3 class="mb-4">Faça um Comentário</h3>
										<p class="star">
											<span>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												<i class="ion-ios-star-outline"></i>
												(98%)
											</span>
											<span>1 Reviews</span>
										</p>
										
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row">

				<div class="mouse">
					<a style="background-color: #dbcc8f!important;" href="#" class="mouse-icon">
						<div class="mouse-wheel"><i style="color:#fff!important;" class="ion-ios-arrow-up"></i></div>
					</a>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2"><img class="imageFooter" src="../../assets/images/logo.png" alt="logo DM"></h2>
						<p>A DM Tech é uma empresa líder em desenvolvimento de software.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a target="_blank" href="https://github.com/devdudumuniz"><span class="fab fa-github"></span></a></li>
							<li class="ftco-animate"><a target="_blank" href="https://www.facebook.com/eduardo.muniz.39904181"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a target="_blank" href="https://www.instagram.com/dudumuniz12/"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Menu</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Home</a></li>
							<li><a href="#" class="py-2 d-block">Sobre</a></li>
							<li><a href="#" class="py-2 d-block">Blog</a></li>
							<li><a href="#" class="py-2 d-block">Contatos</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Ajudas</h2>
						<div class="d-flex">
							<ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
								<li><a href="#" class="py-2 d-block">Instalaçaõ</a></li>
								<li><a href="#" class="py-2 d-block">Perguntas</a></li>
								<li><a href="#" class="py-2 d-block">Termos &amp; Condições</a></li>
								<li><a href="#" class="py-2 d-block">política de Privacidade</a></li>
							</ul>

						</div>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Endereços</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">Barra do Choça - BA</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+55 77 991920364</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text">dudumunizads@gmail.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<p><!-- O link de volta ao DM Tech não pode ser removido. O modelo está licenciado em CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script>Todos os direitos reservados | Created <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://dudumuniz.tech" target="_blank">DM Tech</a>
						<!-- O link de volta ao DM Tech não pode ser removido. O modelo está licenciado em CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg>
	</div>

	<script>
		$(document).ready(function() {

			var quantitiy = 0;
			$('.quantity-right-plus').click(function(e) {

				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				$('#quantity').val(quantity + 1);


				// Increment

			});

			$('.quantity-left-minus').click(function(e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				// Increment
				if (quantity > 0) {
					$('#quantity').val(quantity - 1);
				}
			});

		});
	</script>

	<?php include_once "../includes/footer.php"; ?>