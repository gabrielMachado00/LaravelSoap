	          
					<form method="post">
						         <input type="hidden" name="_token" value="{{ csrf_token() }}">

						<label for="CPF">CPF</label>
						<input type="text" name="CPF" id="cpf"  required/>
						<label for="DataNasc">Data Nascimento</label>
						<input type="text" id="datanasc" name="datanasc"  required/>
						<label for="Senha">Senha</label>
						<input type="password"  name="Senha" id="senha" autocomplete="off" value="" required/>
						<label for="Produto">Produto</label>
						<input type="text" id="Produto" list="mk_produtos" name="Produto"  required/>
					  <label for="CodProf">Codigo Profissional</label>
						<input type="text" name="CodProf"  required/>
						<label for="UFProf">UF Profissional</label>
						<input type="text" id="UFProf" name="UFProf" value="" required/>
						<label for="NomeProf">Nome Profissional</label>
						<input type="text" name="NomeProf" value="" required/>
						<input type="hidden" name="Cartao" value="0" />
						<input type="hidden" id="EAN" name="EAN" value="" />

			      <div class="alinha-direita">
							<input class="botao-cadastro-v" type="submit" name="submitForm2" value="Proximo"/>
						</div>
					</form>
