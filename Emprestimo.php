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
    <title>Calçado</title>
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
            aux2=document.getElementById('exemplar').value;
            aux3=document.getElementById('usuario').value;
	    aux4=document.getElementById('devolucao').value;
            aux5=document.getElementById('emprestimo').value;
            aux6=document.getElementById('devolucaoef').value;
	    aux7=document.getElementById('estado').value;
    
            
            if(aux=='' || aux2=='' || aux3=='' || aux4=='' || aux5=='' || aux6=='' || aux7=='' ){
                alert('Preencha todos os campos');
                return false;
            }   else{
                return true;
            }
        }
		</script>
		
    <h1>Empréstimo</h1>
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
                <th>Exemplar</th>
                <td colspan="2">
                    <input type="number" id="exemplar" name="exemplar" size="20px" value= "<?php echo($id);?>"/>
                </td>

            </tr>
            <tr>
                <th>Usuario</th>
                <td>
                    <input type="text" id="usuario" name="usuario" size="20px" value= "<?php echo($id);?>" />
                </td>

            </tr>
            <tr>
                <th>Datadevolução</th>
                <td>
                    <input type="date" id="devolucao" name="datadevolução" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
            <tr>
                <th>Dataemprestimo</th>
                <td>
                    <input type="date" id="emprestimo" name="dataemprestimo" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
            <tr>
                <th>devoluçãoefetiva</th>
                <td>
                    <input type="date" id="devolucaoef" name="devoluçãoefetiva" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
			 <tr>
                <th>Estadolivro</th>
                <td>
                    <input type="text" id="estado" name="estadolivro" size="20px" value="<?php echo($dscalcado);?>"/>
                </td>
            </tr>
			 <tr>
               
        </table>

        <input name="tipo" type="hidden" id="tipo" value=Emprestimo />
        <input type="submit" onclick="return validar ();" value="Gravar" />
    </form>
</body>
<?php
	include 'ListarEmprestimo.php';
?>
</html>