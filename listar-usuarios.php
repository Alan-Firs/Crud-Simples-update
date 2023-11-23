<h1>Listar Usuários</h1>
<?php
	$sql = "SELECT * FROM login";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<table class='table table-hover table-bordered'>";
			print "<tr>";
			print "<th>#</th>";
			print "<th>Nome</th>";
			print "<th>Email</th>";
			print "<th>CEP</th>";
			print "<th>Estado</th>";
			print "<th>Cidade</th>";
			print "<th>Bairro</th>";
			print "<th>Rua</th>";
			print "<th>Número</th>";
			print "<th>Complemento</th>";
			print "<th>Ações</th>";
			print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->ID."</td>";
			print "<td>".$row->Nome."</td>";
			print "<td>".$row->Email."</td>";
			print "<td>".$row->CEP."</td>";
			print "<td>".$row->Estado."</td>";
			print "<td>".$row->Cidade."</td>";
			print "<td>".$row->Bairro."</td>";
			print "<td>".$row->Rua."</td>";
			print "<td>".$row->Número."</td>";
			print "<td>".$row->Complemento."</td>";
			print "<td>
					<button onclick=\"location.href='?page=editar&id=".$row->ID."';\" class='btn btn-success'>Editar</button>

					<button onclick=\"location.href='?page=excluir&id=".$row->ID."';\" class='btn btn-danger'>Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else
		print "<p class='alert alert-danger'>Não Foram Encontrados Dados!</p>"
		
?>

