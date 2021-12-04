<html>
	<?php
	$id= filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
	$dscalcado="";
	if($id != NULL){
		$dscalcado = "TESTE DE EDIÇÃO";
	}
	include 'Menu.php';
	?>
<head>
    <title>Autor do Livro</title>
    <meta charset="utf-8" />
    <style>
        th {
            border: 1px solid black;
        }

        table {
            border: 1px solid black;
            width: 200px;
        }
    </style>

</head>

<body>
        <script type="text/javascript" lang="javascript">
        function validar(){
            aux=document.getElementById('codigo').value;
            aux2=document.getElementById('autor').value;
            aux3=document.getElementById('livro').value;
          
            
            if(aux=='' || aux2=='' || aux3=='' ){
                alert('Preencha todos os campos');
                return false;
            }   else{
                return true;
            }
        }
		</script>
		
    <h1>Autor Do Livro</h1>
    <form method="post" action="Processar.php">
        <a href="Fornecedor.php">Fornecedor</a>
        <a href="Estoque.php"> Estoque </a>
        <table>
            <tr>
                <th>Código</th>
                <td colspan="2">
                    <input type="number" id="codigo" name="codigo" size="20px" value= "<?php echo($id);?>"/>
                </td>

            </tr>
            <tr>
                <th>autor</th>
                <td colspan="2">
                    <input type="number" id="autor" name="autor" size="20px" value= "<?php echo($id);?>"/>
                </td>

            </tr>
            <tr>
                <th>livro</th>
                <td>
                    <input type="text" id="livro" name="livro" size="20px" value= "<?php echo($id);?>" />
                </td>	

            </tr>
 
        </table>

        <input name="tipo" type="hidden" id="tipo" value="AutorLivro" />
        <input type="submit" onclick="return validar ();" value="Gravar" />
    </form>
</body>
<?php
	include 'ListarAutorLivro.php';
?>
</html>