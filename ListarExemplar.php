<?php
   
    $resultado_consulta = array
    (   
        array(1, "Vendedor 1"), array(2, "Vendedor 2"), array(3, "Vendedor 3"), array (4, "Vendedor 4") 
        );
        ?>
        <table>
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Descrição</th>
                    <th>Açoes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($resultado_consulta as $demanda):
                    ?>
                    <tr style="font-size:12px;">
                        <td><?php echo $demanda [0]; ?></td>
                        <td><?php echo $demanda [1]; ?></td>
                        <td style="width:220px;">
                            <a href="#">Excluir</a> 
							<a href="Exemplar.php?id=<?php echo ($demanda[0]);?>">Alterar</a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
		
		