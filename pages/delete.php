<?php
    
    if(isset($_POST["action"])){

        $id = $_POST["idAnimal"];

        $result = $mysql->deleteAnimal($pdo, $id);

        if($result == 1)
            echo "<div class='mensage green'><p>Animal deletado com sucesso!<p></div>";
        else
            echo "<div class='mensage red'><p>Algo deu errado<p></div>";
    }
    
?>

<div class="select">

    <h1>Deletar Animal</h1>

    <form action="<?php echo INCLUDE_PATH ?>delete" method="post">
        <select name="idAnimal">
            <?php
            
            $array = $mysql->selectALL($pdo);

            foreach ($array as $animal) { 

                echo "<option value='".$animal['id']."'>".$animal['name']."</option>";

            }
            
            ?>
        </select>
        <button type="submit" name="action" value="action">Deletar Animal</button>
    </form>

    <a href="<?php echo INCLUDE_PATH ?>">Voltar para a página Inicial</a>
</div>