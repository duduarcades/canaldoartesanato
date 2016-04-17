
	
	
	<div class="headerBanner">		

		<div class="head_line_title box_transp boxshadow">

			<div class="user_content">
				<img src="imagens/1be203e4-e50b-4a13-82a3-d4851d0bca28.jpg" alt="">
			</div>

			<h3>Professor Sassa</h3>
			<span>profsassa@gmail.com</span>

			<a href="#SimpleModal" class="btn btnAltSenha"><span class="font-bold">Alterar senha</span></a>

		</div>
	
	</div>

	<section class="content">

		<article class="pager_content">

			<h4>Altere  suas preferências de e-mail:</h4>

			<div class="boxCheckedPref">	

				<label for="checkbox1" class="lblCheckBox">
					<span class="txtMsg font-bold">E-mail de novidades da semana</span>
					Receber<input type="checkbox" id="checkbox1" class="sltCheckbox">
				</label>

			</div>

			<div class="boxCheckedPref">

				<label for="checkbox2" class="lblCheckBox">
					<span class="txtMsg font-bold">E-mail de nova aula cadastrada</span>
					Receber<input type="checkbox" id="checkbox2" class="sltCheckbox">
				</label>

			</div>

			<div class="boxCheckedPref">

				<label for="checkbox3" class="lblCheckBox">
					<span class="txtMsg font-bold">E-mail de nova aula cadastrada</span>
					Receber<input type="checkbox" id="checkbox3" class="sltCheckbox">
				</label>

			</div>

			<div class="clear"></div>

		</article>

		<article class="pager_content">
			<h4>Dados Financeiros</h4>
			
			<div class="boxBandCartao ">
				<span class="bandCartao bandVisa"></span>
			</div>

			<ul class="perfil_user">
				<li>
					<span class="icon_user"></span>José da Silva Lima</li>
				<li>
					<span class="icon_num_card"></span>xxxx xxxx xxxx xxxx
				</li>
			</ul>

			<div class="box_content">
				<p>Para alterar o cartão de crédito a ser debitado, clique no botão abaixo.</p>
				<a href="alterarcartao" class="btnLink font-bold">Alterar Cartão de Crédito</a>
			</div>

			<div class="box_content">
				<p>Para cancelar sua conta, clique no botão “cancelar assinatura”. Você continuará tendo acesso até o período que já foi pago e será bloqueado no dia em que seria o próximo pagamento.</p>
				<a href="#" class="btnLink font-bold">Cancelar assinatura</a>
			</div>



			<div class="clear"></div>
		</article>	

		<article class="pager_content colum_dados_pagto">
			<h4>Histórico de Pagamento</h4>		

			<ul class="list_pagmt">
				<li>
					<h5>Próximo pagamento</h5>
					<span class="txt_date font-bold">99/99/9999</span>
					<p class="nome_cartao">Visa</p>
					<span class="num_cartao">xxxx xxxx xxxx 1234</span>
				</li>

				<li class="pagto_ok">
					<h5>Pago</h5>
					<span class="txt_date font-bold">99/99/9999</span>
					<p class="nome_cartao">Visa</p>
					<span class="num_cartao">xxxx xxxx xxxx 1234</span>
				</li>

				<li class="pagto_ok">
					<h5>Pago</h5>
					<span class="txt_date font-bold">99/99/9999</span>
					<p class="nome_cartao">Visa</p>
					<span class="num_cartao">xxxx xxxx xxxx 1234</span>
				</li>

				<li class="pagto_ok">
					<h5>Pago</h5>
					<span class="txt_date font-bold">99/99/9999</span>
					<p class="nome_cartao">Visa</p>
					<span class="num_cartao">xxxx xxxx xxxx 1234</span>
				</li>

				<li>
					<a href="#" class="btnLink font-bold">Carregar pagamentos anteriores</a>
				</li>

			</ul>

			<div class="clear"></div>

		</article>	

	</section>






	<section id="SimpleModal">

		<div class="content_modal">

				<header class="modal_edit">
					<h2>Alterar Senha</h2>
					<a href="#" class="close closeModal_2" id="closeModal" title="Fechar">X</a>
				</header>
				
				<article class="editPass">
					<h3>Preencha os campos abaixo para alterar sua senha.</h3>
					<form action="#">
						<ul>
							<li>
								<input type="email" readonly="true" placeholder="emailteste@provedor.com.br">
							</li>
							<li>
								<input id="senha" class="" type="password" placeholder="Digite sua nova senha">
								<span id="msgSenha" class="validacao">Digite sua nova senha</span>
							</li>
							<li>
								<input id="repSenha" class="" type="password" placeholder="Repita a nova senha">
								<span id="msgRepSenha" class="validacao">Repita sua nova senha</span>
							</li>
							<li><input type="submit" id="btnEnviar" value="Alterar Senha"></li>
						</ul>
					</form>
				</article>

		    </div>
	
	</section>

	<script type="text/javascript">

		$(function(){
			$('#btnEnviar').on('click', function(){
				
				var senha    = $('#senha').val();
				var repSenha = $('#repSenha').val();

				if(senha == "") {
					$('#msgSenha').fadeIn();
					$('#senha').fadeIn().addClass('input_error');
					$('#senha').focus();
					return false;

				} else if (senha.length < 6 ) {
					$('#msgSenha').fadeIn().text('Sua nova senha deve conter no mínimo 6 caracteres');
					$('#senha').fadeIn().addClass('input_error');
					$('#senha').focus();
					return false;

				} else {
					$('#msgSenha').fadeOut();
					$('#senha').removeClass('input_error');

					if(repSenha == "") {
						$('#msgRepSenha').fadeIn();
						$('#repSenha').fadeIn().addClass('input_error');	
						$('#repSenha').focus();
						return false;

					} else if(repSenha != senha) {
						$('#msgRepSenha').fadeIn().text('As senhas digitadas não são iguais');
						$('#repSenha').fadeIn().addClass('input_error');
						$('#repSenha').focus();	
						return false;

					} else {
						$('#msgRepSenha').fadeOut();
						$('#repSenha').removeClass('input_error');	
						$('#repSenha').val("");
						$('#senha').val("");
					}

				}

			});
		});


	</script>

	