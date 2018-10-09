<?php 
	include 'conexaoBD.php';
	

	function cadastrarProfessor($nome, $celular, $cep){
		conectar();
		query("INSERT INTO PROFESSORES (nome, celular, cep) VALUES ('$nome', '$celular', '$cep')");
		fechar();
	}
	function visualizarProfessor(){
		conectar();
		$resultado = query("SELECT * FROM PROFESSORES");
		fechar();
		return $resultado;
	}



?>