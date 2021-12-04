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
    <title>Categoria do Livro</title>
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
            aux2=document.getElementById('editora').value;
            aux3=document.getElementById('catlivro').value;
	    aux4=document.getElementById('titulo').value;
            aux5=document.getElementById('subtitulo').value;
            aux6=document.getElementById('idioma').value;

	
       
            
            if(aux=='' || aux2=='' || aux3=='' || aux4=='' || aux5=='' || aux6=='' ){
                alert('Preencha todos os campos');
                return false;
            }   else{
                return true;
            }
        }
		</script>
		
    <h1>Livro</h1>
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
                <th>Editora</th>
                <td colspan="2">
                    <input type="number" id="editora" name="editora" size="20px" value= "<?php echo($id);?>"/>
                </td>

            </tr>
            <tr>
                <th>Categoria do Livro</th>
                <td>
                    <input type="number" id="catlivro" name="categorialivro" size="20px" value= "<?php echo($id);?>"/>
                </td>

            </tr>
            <tr>
                <th>Titulo</th>
                <td>
                    <input type="text" id="titulo" name="titulo" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
            <tr>
                <th>Subtitulo</th>
                <td>
                    <input type="text" id="subtitulo" name="subtitulo" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
			            <tr>
                <th>Idioma</th>
                <td>
                    <input type="text" id="idioma" name="idioma" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
             
        </table>

        <input name="tipo" type="hidden" id="tipo" value=Livro />
        <input type="submit" onclick="return validar ();" value="Gravar" />
    </form>
</body>
<?php
	include 'ListarLivro.php';
?>
</html>