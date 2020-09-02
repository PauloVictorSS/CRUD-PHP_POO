<div class="select">

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Tipo de Animal</th>     
            <th>Idade do Animal</th>
        </tr>

        <?php

            $array = $mysql->selectALL($pdo);

            foreach ($array as $animal) {    
                echo "<tr>";
                echo "<td>".$animal['id']."</td>";
                echo "<td>".$animal['name']."</td>";
                echo "<td>".$animal['type']."</td>";
                echo "<td>".$animal['age']."</td>";
                echo "</tr>";
            }

        ?>

    </table>

    <a href="<?php echo INCLUDE_PATH ?>">Voltar para a página Inicial</a>
</div>