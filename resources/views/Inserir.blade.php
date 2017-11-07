                 <form method="post">
				<label for="Consumidor">Nome consumidor:</label>
				<input type="text" name="Consumidor" required/>
				<label for="Sexo">Sexo:</label>
				<label><input type="radio" name="Sexo" value="77" required/>Masculino</label>
				<label><input type="radio" name="Sexo" value="70" required/>Feminino</label>
				<label for="CEP">CEP:</label>
				<input type="text" name="CEP" id="cep" required/>
			    <label for="UF">UF:</label>
				<input type="text" name="UF" id="uf" required/>
				<label for="Cidade">Cidade:</label>
				<input type="text" name="Cidade" id="cidade" required/>
				<label for="Bairro">Bairro:</label>
				<input type="text" name="Bairro" id="bairro" required/>
				<label for="TLogradouro">Tipo Logradouro:</label>
				<input type="text" name="TLogradouro" id="tipologradouro" required/>
				<label for="Logradouro">Logradouro:</label>
				<input type="text" name="Logradouro" id="rua" required/>
				<label for="Numero">Numero:</label>
				<input type="text" name="Numero" required/>
				<label for="CompletmentoEnd">Complemento:</label>
				<input type="text" name="ComplementoEnd"/>
				<label for="TeleFixo">Telefone Fixo:</label>
				<input type="text" id="Telefixo" required/>
				<input type="hidden" name="TeleFixo_DD" id="Telefixo_unmask_dd" required/>
				<input type="hidden" name="TeleFixo" id="Telefixo_unmask" required/>
				<label for="Celular">Celular</label>
				<input type="text" id="celular" required/>
				<input type="hidden" id="celular_unmask_dd" name="Celular_DD" required/>
				<input type="hidden" id="celular_unmask" name="Celular" required/>
				<label for="Email">Email:</label>
				<input type="email" name="Email" required/>
				<label for="MatInfo">Material Informativo:
				<input type="checkbox" name="MatInfo" value="83"/></label>
				<label for="UsoDados">Uso de Dados:
				<input type="checkbox" name="UsoDados" value="83"/></label>
				<label for="Correio">Correio:
				<input type="checkbox" name="Correio" value="83"/></label>
				<label for="AceitaTele">Aceita telefone:
				<input type="checkbox" name="AceitaTele" value="83"/></label>
				<label for="AceitaSMS">Aceita SMS:
				<input type="checkbox" name="AceitaSMS" value="83"/></label>
				<label for="AceitaEmail">Aceita email:
				<input type="checkbox" name="AceitaEmail" value="83"/></label>
				<input type="hidden" name="CPFCadastro"  required/>
				<input type="hidden" name="DataNascCadastro"  required/>
				<input type="hidden" name="SenhaCadastro"  required/>
				<input type="hidden" name="NrCentral"  required/>
				<input type="submit" name="submit2" value="Enviar"/>