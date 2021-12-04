<?php
    $tipo   = filter_input(INPUT_POST, 'tipo',FILTER_SANITIZE_STRING);
	$id   = filter_input(INPUT_POST, 'id',FILTER_SANITIZE_STRING);
	
	if($tipo=='Usuario'){
	
        $codigo = filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_STRING);
        $endereço = filter_input(INPUT_POST, 'endereço',FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, 'cpf',FILTER_SANITIZE_STRING);
        $rg = filter_input(INPUT_POST, 'rg',FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_STRING);
        $telefone = filter_input(INPUT_POST, 'telefone',FILTER_SANITIZE_STRING);
        $login = filter_input(INPUT_POST, 'login',FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha',FILTER_SANITIZE_STRING);
        $restrição = filter_input(INPUT_POST, 'restrição',FILTER_SANITIZE_STRING);
		$tipousuario = filter_input(INPUT_POST, 'tipousuario',FILTER_SANITIZE_STRING);
		
		if ($id==NULL) {
			echo ('Inclusão');
		}else{
			echo('Edição');
		}
		
        echo 'dados recebidos'.'<br>';
        echo 'Codigo: '.$codigo.'<br>';
        echo 'Endereço: '.$endereço.'<br>';
	echo 'Nome: '.$nome.'<br>';
        echo 'CPF: '.$cpf.'<br>';
        echo 'RG: '.$rg.'<br>';
        echo 'Email: '. $email.'<br>';
        echo 'Telefone: '. $telefone.'<br>';
	echo 'login: '. $login.'<br>';
	echo 'Senha: '. $senha.'<br>';
	echo 'Restrição: '. $restrição.'<br>';
	echo 'Tipo do Usuario: '. $tipousuario.'<br>';
		
		
        exit;
		}
		
		
	if($tipo=='Administrador'){
	
		$codigo = filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_STRING);
        $usuario = filter_input(INPUT_POST, 'usuario',FILTER_SANITIZE_STRING);
		if ($id==NULL) {
			echo ('Inclusão');
		}else{
			echo('Edição');
		}
        echo 'dados recebidos'.'<br>';
        echo 'Código: '.$codigo.'<br>';
        echo 'Usuario: '.$usuario.'<br>';

        exit;
		}


	if($tipo=='Endereço'){
	
        $codigo = filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_STRING);
        $numero = filter_input(INPUT_POST, 'numero',FILTER_SANITIZE_STRING);
        $cep = filter_input(INPUT_POST, 'cep',FILTER_SANITIZE_STRING);
        $rua= filter_input(INPUT_POST, 'rua',FILTER_SANITIZE_STRING);
        $bairro = filter_input(INPUT_POST, 'bairro',FILTER_SANITIZE_STRING);
        $cidade = filter_input(INPUT_POST, 'cidade',FILTER_SANITIZE_STRING);
		$estado = filter_input(INPUT_POST, 'estado',FILTER_SANITIZE_STRING);
		if ($id==NULL) {
			echo ('Inclusão');
		}else{
			echo('Edição');
		}
        echo 'dados recebidos'.'<br>';
        echo 'Codigo: '.$codigo.'<br>';
        echo 'Numero: '.$numero.'<br>';
        echo 'CEP: '.$cep.'<br>';
        echo 'Rua: '.$rua.'<br>';
        echo 'Bairro: '. $bairro.'<br>';
        echo 'Cidade: '. $cidade.'<br>';
		echo 'Estado: '. $estado.'<br>';
        exit;
		}
		
		
	if($tipo=='Editora'){
	
        $codigo = filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_STRING);
        $endereço = filter_input(INPUT_POST, 'endereço',FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);

		if ($id==NULL) {
			echo ('Inclusão');
		}else{
			echo('Edição');
		}
        echo 'dados recebidos'.'<br>';
        echo 'Codigo:'.$codigo.'<br>';
        echo 'Endereço:'.$endereço.'<br>';
		echo 'Nome:'. $nome.'<br>';

        exit;
		}
		
		
	if($tipo=='Emprestimo'){
	
        $codigo = filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_STRING);
        $exemplar = filter_input(INPUT_POST, 'exemplar',FILTER_SANITIZE_STRING);
        $usuario = filter_input(INPUT_POST, 'usuario',FILTER_SANITIZE_STRING);
        $datadevolução = filter_input(INPUT_POST, 'datadevolução',FILTER_SANITIZE_STRING);
        $dataemprestimo= filter_input(INPUT_POST, 'dataemprestimo',FILTER_SANITIZE_STRING);
        $devoluçãoefetiva = filter_input(INPUT_POST, 'devoluçãoefetiva',FILTER_SANITIZE_STRING);
	$estadolivro = filter_input(INPUT_POST, 'estadolivro',FILTER_SANITIZE_STRING);
		if ($id==NULL) {
			echo ('Inclusão');
		}else{
			echo('Edição');
		}
        echo 'dados recebidos'.'<br>';
        echo 'Codigo:'.$codigo.'<br>';
        echo 'Exemplar:'.$exemplar.'<br>';
	echo 'Usuario:'. $usuario.'<br>';
        echo 'Data de Devolucao:'.$datadevolução.'<br>';
        echo 'Data de Emprestimo:'.$dataemprestimo.'<br>';
        echo 'Devolucao Efetiva:'. $devoluçãoefetiva.'<br>';
        echo 'Estado do Livro:'. $estadolivro.'<br>';
        exit;
		}

if($tipo=='Exemplar'){
	
        $codigo = filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_STRING);
        $tombo = filter_input(INPUT_POST, 'tombo',FILTER_SANITIZE_STRING);
        $codigolivro = filter_input(INPUT_POST, 'codigolivro',FILTER_SANITIZE_STRING);
        $localização = filter_input(INPUT_POST, 'localização',FILTER_SANITIZE_STRING);
        $status= filter_input(INPUT_POST, 'status',FILTER_SANITIZE_STRING);
		if ($id==NULL) {
			echo ('Inclusão');
		}else{
			echo('Edição');
		}
        echo 'dados recebidos'.'<br>';
        echo 'Codigo:'.$codigo.'<br>';
        echo 'Tombo:'.$tombo.'<br>';
	echo 'Codigo Livro:'. $codigolivro.'<br>';
        echo 'Localizacao:'.$localização.'<br>';
        echo 'Status:'.$status.'<br>';
        exit;
		}
		
		if($tipo=='AutorLivro'){
	
        $codigo = filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_STRING);
        $autor = filter_input(INPUT_POST, 'autor',FILTER_SANITIZE_STRING);
        $livro = filter_input(INPUT_POST, 'livro',FILTER_SANITIZE_STRING);
		if ($id==NULL) {
			echo ('Inclusão');
		}else{
			echo('Edição');
		}
        echo 'dados recebidos'.'<br>';
        echo 'Codigo:'.$codigo.'<br>';
        echo 'Autor:'.$autor.'<br>';
	echo 'Livro:'. $livro.'<br>';

        exit;
		}
		
			if($tipo=='Livro'){
	
        $codigo = filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_STRING);
        $editora = filter_input(INPUT_POST, 'editora',FILTER_SANITIZE_STRING);
        $CategoriaLivro = filter_input(INPUT_POST, 'categorialivro',FILTER_SANITIZE_STRING);
        $titulo= filter_input(INPUT_POST, 'titulo',FILTER_SANITIZE_STRING);
        $subtitulo = filter_input(INPUT_POST, 'subtitulo',FILTER_SANITIZE_STRING);
        $idioma = filter_input(INPUT_POST, 'idioma',FILTER_SANITIZE_STRING);
		if ($id==NULL) {
			echo ('Inclusão');
		}else{
			echo('Edição');
		}
        echo 'dados recebidos'.'<br>';
        echo 'Codigo: '.$codigo.'<br>';
        echo 'Editora: '.$editora.'<br>';
        echo 'CategoriaLivro: '.$CategoriaLivro.'<br>';
        echo 'Titulo: '.$titulo.'<br>';
        echo 'Subtitulo: '. $subtitulo.'<br>';
        echo 'Idioma: '. $idioma.'<br>';
        exit;
		}
		
			if($tipo=='Autor'){
	
        $codigo = filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);

		if ($id==NULL) {
			echo ('Inclusão');
		}else{
			echo('Edição');
		}
        echo 'dados recebidos'.'<br>';
        echo 'Codigo:'.$codigo.'<br>';
		echo 'Nome:'. $nome.'<br>';

        exit;
		}
		
		if($tipo=='CategoriaLivro'){
	
        $codigo = filter_input(INPUT_POST, 'codigo',FILTER_SANITIZE_STRING);
        $categorialivro = filter_input(INPUT_POST, 'categorialivro',FILTER_SANITIZE_STRING);

		if ($id==NULL) {
			echo ('Inclusão');
		}else{
			echo('Edição');
		}
        echo 'dados recebidos'.'<br>';
        echo 'Codigo:'.$codigo.'<br>';
		echo 'Categoria do Livro:'. $categorialivro.'<br>';

        exit;
		}
		
?>