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
    <title>Exemplar</title>
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
            aux2=document.getElementById('tombo').value;
            aux3=document.getElementById('codlivro').value;
	    aux4=document.getElementById('localizacao').value;
            aux5=document.getElementById('status').value;
       
            
            if(aux=='' || aux2=='' || aux3=='' || aux4=='' || aux5=='' ){
                alert('Preencha todos os campos');
                return false;
            }   else{
                return true;
            }
        }
		</script>
		
    <h1>Exemplar</h1>
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
                <th>Tombo</th>
                <td colspan="2">
                    <input type="number" id="tombo" name="tombo" size="20px" value= "<?php echo($id);?>"/>
                </td>

            </tr>
            <tr>
                <th>CodigoLivro</th>
                <td>
                    <input type="text" id="codlivro" name="codigolivro" size="20px" value= "<?php echo($id);?>" />
                </td>

            </tr>
            <tr>
                <th>Localização</th>
                <td>
                    <input type="text" id="localizacao" name="localização" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    <input type="text" id="status" name="status" size="20px" value= "<?php echo($id);?>" />
                </td>
            </tr>
            <tr>
             

             
        </table>

        <input name="tipo" type="hidden" id="tipo" value=Exemplar />
        <input type="submit" onclick="return validar ();" value="Gravar" />
    </form>
</body>
<?php
	include 'ListarExemplar.php';
?>
</html>