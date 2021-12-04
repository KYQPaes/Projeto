<!DOCTYPE html>
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
    <title>Administrador</title>
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
            aux2=document.getElementById('usuario').value;
        
            
            if(aux=='' || aux2==''  ){
                alert('Preencha todos os campos');
                return false;
            }   else{
                return true;
            }
        }
		</script>
		
    <h1>Administrador</h1>
	 <form method="post" action="Processar.php">
    <table>
        <tr>
            <th>Código</th>
            <td colspan="2">
                <input type="number" id="codigo" name="codigo" size="50px" value= "<?php echo($id);?>"/>
            </td>

        </tr>
        <tr>
            <th>Usuario</th>
            <td colspan="2">
                <input type="number" id="usuario" name="usuario" size="20px" value= "<?php echo($id);?>" />
            </td>

        </tr>

    </table>

        <input name="tipo" type="hidden" id="tipo" value=Administrador />
        <input type="submit" onclick="return validar ();" value="Gravar" />
		</form>
</body>
<?php
	include 'ListarAdministrador.php';
?>
</html>