<?php
	include_once("connection.php");
	$tipo = $_POST["tipo"];
	$endereco = $_POST["nome"];
	$bairro = $_POST["bairro"];
	$cep = $_POST["cep"];
	$comodos = $_POST["como"];
	$area = $_POST["area"];
	$valor = $_POST["valor"];
	$sql2 = "INSERT INTO tipos_de_imoveis(tipo) VALUES ('$tipo')";
	$sql1 = "INSERT INTO imovel(endereco,area_mxm,preco,comodo,bairro,cep,tipos_de_imoveis_id_tipos_de_imoveis,usuarios_id_usuarios) VALUES ('$endereco','$area','$valor','$comodos','$bairro','$cep',1,1)";
	$resul1 = mysqli_query($conn,$sql1);
	$resul2 = mysqli_query($conn,$sql2);
	if($resul1 || $resul2){
			echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='cadastro-imovel.html'</script>";
        }else{
			echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro-imovel.html'</script>";
	
        }	
		




?>