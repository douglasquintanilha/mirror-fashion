<!DOCTYPE html>
<html>
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">

		<title>Mirror Fashion</title>

		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">


	</head>
	<body>
		<?php include('cabecalho.php'); ?>

		<div class="container destaque">
			<section class="busca">
				<h2>Busca</h2>
				<form action="">
					<input type="search">
					<input type="image" src="/img/busca.png">
				</form>
			</section>
			<section class="menu-departamentos">
				<h2>Departamentos</h2>
				<nav>
					<ul>
						<li>
							<a href="#">Blusas e Camisas</a>
							<ul>
								<li><a href="#">Manga curta</a></li>
								<li><a href="#">Manga cumprida</a></li>
								<li><a href="#">Camisa social</a></li>
								<li><a href="#">Camisal casual</a></li>
							</ul>
						</li>
						<li><a href="#">Calças</a></li>
						<li><a href="#">Saias</a></li>
						<li><a href="#">Vestidos</a></li>
						<li><a href="#">Sapatos</a></li>
						<li><a href="#">Bolsas e Carteiras</a></li>
						<li><a href="#">Acessórios</a></li>
					</ul>
				</nav>
			</section>

			<img src="img/destaque-home.png" alt="Promoções: Big City Night">
		</div>
		<div class="container paineis">
			<section class="painel novidades">
				<h2>Novidades</h2>
				<ol>
					<li><a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura1.png" alt="Produto">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li><a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura2.png" alt="Produto">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li><a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura3.png" alt="Produto">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li><a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura4.png" alt="Produto">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li><a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura5.png" alt="Produto">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li><a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura6.png" alt="Produto">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>
			</section>
			<section class="painel mais-vendidos">
				<h2>Mais vendidos</h2>
				<ol>
					<li><a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura1.png" alt="Produto">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
					<li><a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura2.png" alt="Produto">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li><a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura3.png" alt="Produto">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li><a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura4.png" alt="Produto">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li><a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura5.png" alt="Produto">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>

					<li><a href="produto.php">
							<figure>
								<img src="img/produtos/miniatura6.png" alt="Produto">
								<figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>
			</section>
		</div>
		<?php include('rodape.php'); ?>
	</body>
</html>
