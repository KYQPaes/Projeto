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
            aux2=document.getElementById('endereco').value;
            aux3=document.getElementById('nome').value;
	    aux4=document.getElementById('cpf').value;
            aux5=document.getElementById('rg').value;
            aux6=document.getElementById('email').value;
	    aux7=document.getElementById('telefone').value;
            aux8=document.getElementById('login').value;
	    aux9=document.getElementById('senha').value;
            aux10=document.getElementById('restricao').value;
            aux11=document.getElementById('tipo').value;
	 
    
            
            if(aux=='' || aux2=='' || aux3=='' || aux4=='' || aux5=='' || aux6=='' || aux7=='' || aux8=='' || aux9=='' || aux10=='' || aux11=='' ){
                alert('Preencha todos os campos');
                return false;
            }   else{
                return true;
            }
        }
		</script>
		
    <h1>Usuario</h1>
    <form method="post" action="Processar.php">
       
        <table>
            <tr>
                <th>Código</th>
                <td colspan="2">
                    <input type="number" id="codigo" name="codigo" size="20px" value= "<?php echo($id);?>"/>
                </td>

            </tr>
            <tr>
                <th>Endereço</th>
                <td colspan="2">
                    <input type="number" id="endereco" name="endereço" size="20px" value= "<?php echo($id);?>"/>
                </td>

            </tr>
            <tr>
                <th>Nome</th>
                <td>
                    <input type="text" id="nome" name="nome" size="20px" value="<?php echo($dscalcado);?>" />
                </td>

            </tr>
            <tr>
                <th>CPF</th>
                <td>
                    <input type="text" id="cpf" name="cpf" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
            <tr>
                <th>RG</th>
                <td>
                    <input type="text" id="rg" name="rg" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>
                    <input type="text" id="email" name="email" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
			 <tr>
                <th>Telefone</th>
                <td>
                    <input type="text" id="telefone" name="telefone" size="20px" value="<?php echo($dscalcado);?>"/>
                </td>
            </tr>
			 <tr>
                <th>Login</th>
                <td>
                    <input type="text" id="login" name="login" size="20px" value="<?php echo($dscalcado);?>" />
                </td>
            </tr>
			 <tr>
                <th>Senha</th>
                <td>
                    <input type="text" id="senha" name="senha" size="20px" value="<?php echo($dscalcado);?>" >
                </td>
            </tr>
			 <tr>
                <th>Restrição</th>
                <td>
                    <input type="number" id="restricao" name="restrição" size="20px" value= "<?php echo($id);?>"/>
                </td>
            </tr>
			 <tr>
                <th>TipoUsuario</th>
                <td>
                    <input type="number" id="tipo" name="tipousuario" size="20px" value= "<?php echo($id);?>"/>
                </td>
            </tr>
        </table>

        <input name="tipo" type="hidden" id="tipo" value="Usuario" />
        <input type="submit" onclick="return validar()"value="Gravar" />
    </form>
</body>
<?php
	include 'ListarUsuario.php';
?>
</html>