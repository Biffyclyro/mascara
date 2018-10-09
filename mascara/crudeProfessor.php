<?php 
	include 'conexaoBD.php'
	$conexao;

	function cadastrarProfessor($nome, $celular, $cep){
		conectar();
		query("INSERT INTO PROFESSORES (nome, celular, cep) VALUES ('$nome', '$celular', '$cep')");
		fechar();
	}




?>