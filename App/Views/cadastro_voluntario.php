<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Material Bootstrap Wizard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="/css/mystyle.css">

	    <!-- Custom fonts for this template -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

	<link rel="apple-touch-icon" sizes="76x76" href="src/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="src/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="/css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-color: #1a252f;">

		<!-- Navigation -->
    <nav style="position: absolute;" id="id_nav">
      <div class="nav-wrapper">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons"></i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="badges.html">Sobre</a></li>
          <li><a href="sass.html">Entrar</a></li>
        </ul>
      </div>
    </nav>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                    <form action="" method="">
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		CADASTRO DE VOLUNTÁRIOS
		                        	</h3>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">Dados básicos</a></li>
			                            <li><a href="#captain" data-toggle="tab">Disponibilidade</a></li>
			                            <li><a href="#description" data-toggle="tab">Conhecimento</a></li>
			                            <li><a href="#upload" data-toggle="tab">Upload</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text">Começando com seus detalhes básicos.</h4>
			                            	</div>
		                                	<div class="col-sm-6">
		                                		<div class="input-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Nome</label>
			                                          	<input name="name" type="text" >
			                                        </div>
												</div>
												<div class="input-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Whatsapp</label>
			                                          	<input name="name" type="text" >
			                                        </div>
												</div>
												<div class="input-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">CPF</label>
			                                          	<input name="name" type="text" >
			                                        </div>
												</div>

		                                	</div>
		                                	<div class="col-sm-6">
		                                		<div class="input-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Email</label>
			                                          	<input name="name" type="text" >
			                                        </div>
												</div>
		                                    	<div class="input-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Telefone</label>
			                                          	<input name="name" type="text">
			                                        </div>
												</div>
												<div class="input-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">RG</label>
			                                          	<input name="name" type="text" >
			                                        </div>
												</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="captain">
		                                <h4 class="info-text">Agora as informações necessárias para saber da sua disponibilidade para os projetos</h4>
		                                <div class="row">
		                                	<div class="col-sm-6">
		                                		<div class="form-group label-floating is-empty">
		                                        	<label class="control-label">Estado</label>
	                                        		<select class="form-control">
														<option disabled="" selected=""></option>
	                                                	<option value="Afghanistan"> Afghanistan </option>
	                                                	<option value="Albania"> Albania </option>
	                                                	<option value="Algeria"> Algeria </option>
	                                                	<option value="American Samoa"> American Samoa </option>
	                                                	<option value="Andorra"> Andorra </option>
	                                                	<option value="Angola"> Angola </option>
	                                                	<option value="Anguilla"> Anguilla </option>
	                                                	<option value="Antarctica"> Antarctica </option>
	                                                	<option value="...">...</option>
		                                        	</select>
		                                    		<span class="material-input"></span>
		                                    	</div>
		                                    	<div class="form-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Complemento</label>
			                                          	<input name="name" type="text">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-6">
		                                		<div class="form-group label-floating is-empty">
		                                        	<label class="control-label">Cidade</label>
	                                        		<select class="form-control">
														<option disabled="" selected=""></option>
	                                                	<option value="Afghanistan"> Afghanistan </option>
	                                                	<option value="Albania"> Albania </option>
	                                                	<option value="Algeria"> Algeria </option>
	                                                	<option value="American Samoa"> American Samoa </option>
	                                                	<option value="Andorra"> Andorra </option>
	                                                	<option value="Angola"> Angola </option>
	                                                	<option value="Anguilla"> Anguilla </option>
	                                                	<option value="Antarctica"> Antarctica </option>
	                                                	<option value="...">...</option>
		                                        	</select>
		                                    		<span class="material-input"></span>
		                                    	</div>
		                                    	<div class="form-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Disponibilidade de horas na semana:</label>
			                                          	<input name="name" type="number">
			                                        </div>
												</div>
		                                	</div>
		                                </div>
		                               	<div class="row">
		                                    <div class="col-sm-12">
		                                		<div class="input-group" style="width: 100%">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Endereço</label>
			                                          	<input name="name" type="text">
			                                        </div>
												</div>
		                                	</div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h4 class="info-text">Nessa etapa coloque informações mais técnicas.</h4>
		                                    <div class="col-sm-12">
		                                		<div class="form-group label-floating is-empty">
		                                        	<label class="control-label">Formação</label>
	                                        		<select class="form-control">
														<option disabled="" selected=""></option>
	                                                	<option value="Afghanistan">Ensino fundamental completo</option>
	                                                	<option value="Albania">Ensino médio Incompleto</option>
	                                                	<option value="Algeria">Ensino Superior Incompleto</option>
	                                                	<option value="American Samoa">Ensino Superior completo</option>
	                                                	<option value="Andorra">Pós-graduação incompleta</option>
	                                                	<option value="Angola">Pós-graduação completa</option>
	                                                	<option value="...">...</option>
		                                        	</select>
		                                    		<span class="material-input"></span>
		                                    	</div>
		                                    	<div class="input-group" style="width: 100%">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Currículo Lates</label>
			                                          	<input name="name" type="text">
			                                        </div>
												</div>
		                                	</div>
		                                    <div class="col-sm-12">
	                                    		<div class="form-group">
		                                            <label>Outras experiências e observações</label>
		                                            <textarea class="form-control" placeholder="" rows="6"></textarea>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="upload">
		                                <div class="row">
		                                    <h4 class="info-text">Forneça alguns documentos para validação e aceite o contrato.</h4>
		                                    <div class="col-sm-12">
		                                		<div class="input-group" style="width: 100%">
													<div class="form-group label-floating">
			                                          	<label>Comprovante de residência</label>
			                                          	<input name="name" type="file">
			                                        </div>
												</div>
												<div class="input-group" style="width: 100%">
													<div class="form-group label-floating">
			                                          	<label>Currículo</label>
			                                          	<input name="name" type="file">
			                                        </div>
												</div>
												<div class="input-group" style="width: 100%">
													<div class="form-group label-floating">
			                                          	<label>RG/CPF</label>
			                                          	<input name="name" type="file" multiple>
			                                        </div>
												</div>
												<div class="input-group" style="width: 100%">
													<div class="form-group label-floating">
			                                          	<label>Contrato</label>
			                                          	<input name="name" type="file">
			                                        </div>
												</div>
												<div class="input-group" style="width: 100%">
													<div class="form-group label-floating">
			                                          	<label>Certificados</label>
			                                          	<input name="name" type="file" multiple>
			                                        </div>
												</div>
												<div class="checkbox">
												  <label>
														<input id="indeterminate-checkbox" type="checkbox">
													  	Li e aceito o contrato e os termos de uso.
												  </label>
											  </div>
		                                	</div>
		                                </div>
		                            </div>
		                        </div>
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value="Próximo" />
	                                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finalizar' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Voltar' />
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="/js/jquery.validate.min.js"></script>
</html>
