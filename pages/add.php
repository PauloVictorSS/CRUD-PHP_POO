<?php
    
    if(isset($_POST["action"])){

        $name = $_POST["name"];
        $age = $_POST["age"];
        $type = $_POST["type"];

        $result = $mysql->addAnimal($pdo, $name, $type, $age);

        if($result == 1)
            echo "<div class='mensage green'><p>Animal adicionado com sucesso!<p></div>";
        else
            echo "<div class='mensage red'><p>Algo deu errado<p></div>";
    }
    
?>

<div class="select">

    <h1>Cadastrar Animal</h1>

    <form action="<?php echo INCLUDE_PATH ?>add" method="post">
        <input type="text" name="name" placeholder="Nome do Animal" required>
        <input type="text" name="type" placeholder="Tipo do Animal" required>
        <input type="number" name="age" placeholder="Idade do Animal" required>
        <button type="submit" name="action" value="action">Cadastrar Animal</button>
    </form>

    <a href="<?php echo INCLUDE_PATH ?>">Voltar para a página Inicial</a>
</div>