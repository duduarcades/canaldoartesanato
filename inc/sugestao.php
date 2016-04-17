
	<div class="bgHeaderFull notBg_Image">
		<span class="iconSugestion"></span>
		<h1 class="font-black">Sugestões</h1>
		<p class="font-bold">Espaço dedicado para você enviar suas sugestões de novas Aulas, Professores e Técnicas</p>
	</div>


	<section class="content">
	
		<article class="pager_content boxSugestion">
				<h4>Vamos adorar receber sua sugestão!</h4>
				
				<div class="msg msg_info">
					<span class="info"></span>
					<p>Este espaço é dedicado para você enviar suas sugestões de novas Aulas, Professores e Técnicas. Nossa equipe de produção vai receber suas sugestões e, sempre que possível, vamos disponibilizar a sua sugestão dentro do Canal do Artesanato.</p>
					<div class="clear"></div>
				</div>
			
			<div class="content">
				<h4>Minhas sugestões</h4>
				
				<ul class="listMySugestion">
					<li>
						<span class="iconList "></span>
						<span class="fieldData ">08/09/2015</span>
						<span class="fieldPeça fl-right">Lorem ipsum dor ...</span>
			

						<div class="detailsSuggestion">


							<h5><span class="iconListSelected "></span>Detalhes da sugestão</h5>

							<ul class="">
								<li>
									<h5>Data da sugestão</h5>
									<p>08/09/2015</p>
								</li>

								<li>
									<h5>Situação</h5>
									<p>Ativo</p>
								</li>

								<li>
									<h5>Técnica</h5>
									<p>Pintura em Tecido Molhado</p>
								</li>

								<li>
									<h5>Professor</h5>
									<p>Luiz Moreira</p>
								</li>

								<li>
									<h5>Peça / Material</h5>
								</li>
							</ul>

						</div>

					</li>	

					<li>
						<span class="iconList "></span>
						<span class="fieldData ">08/09/2015</span>
						<span class="fieldPeça fl-right">Lorem ipsum dor ...</span>
			

						<div class="detailsSuggestion">


							<h5><span class="iconListSelected "></span>Detalhes da sugestão</h5>

							<ul class="">
								<li>
									<h5>Data da sugestão</h5>
									<p>08/09/2015</p>
								</li>

								<li>
									<h5>Situação</h5>
									<p>Ativo</p>
								</li>

								<li>
									<h5>Técnica</h5>
									<p>Pintura em Tecido Molhado</p>
								</li>

								<li>
									<h5>Professor</h5>
									<p>Luiz Moreira</p>
								</li>

								<li>
									<h5>Peça / Material</h5>
								</li>
							</ul>

						</div>

					</li>	

					<li>
						<span class="iconList "></span>
						<span class="fieldData ">08/09/2015</span>
						<span class="fieldPeça fl-right">Lorem ipsum dor ...</span>
			

						<div class="detailsSuggestion">


							<h5><span class="iconListSelected "></span>Detalhes da sugestão</h5>

							<ul class="">
								<li>
									<h5>Data da sugestão</h5>
									<p>08/09/2015</p>
								</li>

								<li>
									<h5>Situação</h5>
									<p>Ativo</p>
								</li>

								<li>
									<h5>Técnica</h5>
									<p>Pintura em Tecido Molhado</p>
								</li>

								<li>
									<h5>Professor</h5>
									<p>Luiz Moreira</p>
								</li>

								<li>
									<h5>Peça / Material</h5>
								</li>
							</ul>

						</div>

					</li>	

					<div class="clear"></div>

				</ul>



			</div>


		</article>

		<article class="pager_content insertSuggestion">
				<h4>Vamos adorar receber sua sugestão!</h4>

				<h5>Selecione o Professor</h5>

				<form name="updateForm" novalidate id="form-cadastrar" >		

					<div class="select_style">
						<select ng-model="myOptionProf" ng-change="[secondProf='']">
							<option value="indiferente" selected>Indiferente</option>
							<option value="outros">Outros</option>
							<option value="">Afonso Franco</option>
							<option value="">Ana Cecília</option>
							<option value="">Ana Consentino</option>
							<option value="Carmem Freire">Carmem Freire</option>
							<option value="">Denise Lopes</option>
						</select>

						<div class="boxCampoText">
							<input ng-model="secondProf" ng-hide="myOptionProf=='indiferente'" placeholder="Digite o nome do Professor">
						</div>

					</div>	

					

					<div class="box_details">
						<p>Se você não encontrar o professor, selecione a opção “Outros” para digitar o nome do professor desejado.</p>
					</div>

					<h5>Selecione a Técnica</h5>

						<div class="select_style">
							<select ng-model="myOptionTec" ng-change="[second='']">
								<option value="indiferente">Indiferente</option>
								<option value="outros">Outros</option>
								<option value="">Adesivagem</option>
								<option value="">Agulha Mágica</option>
								<option value="">Amigurumi</option>
								<option value="">Bonecas de Pano</option>
								<option value="">Bordado com fitas</option>
							</select>

							<div class="boxCampoText">
								<input ng-model="second" ng-hide="myOptionTec=='indiferente'" placeholder="Digite o nome da Técnica">
							</div>
						</div>	

					<div class="box_details">
						<p>Se você não encontrar a técnica, selecione a opção “Outros” para digitar o nome do professor desejado.</p>
					</div>

					<h5>Comente sobre a peça ou material que você deseja assitir na aula</h5>

					<textarea name="" id="" cols="30" rows="10" placeholder="Comente sobre a peça ou material..." ng-model="updateForm.assunto"></textarea>

					<div class="box_details">
						<p>Use este espaço para descrever de forma clara qual a peça e quais os materiais que você deseja que o professor utilize.</p>
					</div>

					<button onclick="javascript:window.history.go(-1)" class="btn btnback">Voltar</button>
					<button class="btn btnSuggestion" ng-disabled="!updateForm.assunto">Sugestão</button>
				</form>	

				

		</article>				

	</section>
