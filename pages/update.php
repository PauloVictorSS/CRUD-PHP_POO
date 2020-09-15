<?php

    if(isset($_POST["action"])){

        $id = $_POST["action"];
        $name = $_POST["name"];
        $type = $_POST["type"];
        $age = $_POST["age"];

        if(MySql::updateAnimal($pdo, $id, $name, $type, $age) == 1)
            echo "<div class='mensage green'><p>Animal alterado com sucesso!<p></div>";
        else
            echo "<div class='mensage red'><p>Algo deu errado<p></div>";
    }

?>
<div class="select update">

    <?php
        $array = $mysql->selectALL($pdo);

        foreach ($array as $animal) { 

    ?>
                
    <form action="<?php echo INCLUDE_PATH ?>update" method="post" id="<?php echo $animal["id"]; ?>" class="formUpdate">
            
        <div class="animals">
            <input type="text" name="name" value="<?php echo $animal["name"]; ?>" required>
            <input type="text" name="type" value="<?php echo $animal["type"]; ?>" required>
            <input type="number" name="age" value="<?php echo $animal["age"]; ?>" required>
            <button type="submit" value="<?php echo $animal["id"]; ?>" name="action" form="<?php echo $animal["id"]; ?>">OK</button>
        </div>
        
    </form>

    <?php  }  ?>

    <a href="<?php echo INCLUDE_PATH ?>">Voltar para a página Inicial</a>
</div>