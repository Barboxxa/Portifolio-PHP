<?php
	require_once("Classes/Conexao.class.php");
	require_once("Classes/ProjetosTO.class.php");
	require_once("Classes/ProjetosDAO.class.php");

	$conexao = new Conexao();
	$conn    = $conexao -> getConn();
	$projTO  = new ProjetosTO();
	$projDAO = new ProjetosDAO($conn);


	// codigo para cadastro
	if (isset($_GET['txtCadCliente'])) {
		$projTO  -> setCliente($_GET['txtCadCliente']);
		$projTO  -> setLocalidade($_GET['txtCadLocal']);
		$projTO  -> setResponsavel($_GET['txtCadResp']);
		$projTO  -> setHoras($_GET['txtCadHoras']);
		$projTO  -> setDataInicial($_GET['txtCadDtIni']);
		$projTO  -> setValor($_GET['txtCadValor']);
		
		$projDAO -> cadProjeto($projTO);
		echo true;
		exit;
	}

	//codigo para exclusão
	if (isset($_GET['txtDelId'])) {
		$projDAO -> delProjeto($_GET['txtDelId']);
		echo true;
		exit;
	}


	// codigo para exclusão
	if (isset($_GET['txtAltId'])) {
		$projTO  -> setId($_GET['txtAltId']);
		$projTO  -> setCliente($_GET['txtAltCliente']);
		$projTO  -> setLocalidade($_GET['txtAltLocal']);
		$projTO  -> setResponsavel($_GET['txtAltResp']);
		$projTO  -> setHoras($_GET['txtAltHoras']);
		$projTO  -> setDataInicial($_GET['txtAltDtIni']);
		$projTO  -> setValor($_GET['txtAltValor']);
		$projDAO -> altProjeto($projTO);
		echo true;
		exit;
	}
?>