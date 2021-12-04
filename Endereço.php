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
    <title>Endereço</title>
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
            aux2=document.getElementById('numero').value;
            aux3=document.getElementById('cep').value;
	    aux4=document.getElementById('rua').value;
            aux5=document.getElementById('bairro').value;
            aux6=document.getElementById('cidade').value;
	    aux7=document.getElementById('estado').value;
    
            
            if(aux=='' || aux2=='' || aux3=='' || aux4=='' || aux5=='' || aux6=='' || aux7=='' ){
                alert('Preencha todos os campos');
                return false;
            }   else{
                return true;
            }
        }
		</script>
		
    <h1>Endereço</h1>
    <form method="post" action="Processar.php">
       
        <table>
            <tr>
                <th>Código</th>
                <td colspan="2">
                    <input type="number" id="codigo" name="codigo" size="20px" value= "<?php echo($id);?>"/>
                </td>

            </tr>
            <tr>
                <th>Numero</th>
                <td colspan="2">
                    <input type="number" id="numero" name="numero" size="20px" value= "<?php echo($id);?>"/>
                </td>

            </tr>
            <tr>
                <th>CEP</th>
                <td>
                    <input type="text" id="cep" name="cep" size="20px" value="<?php echo($dscalcado);?>" />
                </td>

            </tr>
            <tr>
                <th>Rua</th>
                <td>
                    <input type="text" id="rua" name="rua" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
            <tr>
                <th>Bairro</th>
                <td>
                    <input type="text" id="bairro" name="bairro" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
            <tr>
                <th>Cidade</th>
                <td>
                    <input type="text" id="cidade" name="cidade" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
			<tr>
                <th>Estado</th>
                <td>
                    <input type="text" id="estado" name="estado" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>

             
        </table>

        <input name="tipo" type="hidden" id="tipo" value=Endereço />
        <input type="submit" onclick="return validar ();" value="Gravar" />
    </form>
</body>
<?php
	include 'ListarEndereço.php';
?>
</html>