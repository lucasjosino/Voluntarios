<?php require_once('formwizard_components/head.php'); ?>

<body>
	

	<div class="image-container set-full-height" style="background-color: #1a252f;">

	<?php require_once('formwizard_components/nav.php'); ?>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
					
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                    <form action="envio_voluntario" method="POST">
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
			                                          	<input name="nome" type="text" >
			                                        </div>
												</div>
												<div class="input-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Whatsapp</label>
			                                          	<input name="whatsapp" type="text" >
			                                        </div>
												</div>
												<div class="input-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">CPF</label>
			                                          	<input name="cpf" type="text" >
			                                        </div>
												</div>

		                                	</div>
		                                	<div class="col-sm-6">
		                                		<div class="input-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Email</label>
			                                          	<input name="email" type="text" >
			                                        </div>
												</div>
		                                    	<div class="input-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Telefone</label>
			                                          	<input name="telefone" type="text">
			                                        </div>
												</div>
												<div class="input-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">RG</label>
			                                          	<input name="rg" type="text" >
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
	                                        		<select class="form-control" id="estado1" name="estado">
		                                        	</select>
		                                    		<span class="material-input"></span>
		                                    	</div>
		                                    	<div class="form-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Complemento</label>
			                                          	<input name="complemento" type="text">
			                                        </div>
												</div>
		                                	</div>
		                                	<div class="col-sm-6">
		                                		<div class="form-group label-floating is-empty">
													<label class="control-label">Cidade</label>
	                                        		<select class="form-control" id="cidade1" name="cidade">
		                                        	</select>
		                                    		<span class="material-input"></span>
		                                    	</div>
		                                    	<div class="form-group">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Disponibilidade de horas na semana:</label>
			                                          	<input name="horas" type="number">
			                                        </div>
												</div>
		                                	</div>
		                                </div>
		                               	<div class="row">
		                                    <div class="col-sm-12">
		                                		<div class="input-group" style="width: 100%">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Endereço</label>
			                                          	<input name="endereco" type="text">
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
	                                        		<select class="form-control" name="formacao">
														<option disabled="" selected=""></option>
	                                                	<option value="Ensino fundamental completo">Ensino fundamental completo</option>
	                                                	<option value="Ensino médio Incompleto">Ensino médio Incompleto</option>
	                                                	<option value="Ensino Superior Incompleto">Ensino Superior Incompleto</option>
	                                                	<option value="Ensino Superior completo">Ensino Superior completo</option>
	                                                	<option value="Pós-graduação incompleta">Pós-graduação incompleta</option>
	                                                	<option value="Pós-graduação completa">Pós-graduação completa</option>
		                                        	</select>
		                                    		<span class="material-input"></span>
		                                    	</div>
		                                    	<div class="input-group" style="width: 100%">
													<div class="form-group label-floating">
			                                          	<label class="control-label">Currículo Lates</label>
			                                          	<input name="lattes" type="text">
			                                        </div>
												</div>
		                                	</div>
		                                    <div class="col-sm-12">
	                                    		<div class="form-group">
		                                            <label>Outras experiências e observações</label>
		                                            <textarea class="form-control" name="obs" placeholder="" rows="6"></textarea>
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
			                                          	<label>Comprovante de residência *</label>
			                                          	<input name="residencia" type="file">
			                                        </div>
												</div>
												<div class="input-group" style="width: 100%">
													<div class="form-group label-floating">
			                                          	<label>Currículo *</label>
			                                          	<input name="curriculo" type="file">
			                                        </div>
												</div>
												<div class="input-group" style="width: 100%">
													<div class="form-group label-floating">
			                                          	<label>RG/CPF *</label>
			                                          	<input name="rgcpf" type="file" multiple>
			                                        </div>
												</div>
												<div class="input-group" style="width: 100%">
													<div class="form-group label-floating">
			                                          	<label>Contrato *</label>
			                                          	<input name="contrato" type="file">
			                                        </div>
												</div>
												<div class="input-group" style="width: 100%">
													<div class="form-group label-floating">
			                                          	<label>Certificados</label>
			                                          	<input name="certificados" type="file" multiple>
			                                        </div>
												</div>
												<div class="row">
												<div class="col-md-3"></div>
												<div class="col-md-6 center">
													<div class="input-group">
														<div class="form-group label-floating">
															<label>Senha</label>
															<input name="senha" type="password">
														</div>
													</div>
													</div>
												<div class="col-md-3"></div>
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
	                                    <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finalizar' />
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

	<div class="arrow-logo"><svg class="flecha" height="20vh" viewBox="0 0 512 512" width="20vh" xmlns="http://www.w3.org/2000/svg"><path d="M100 121l21-21 274 274-21 21zm0 0" fill="#575f64"/><path d="M100 121l11-10 274 274-11 10zm0 0" fill="#32393f"/><path d="M77 152h60c4 0 8-1 11-4s4-7 4-11V77c0-5-3-11-8-13L22 2A15 15 0 0 0 2 22l62 122c2 5 8 8 13 8zm0 0" fill="#c5d3dd"/><path d="M137 152c4 0 8-1 11-4L4 4C0 9-1 16 2 22l62 122c2 5 8 8 13 8zm0 0" fill="#9facba"/><path d="M315 421l87 87c8 7 21 4 24-6l19-57 57-19c5-1 8-6 10-10 1-6-1-11-4-14l-87-87c-4-4-10-6-16-4l-63 21-6 4-4 6-21 63c-2 6 0 12 4 16zm0 0" fill="#61d7a8"/><path d="M315 421l87 87c8 7 21 4 24-6l19-57-109-109-4 6-21 63c-2 6 0 12 4 16zm0 0" fill="#00ab94"/><path d="M385 406l65 65c6 6 16 6 21 0 6-6 6-15 0-21l-65-65c-6-6-15-6-21 0-6 5-6 15 0 21zm0 0" fill="#00ab94"/><path d="M385 406l65 65c6 6 16 6 21 0l-86-86c-6 5-6 15 0 21zm0 0" fill="#009184"/><path d="M117 374l274-274 21 21-274 274zm0 0" fill="#7c8388"/><path d="M127 384l274-273 11 10-274 274zm0 0" fill="#575f64"/><path d="M448 144l62-122a15 15 0 0 0-20-20L368 64c-5 2-8 8-8 13v60c0 4 1 8 4 11s7 4 11 4h60c5 0 11-3 13-8zm0 0" fill="#deecf1"/><path d="M375 152c-4 0-8-1-11-4L508 4c4 5 5 12 2 18l-62 122c-2 5-8 8-13 8zm0 0" fill="#c5d3dd"/><path d="M201 405l-21-63-4-6-6-4-63-21c-6-2-12 0-16 4L4 402c-3 3-5 8-4 14 2 4 5 9 10 10l57 19 19 57c3 10 16 13 24 6l87-87c4-4 6-10 4-16zm0 0" fill="#61d7a8"/><path d="M197 421l-87 87c-8 7-21 4-24-6l-19-57 109-109 4 6 21 63c2 6 0 12-4 16zm0 0" fill="#00ab94"/><path d="M127 406l-65 65c-6 6-16 6-21 0-6-6-6-15 0-21l65-65c6-6 15-6 21 0 6 5 6 15 0 21zm0 0" fill="#00ab94"/><path d="M127 406l-65 65c-6 6-16 6-21 0l86-86c6 5 6 15 0 21zm0 0" fill="#009184"/></svg></div>
					<div class="sword-logo"><svg class="espada" height="20vh" viewBox="-117 0 512 512" width="20vh" xmlns="http://www.w3.org/2000/svg"><path d="M139 156l-11 165 11 191 25-18c15-11 25-30 25-49V156zm0 0" fill="#c5d3dd"/><path d="M89 156v289c0 19 9 38 25 49l25 18V156zm0 0" fill="#d9e7ec"/><path d="M154 161h-15l-11 74 11 75h15zm0 0" fill="#d9e7ec"/><path d="M124 161h15v149h-15zm0 0" fill="#f7fafb"/><path d="M171 107V11h-32l-11 106 11 54h72c0 17 15 32 32 32h2c18 0 32-15 32-32v-64H171zm0 0" fill="#ffb62d"/><path d="M107 11v96H0v64c0 17 14 32 32 32h2c18 0 32-15 32-32h73V11zm0 0" fill="#fdcb02"/><path d="M192 0h-53l-11 11 11 19h53zm0 0" fill="#f90"/><path d="M85 0h54v30H85zm0 0" fill="#ffb62d"/></svg></div>	


	<!-- modal login -->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      	<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
        	<h5 class="modal-title" id="exampleModalLabel">Login</h5>
      	</div>
      	<div class="modal-body">
					<form>
  					<div class="form-group">
    					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre com o CPF">
  					</div>
  					<div class="form-group">
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entre com a senha">
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
					<h3>Sistema construído para gerência de voluntários como demanda da ong Narrativa da Imaginação</h3>
					<h5>Atualmente em versão estável. Em caso de dificuldades, dúvidas e sugestões entrar em contato com o <a href="#">PET-SI</a> da Universidade Federal de Uberlândia ou pelo email <a href="#">lukasj@live.com</a>.</h5>
					<h4>Tecnologias e créditos</h4>
					<div>Icons made by <a href="https://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" 			    title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" 			    title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
					<div>Material Wizard Forms by <a href="https://www.creative-tim.com"> Creative tim </a> </div>
					<div>Dashboard ElaAdmin by <a href="https://colorlib.com"> Colorlib </a></div>
				</div>
    	</div>
  	</div>
	</div>

</body>
	
<?php require_once('formwizard_components/footer.php'); ?>

</html>
