<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<!-- Meta tag obrigatória -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Yasmim Morais de Vasconcelos">
	<title>Notícias - Associação dos Empresários do Bairro do Alecrim</title>

	<!-- Link para a folha de estilo -->
	<link rel="stylesheet" href="assets/css/style.css">
	
	<!-- Favicon  -->
	<link rel="shortcut icon" href="assets/img/favicon_aeba.png">
	
	<!-- Links das fontes: Roboto e Open Sans -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet">
<body>
	<!-- Breadcrumb -->
	<section>
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="#">Página Inicial</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Notícias</li>
		  </ol>
		</nav>
	</section>
	
	<!-- Título da sessão Notícias --> 
	<section class="container">
		<div class="row">
			<div class="col-lg-10 pt-4 mx-auto">
				<h2 class="title pt-3 pb-1">Saiba de tudo que acontece na nossa associação!</h2>
				<div class="row-title mb-5"></div>
			</div>
		</div>
	</section>

	<!-- Sessão dos cards das Notícias -->
	<!-- Quando a tela for lg, cada card ocupa col-3, enquanto a primeira col (offset) fica vazia para manter centralizado o resto do conteúdo da row. Já quando a tela for md, os cards ocuparão col-4 e em sm col-12. 
	-->
	<section class="container">
		<div class="row">
			<div class="col-lg-3 mb-5 col-md-4 offset-lg-1">
				<!-- Imagem -->
				<img src="assets/img/image-noticia.png" class="card-img-top rounded-0 border-noticia" alt="...">
			    <div class="card-body p-0 mt-3">
			    	<!-- Título -->
			      <a class="card-title-noticia" href="#">Evento na Assembléia para novas obras</a>
			      <!-- Descrição -->
			      <p class="card-text text-description mt-1">Presença dos membros do conselho para realização do feito em prol da população.</p>
			      <p class="card-text"><small class="text-muted">Publicado em 05/09/2019</small></p>
			    </div>
			 </div>			
			<div class="col-lg-3 mb-5 col-md-4">
				<!-- Imagem -->
				<img src="assets/img/image-noticia.png" class="card-img-top rounded-0 border-noticia" alt="...">
			    <div class="card-body p-0 mt-3">
			    	<!-- Título -->
			      <a class="card-title-noticia" href="#">Evento na Assembléia para novas obras</a>
			      <!-- Descrição -->
			      <p class="card-text text-description mt-1">Presença dos membros do conselho para realização do feito em prol da população.</p>
			      <p class="card-text"><small class="text-muted">Publicado em 05/09/2019</small></p>
			    </div>
			 </div>
			<div class="col-lg-3 mb-5 col-md-4">
				<!-- Imagem -->
				<img src="assets/img/image-noticia.png" class="card-img-top rounded-0 border-noticia" alt="...">
			    <div class="card-body p-0 mt-3">
			    	<!-- Título -->
			      <a class="card-title-noticia" href="#">Evento na Assembléia para novas obras</a>
			      <!-- Descrição -->
			      <p class="card-text text-description mt-1">Presença dos membros do conselho para realização do feito em prol da população.</p>
			      <p class="card-text"><small class="text-muted">Publicado em 05/09/2019</small></p>
			    </div>
			 </div>
		</div>

		<div class="row">
			<div class="col-lg-3 mb-5 col-md-4 offset-lg-1">
				<!-- Imagem -->
				<img src="assets/img/image-noticia.png" class="card-img-top rounded-0 border-noticia" alt="...">
			    <div class="card-body p-0 mt-3">
			    	<!-- Título -->
			      <a class="card-title-noticia" href="#">Evento na Assembléia para novas obras</a>
			      <!-- Descrição -->
			      <p class="card-text text-description mt-1">Presença dos membros do conselho para realização do feito em prol da população.</p>
			      <p class="card-text"><small class="text-muted">Publicado em 05/09/2019</small></p>
			    </div>
			 </div>
			<div class="col-lg-3 mb-5 col-md-4">
				<!-- Imagem -->
				<img src="assets/img/image-noticia.png" class="card-img-top rounded-0 border-noticia" alt="...">
			    <div class="card-body p-0 mt-3">
			    	<!-- Título -->
			      <a class="card-title-noticia" href="#">Evento na Assembléia para novas obras</a>
			      <!-- Descrição -->
			      <p class="card-text text-description mt-1">Presença dos membros do conselho para realização do feito em prol da população.</p>
			      <p class="card-text"><small class="text-muted">Publicado em 05/09/2019</small></p>
			    </div>
			 </div>
			<div class="col-lg-3 mb-5 col-md-4">
				<!-- Imagem -->
				<img src="assets/img/image-noticia.png" class="card-img-top rounded-0 border-noticia" alt="...">
			    <div class="card-body p-0 mt-3">
			    	<!-- Título -->
			      <a class="card-title-noticia" href="#">Evento na Assembléia para novas obras</a>
			      <!-- Descrição -->
			      <p class="card-text text-description mt-1">Presença dos membros do conselho para realização do feito em prol da população.</p>
			      <p class="card-text"><small class="text-muted">Publicado em 05/09/2019</small></p>
			    </div>
			 </div>
		</div>			
		</div>
	</section>
	
	<!-- Paginação -->
	<section class="container mt-3">
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