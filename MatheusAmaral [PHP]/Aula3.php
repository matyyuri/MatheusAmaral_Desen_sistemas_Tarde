<html>
    <body>
        <?php
            echo $name = "Matheus Yuri do Amaral";
            echo $length = strlen($name);
            echo $cmp = strcmp($name, "Josefina");
            echo $index = strpos($name, "e");
            echo $first = substr($name, 9, 5);
            echo $name = strtoupper($name);
        ?>

        <?php echo"<br><br><br>"?>

        <?php
            $cidade = "Joinville";
            $estado = "SC";
            $idade = 174;
            $frase_capital = "A cidade de $cidade é a maior cidade do $estado";
            $frase_idade = "$cidade tem mais de $idade anos";
            echo "<h3>$frase_capital</h3>";
            echo "<h4>$frase_idade</h4>";
        ?>

        <?php
            echo " <h2 align='center'>
                  Aluno: Matheus Yuri do Amaral
                  </h2>";
        ?>
    </body>
</html>