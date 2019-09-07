<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<!-- Meta tag obrigatória -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Yasmim Morais de Vasconcelos">
	<title>Visualizar Empresa - Associação dos Empresários do Bairro do Alecrim</title>

	<!-- Link para a folha de estilo -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	<!-- Favicon  -->
	<link rel="shortcut icon" href="assets/img/favicon_aeba.png">
	
	<!-- Links das fontes: Roboto e Open Sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<!-- Breadcrumb -->
	<section>
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="#">Página Inicial</a></li>
		    <li class="breadcrumb-item"><a href="#">Produtos & Serviços</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Visualizar Empresa</li>
		  </ol>
		</nav>
	</section>

	<!-- Título da sessão Notícias --> 
	<section class="container">
		<div class="row">
			<div class="col-lg-12 pt-4 mx-auto">
				<h2 class="title pt-3 pb-1">Produtos & Serviços</h2>
				<div class="row-title mb-3"></div>
			</div>
		</div>
	</section>

	<!-- Barra de pesquisa e lista de categorias & Informações sobre a empresa selecionada -->
	<section class="container">
		<div class="row">
			<div class="col-lg-4">
				<!-- Barra de pesquisa -->
				<form class="form-inline mb-3">
				    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search">
				    <button class="ml-lg-1 btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
				</form>

				<!-- Lista de Categorias dos Produtos & Serviços -->
				<div class="list-group mr-lg-5">
					  <a href="#" class="list-group-item list-group-item-action active-green">
					    Cras justo odio
					  </a>
					  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
					  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
					  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
					  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
					  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
					  <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
					</div>
				</div>
				
				<!-- Informações sobre a empresa selecionada -->
				<div class="col-lg-8 mx-auto">
					<div class="card mb-3 border-0">
					  <div class="row no-gutters ">
					    <div class="col-md-4">
					    <!-- Logo da empresa -->
					      <img class="mb-0" src="assets/img/logo-empresa.png" style="width: 100%;" class="" alt="Imagem da Notícia">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					      	<!-- Nome da empresa -->
					        <a href="#"><h5 class="title-card-empresa">Nome da empresa</h5></a>
					        <!-- Categoria da empresa -->
					        <a href="#">Categoria do ramo<br></a>	
					        <!-- Endereço e link para o mapa -->
					        <br>
					        <b>Endereço:</b> <a href="#">RUA DAS AMOREIRAS - 342, LAGOA NOVA - RN</a><br>	
							<b>Telefone:</b> <a href="#">(84) 9 9999-9999</a>
					      </div>
					    </div>
					  </div>
					</div>
					
					<h2 class="title-md-v-empresa pt-3 pb-1">Produtos & Serviços</h2>
					<div class="row-title mb-3"></div>


					<!-- Produtos ofertados pela empresa -->
					<div class="row">
						<div class="card m-3" style="width: 12rem;">
						<!-- Imagem do produto -->
						  <img class="card-img-top" src="assets/img/produto.jpg" alt="Imagem de capa do card">
						  <div class="card-body">
						  	<!-- Nome do produto -->
						    <a href="" class="card-title-noticia">Título do card</a>
						    <!-- Categoria do produto -->
						    <a href="#">Categoria do ramo<br></a>
						  </div>
						</div>

						<div class="card m-3" style="width: 12rem;">
						<!-- Imagem do produto -->
						  <img class="card-img-top" src="assets/img/produto.jpg" alt="Imagem de capa do card">
						  <div class="card-body">
						  	<!-- Nome do produto -->
						    <a href="" class="card-title-noticia">Título do card</a>
						    <!-- Categoria do produto -->
						    <a href="#">Categoria do ramo<br></a>
						  </div>
						</div>

						<div class="card m-3" style="width: 12rem;">
						<!-- Imagem do produto -->
						  <img class="card-img-top" src="assets/img/produto.jpg" alt="Imagem de capa do card">
						  <div class="card-body">
						  	<!-- Nome do produto -->
						    <a href="" class="card-title-noticia">Título do card</a>
						    <!-- Categoria do produto -->
						    <a href="#">Categoria do ramo<br></a>
						  </div>
						</div>

						<div class="card m-3" style="width: 12rem;">
						<!-- Imagem do produto -->
						  <img class="card-img-top" src="assets/img/produto.jpg" alt="Imagem de capa do card">
						  <div class="card-body">
						  	<!-- Nome do produto -->
						    <a href="" class="card-title-noticia">Título do card</a>
						    <!-- Categoria do produto -->
						    <a href="#">Categoria do ramo<br></a>
						  </div>
						</div>

					</div>
				</div>
	</section>

	<!-- Paginação -->
	<section class="container mt-5">
		<div class="row">
			<div class="offset-lg-4 col">
			<nav aria-label="...">
			  <ul class="pagination">
			    <li class="page-item disabled">
			      <span class="page-link">Anterior</span>
			    </li>

			    <li class="page-item" aria-current="page">
			      <span class="page-link active-green">
			        1
			        <span class="sr-only">(current)</span>
			      </span>
			    </li>

			    <li class="page-item"><a class="page-link" href="#">2</a></li>

			    <li class="page-item"><a class="page-link" href="#">3</a></li>

			    <li class="page-item">
			      <a class="page-link" href="#">Próximo</a>
			    </li>
			  </ul>
			</nav>
			</div>
		</div>
	</section>

</body>

</html>