<?php require_once('formwizard_components/head.php'); ?>

<body>
	<div class="image-container set-full-height" style="background-color: #1a252f;">

    <?php require_once('formwizard_components/nav.php'); ?>
	
	    <!--   Big container   -->
	    <div class="container">
	      <div class="row text-center">
		      <div class="col-sm-8 col-sm-offset-2">
						<div class="front-head">Seja um Aventureiro!</div>
						<div class="col-md-12">
							<h4>Se candidate para ter a oportunidade de atuar em várias atividades da ong.</h4>
						</div>
						<div class="col-md-12 front-link">
							<h3><a href="/cadastrovoluntario" class="btn btn-next btn-fill btn-danger btn-wd">quero ser um aventureiro</a></h3>
						</div>
					<div class="arrow-logo"><svg class="flecha" height="20vh" viewBox="0 0 512 512" width="20vh" xmlns="http://www.w3.org/2000/svg"><path d="M100 121l21-21 274 274-21 21zm0 0" fill="#575f64"/><path d="M100 121l11-10 274 274-11 10zm0 0" fill="#32393f"/><path d="M77 152h60c4 0 8-1 11-4s4-7 4-11V77c0-5-3-11-8-13L22 2A15 15 0 0 0 2 22l62 122c2 5 8 8 13 8zm0 0" fill="#c5d3dd"/><path d="M137 152c4 0 8-1 11-4L4 4C0 9-1 16 2 22l62 122c2 5 8 8 13 8zm0 0" fill="#9facba"/><path d="M315 421l87 87c8 7 21 4 24-6l19-57 57-19c5-1 8-6 10-10 1-6-1-11-4-14l-87-87c-4-4-10-6-16-4l-63 21-6 4-4 6-21 63c-2 6 0 12 4 16zm0 0" fill="#61d7a8"/><path d="M315 421l87 87c8 7 21 4 24-6l19-57-109-109-4 6-21 63c-2 6 0 12 4 16zm0 0" fill="#00ab94"/><path d="M385 406l65 65c6 6 16 6 21 0 6-6 6-15 0-21l-65-65c-6-6-15-6-21 0-6 5-6 15 0 21zm0 0" fill="#00ab94"/><path d="M385 406l65 65c6 6 16 6 21 0l-86-86c-6 5-6 15 0 21zm0 0" fill="#009184"/><path d="M117 374l274-274 21 21-274 274zm0 0" fill="#7c8388"/><path d="M127 384l274-273 11 10-274 274zm0 0" fill="#575f64"/><path d="M448 144l62-122a15 15 0 0 0-20-20L368 64c-5 2-8 8-8 13v60c0 4 1 8 4 11s7 4 11 4h60c5 0 11-3 13-8zm0 0" fill="#deecf1"/><path d="M375 152c-4 0-8-1-11-4L508 4c4 5 5 12 2 18l-62 122c-2 5-8 8-13 8zm0 0" fill="#c5d3dd"/><path d="M201 405l-21-63-4-6-6-4-63-21c-6-2-12 0-16 4L4 402c-3 3-5 8-4 14 2 4 5 9 10 10l57 19 19 57c3 10 16 13 24 6l87-87c4-4 6-10 4-16zm0 0" fill="#61d7a8"/><path d="M197 421l-87 87c-8 7-21 4-24-6l-19-57 109-109 4 6 21 63c2 6 0 12-4 16zm0 0" fill="#00ab94"/><path d="M127 406l-65 65c-6 6-16 6-21 0-6-6-6-15 0-21l65-65c6-6 15-6 21 0 6 5 6 15 0 21zm0 0" fill="#00ab94"/><path d="M127 406l-65 65c-6 6-16 6-21 0l86-86c6 5 6 15 0 21zm0 0" fill="#009184"/></svg></div>
					<div class="sword-logo"><svg class="espada" height="20vh" viewBox="-117 0 512 512" width="20vh" xmlns="http://www.w3.org/2000/svg"><path d="M139 156l-11 165 11 191 25-18c15-11 25-30 25-49V156zm0 0" fill="#c5d3dd"/><path d="M89 156v289c0 19 9 38 25 49l25 18V156zm0 0" fill="#d9e7ec"/><path d="M154 161h-15l-11 74 11 75h15zm0 0" fill="#d9e7ec"/><path d="M124 161h15v149h-15zm0 0" fill="#f7fafb"/><path d="M171 107V11h-32l-11 106 11 54h72c0 17 15 32 32 32h2c18 0 32-15 32-32v-64H171zm0 0" fill="#ffb62d"/><path d="M107 11v96H0v64c0 17 14 32 32 32h2c18 0 32-15 32-32h73V11zm0 0" fill="#fdcb02"/><path d="M192 0h-53l-11 11 11 19h53zm0 0" fill="#f90"/><path d="M85 0h54v30H85zm0 0" fill="#ffb62d"/></svg></div>	
		    </div>
	    </div> <!-- row -->
		</div> <!--  big container -->
	</div>
		
	<!-- modal login -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      	<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
        	<h5 class="modal-title" id="exampleModalLabel">Login</h5>
      	</div>
      	<div class="modal-body">
					<form action="login" method="POST">
  					<div class="form-group">
    					<input type="text" name="user" class="form-control" aria-describedby="emailHelp" placeholder="Entre com o CPF">
  					</div>
  					<div class="form-group">
							<input type="password" name="pass" class="form-control" placeholder="Entre com a senha">
						</div>
						<div class="form-group text-center">
							<button type="submit" class="btn">Logar</button> 
							<small id="emailHelp" class="form-control text-center"><a href="#">esqueci a minha senha.</a></small>
						</div>
					</form>
      	</div>
    	</div>
  	</div>
	</div>

	<!-- modal sobre -->
	<div class="modal fade" id="sobreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      	<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
        	<h5 class="modal-title" id="exampleModalLabel">Sobre</h5>
      	</div>
      	<div class="modal-body text-center">
					<h3>Sistema construído para gerência de voluntários como demanda da ong narrativa da imaginação.</h3>
					<h5>Atualmente em versão estável. Em caso de dificuldades, dúvidas e sugestões entrar em contato com o <a href="#">PET-SI</a> da Universidade Federal de Uberlândia ou pelo email <a href="#">lukasj@live.com</a>.</h5>
					<h4>Tecnologias e créditos</h4>
					<div>Icons by <a href="https://www.iconfinder.com/Locad">Locad</a></div>
					<div>Material Wizard Forms by <a href="https://www.creative-tim.com"> Creative tim </a> </div>
					<div>Dashboard ElaAdmin by <a href="https://colorlib.com"> Colorlib </a></div>
				</div>
    	</div>
  	</div>
	</div>
</body>

<?php require_once('formwizard_components/footer.php'); ?>

</html>
