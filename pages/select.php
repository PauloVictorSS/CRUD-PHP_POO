<div class="select">
    <?php

        $array = $mysql->selectALL($pdo);

        foreach ($array as $animal) {
            echo $animal['id'];
            echo $animal['name'];
            echo $animal['type'];
            echo $animal['age'];
            echo "<br>";
        }

    ?>
</div>