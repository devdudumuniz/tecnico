<?php
include_once "../../../model/db.php";
$consultarProdutos = ConsultarDados("", "", "", "SELECT p.*, c.*
FROM produtos p
INNER JOIN categoria c
ON p.categoria_produto = c.id_categoria
WHERE p.status_produtos = 1");

// Obter o caminho atual da página
$path = $_SERVER['PHP_SELF'];

// Extrair o esquema, o host e a porta do URL atual
$url_parts = parse_url("http://$_SERVER[HTTP_HOST]$path");
$scheme = $url_parts['scheme'];
$host = $url_parts['host'];
$port = isset($url_parts['port']) ? ':' . $url_parts['port'] : '';

include_once "../includes/header.php";
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
							<span class="text"><a href="../../login">Login</a></span>
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
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="shop.html">Todos</a>
							<a class="dropdown-item" href="product-single.html">Sistemas Operacionais</a>
							<a class="dropdown-item" href="cart.html">Programas</a>
							<a class="dropdown-item" href="checkout.html">Ativadores</a>
						</div>
					</li>
					<li class="nav-item"><a href="about.html" class="nav-link">Sobre</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contato</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
						<img class="one-third order-md-last img-fluid" src="../../assets/images/bg/bg_2.png" alt="menina">
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">#Nova IA</span>
								<div class="horizontal">
									<h1 class="mb-4 mt-3">SUPER C.</h1>
									<p class="mb-4">Inteligência Artificial para ajudar crianças a desenvolver habilidades essenciais para o seu desenvolvimento.</p>

									<p><a target="_blank" href="#" class="btn-custom">Conheça Agora</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
						<img class="imagemMenino one-third order-md-last img-fluid" src="../../assets/images/bg/menino.png" alt="foto">
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '50%' }">
							<div class="text">
								<span class="subheading">#Nova IA</span>
								<div class="horizontal">
									<h1 class="mb-4 mt-3">SUPER C.</h1>
									<p class="mb-4">Inteligência Artificial para ajudar crianças autistas a desenvolver habilidades sociais, emocionais e de comunicação.</p>
									<p><a target="_blank" href="#" class="btn-custom">Conheça Agora</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
			<div class="row no-gutters ftco-services">
				<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services p-4 py-md-5">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span><i class='fas fa-cloud-upload-alt'></i></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Atualizações frequentes</h3>
							<p>Novos programas são adicionados regularmente ao nosso sistema.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services p-4 py-md-5">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span><i class="fa-1x material-icons">security</i></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Segurança</h3>
							<p>Fique tranquilo, nosso sistema é 100% seguro e livre de vírus.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services p-4 py-md-5">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span> <i class="fas fa-share-alt"></i></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Compartilhe</h3>
							<p>Espalhe a palavra sobre o nosso sistema para que mais pessoas possam se beneficiar dele.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Novos Produtos</h2>
					<p>Nossos Atualizções Recentes</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php foreach ($consultarProdutos as $produtos) { ?>
					<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
						<div class="product d-flex flex-column">
							<a href="#" class="img-prod"><img class="img-fluid" src="../../assets/images/produtos/<?php echo $produtos['image_produto']; ?>" alt="Colorlib Template">
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3">
								<div class="d-flex">
									<div class="cat">
										<span><?php echo $produtos['nome_categoria']; ?></span>
									</div>
									<div class="rating">
										<p class="text-right mb-0">
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
											<a href="#"><span class="ion-ios-star-outline"></span></a>
										</p>
									</div>
								</div>
								<h3><a href="#"><?php echo $produtos['titulo_produto']; ?></a></h3>
								<div class="pricing">
									<p class="price"><span><?php echo $produtos['tamanho_produto'] . "GB"; ?></span></p>
								</div>
								<p class="bottom-area d-flex px-3">
								
									<a href="#" class="textBuy add-to-cart text-center py-2 mr-1" data-id="<?php echo $produtos['id_produto']; ?>" onclick="copyLink(event)">Compartilhar <i class="fas fa-share"></i></a>
									<a id="abrirProduto" href="<?php 
									$prodId = $produtos['id_produto'];
									$new_url = "$scheme://$host$port/ti/view/site/produtos/?idProduto=$prodId";
									echo $new_url; ?>" class="textBuy buy-now text-center py-2">Download <span><i class="fas fa-download"></i></span></a>
								</p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
	</section>

	<section class="ftco-section ftco-choose ftco-no-pb ftco-no-pt">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-lg-4">
					<div class="choose-wrap divider-one img p-5 d-flex align-items-end" style="background-image: url(../../assets/images/cards/choose-1.jpg);">
						<div class="text text-white px-5">
							<span class="subheading">Audição</span>
							<h2>Intolerância a sons altos</h2>
							<p>Algumas crianças com autismo podem ter sensibilidade a sons altos, o que pode prejudicar seu bem-estar.</p>
							<p><a target="_blank" href="#" class="btn btn-black px-3 py-2">Saiba mais</a></p>
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="row no-gutters choose-wrap divider-two align-items-stretch">
						<div class="col-md-12">
							<div class="choose-wrap full-wrap img align-self-stretch d-flex align-item-center justify-content-end" style="background-image: url(../../assets/images/cards/choose-2.jpg);">
								<div class="tamTextoCard col-md-7 d-flex align-items-center">
									<div class="text text-white px-5">
										<span class="subheading">Socialização</span>
										<h2>Desafios na interação social</h2>
										<p>Crianças autistas podem ter dificuldades para se comunicar e interagir socialmente com outras pessoas.</p>
										<p><a target="_blank" href="https://www.autismspeaks.org/what-autism" target="_blank" class="btn btn-black px-3 py-2">Saiba mais</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="row no-gutters">
								<div class="col-md-6">
									<div class="choose-wrap wrap img align-self-stretch bg-light d-flex align-items-center">
										<div class="text text-center px-5">
											<span class="subheading">Colabore</span>
											<h2>Extra 50% Off</h2>
											<p>Com a sua colaboração, podemos continuar desenvolvendo tecnologias para ajudar crianças autistas a se desenvolverem melhor.</p>
											<p><a target="_blank" href="https://www.autismspeaks.org/what-autism" target="_blank" class="btn btn-black px-3 py-2">Doar Agora</a></p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="choose-wrap wrap img align-self-stretch d-flex align-items-center" style="background-image: url(../../assets/images/cards/choose-3.jpg);">
										<div class="tamTextoCard col-md-7 d-flex align-items-center">
											<div class="text text-white px-5">
												<span class="subheading">Concentração</span>
												<h2>Dificuldade com a atenção</h2>
												<p>Crianças com autismo podem ter dificuldade em se concentrar em atividades específicas por longos períodos de tempo.</p>
												<p><a target="_blank" href="https://www.autismspeaks.org/what-autism" target="_blank" class="btn btn-black px-3 py-2">Saiba mais</a></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-deal bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="sketchfab-embed-wrapper">

						<div data-shadow="true" class="login100-pic js-tilt" data-tilt>
							<img class="imagemRobo" src="../../assets/images/bg/robot.png" alt="IMG" data-tilt-scale="1.1" data-tilt-max="20" data-tilt-glare="true" data-tilt-glare-opacity=".3">
						</div>

					</div>
				</div>
				<div class="col-md-6">
					<div class="heading-section heading-section-white">
						<span class="subheading">Contribuições</span>
						<h2 class="mb-3">Aberto até 05/12/2023</h2>

					</div>
					<div id="timer" class="d-flex mb-4">
						<div class="time" id="days"></div>
						<div class="time pl-4" id="hours"></div>
						<div class="time pl-4" id="minutes"></div>
						<div class="time pl-4" id="seconds"></div>
					</div>
					<div class="text-deal">
						<h2><a href="#">Encerramento da campanha</a></h2>
						<p class="price"><span style="color:#000;" class="mr-2">Meta de </span><span class="price-sale">$30.000</span></p>
						<ul class="thumb-deal d-flex mt-4">
							<li class="img" style="background-image: url(../../assets/images/produtos/product-6.png);"></li>
							<li class="img" style="background-image: url(../../assets/images/produtos/product-2.png);"></li>
							<li class="img" style="background-image: url(../../assets/images/produtos/product-4.png);"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

<!--				
	<section class="ftco-section testimony-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="services-flow">
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<span class="flaticon-bag"></span>
							</div>
							<div class="text">
								<h3>Free Shipping</h3>
								<p class="mb-0">Separated they live in. A small river named Duden flows</p>
							</div>
						</div>
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<span class="flaticon-heart-box"></span>
							</div>
							<div class="text">
								<h3>Valuable Gifts</h3>
								<p class="mb-0">Separated they live in. A small river named Duden flows</p>
							</div>
						</div>
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<span class="flaticon-payment-security"></span>
							</div>
							<div class="text">
								<h3>All Day Support</h3>
								<p class="mb-0">Separated they live in. A small river named Duden flows</p>
							</div>
						</div>
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<span class="flaticon-customer-service"></span>
							</div>
							<div class="text">
								<h3>All Day Support</h3>
								<p class="mb-0">Separated they live in. A small river named Duden flows</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="heading-section ftco-animate mb-5">
						<h2 class="mb-4">Our satisfied customer says</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
					</div>
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">Marketing Manager</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">Interface Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">UI Designer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">Web Developer</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
									<p class="name">Garreth Smith</p>
									<span class="position">System Analyst</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
-->
	<footer class="ftco-footer ftco-section">
		<div class="container">
			<div class="row">
				<div class="mouse">
					<a style="background-color: #fff!important;" href="#" class="mouse-icon">
						<div class="mouse-wheel"><i style="color:#dbcc8f!important;" class="ion-ios-arrow-up"></i></div>
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
	<!-- carregadora -->
	<div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg>
	</div>

	<script>
		function copyLink(event) {
			event.preventDefault();
			var idProduto = event.target.getAttribute('data-id');
			var link = "http://149.78.176.0/ti/view/admin/produtos/?idProduto=" + idProduto;
			navigator.clipboard.writeText(link).then(function() {
				alert("Link copiado para a área de transferência!");
			}, function() {
				alert("Não foi possível copiar o link.");
			});
		}
	</script>

	<!-- Adicione o arquivo da biblioteca Three.js -->
	<script src="https://threejs.org/build/three.min.js"></script>

	<!-- Adicione o arquivo da biblioteca OrbitControls -->
	<script src="https://threejs.org/examples/js/controls/OrbitControls.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

	<!--===============================================================================================-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
	<script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
	<script src="https://unpkg.com/universal-tilt.js/"></script>

	<!-- Inicializa a biblioteca Tilt.js -->
	<script>
		$('.js-tilt').tilt({
			maxTilt: 20,
			perspective: 1000,
			easing: "cubic-bezier(0.250, 0.460, 0.450, 0.940)", // Easing on enter/exit.
			scale: 1.1, // 2 = 200%, 1.5 = 150%, etc..
			speed: 300, // Speed of the enter/exit transition.
			transition: true, // Set a transition on enter/exit.
			disableAxis: null, // What axis should be disabled. Can be X or Y.
			reset: true, // If the tilt effect has to be reset on exit.

			speed: 800,
			scale: 1.15
		});
	</script>
	<script>
		function makeTimer() {
			var endTime = new Date("05 December 2023 08:00:00 GMT+01:00");
			endTime = (Date.parse(endTime) / 1000);

			var now = new Date();
			now = (Date.parse(now) / 1000);

			var timeLeft = endTime - now;

			if (timeLeft > 0) {
				var days = Math.floor(timeLeft / 86400);
				var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
				var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600)) / 60);
				var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

				if (hours < "10") {
					hours = "0" + hours;
				}
				if (minutes < "10") {
					minutes = "0" + minutes;
				}
				if (seconds < "10") {
					seconds = "0" + seconds;
				}

				$("#days").html(days + "<span>Days</span>");
				$("#hours").html(hours + "<span>Hours</span>");
				$("#minutes").html(minutes + "<span>Minutes</span>");
				$("#seconds").html(seconds + "<span>Seconds</span>");
			}
		}

		makeTimer();
		setInterval(function() {
			makeTimer();
		}, 1000);
	</script>
	<?php include_once "../includes/footer.php" ?>