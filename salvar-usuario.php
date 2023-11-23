<?php
		switch ($_REQUEST["acao"]) {
			case 'cadastrar':
				$Nome = $_POST["nome"];
				$Email = $_POST["email"];
				$Senha = md5($_POST["senha"]);
				$CEP = $_POST["cep"];
				$Estado = $_POST["estado"];
				$Cidade = $_POST["cidade"];
				$Bairro = $_POST["bairro"];
				$Rua = $_POST["rua"];
				$Número = $_POST["numero"];
				$Complemento = $_POST["complemento"];

				$sql = "INSERT INTO login (Nome,Email,Senha,CEP, Estado, Cidade,Bairro,Rua,Número,Complemento) VALUES('{$Nome}', '{$Email}', '{$Senha}','{$CEP}','{$Estado}','{$Cidade}','{$Bairro}','{$Rua}','{$Número}','{$Complemento}')";

				$res = $conn->query($sql);

				if ($res==true) {
					print"<script>alert('Cadastro Realizado Com Sucesso!');</script>";
					print"<script>location.href='?page=listar';</script>";
				}else{
					print"<script>alert('Não Foi Possivel Realizar o Cadastro!');</script>";
					print"<script>location.href='?page=novo';</script>";	
				}
			
				break;
			case 'editar':
				$Nome = $_POST["Nome"];
				$Email = $_POST["Email"];
				$Senha = md5($_POST["Senha"]);
				$CEP = $_POST["CEP"];
				$Estado = $_POST["estado"];
				$Cidade = $_POST["Cidade"];
				$Bairro = $_POST["Bairro"];
				$Rua = $_POST["Rua"];
				$Número = $_POST["Número"];
				$Complemento = $_POST["Complemento"];

				$sql = "UPDATE login SET
							Nome='{$Nome}',
							Email='{$Email}',
							Senha='{$Senha}',
							CEP='{$CEP}',
							CEP='{$Estado}',
							Cidade='{$Cidade}',
							Bairro='{$Bairro}',
							Rua='{$Rua}',
							Número='{$Número}',
							Complemento='{$Complemento}'
						WHERE
							ID=".$_REQUEST["ID"];

				$res = $conn->query($sql);

				if ($res==true) {
					print"<script>alert('Edição Realizada Com Sucesso!');</script>";
					print"<script>location.href='?page=listar';</script>";
				}else{
					print"<script>alert('Não Foi Possivel Editar o Cadastro!');</script>";
					print"<script>location.href='?page=novo';</script>";	
				}
			
				break;
			case 'excluir':
				
				$sql = "DELETE FROM login WHERE ID=".$_REQUEST["ID"];

				$res = $conn->query($sql);

				if ($res==true) {
					print"<script>alert('Exclusão Realizada Com Sucesso!');</script>";
					print"<script>location.href='?page=listar';</script>";
				}else{
					print"<script>alert('Não Foi Possivel Excluir o Cadastro!');</script>";
					print"<script>location.href='?page=excluir';</script>";	
				}

				break;
		}
?>