<html>
    <body>
        <?php
           //Função usada para definir fuso horário padrão
           date_default_timezone_set('America/Los_Angeles');
           //Manipulando HTML e PHP
           $data_hoje = date ("d/m/Y", time());
        ?>

        <p align="center"> Hoje é dia <?php echo $data_hoje ; ?>
        </p>

        <?php
            echo "texto<br>";
            echo "Olá Mundo<br>";
            echo "Isso abrange
            várias linhas. As novas linhas serão saída também.<br>";
            echo "Caracteres Escaping são feitos \"Como esse\".";
        ?>

        <?php echo"<br><br><br>"?>

        <?php
            $comida_favorita = "Italiana";
            print $comida_favorita[2];
            $comida_favorita = "Cozinha ".$comida_favorita;
            echo "<br>";
            print $comida_favorita;
        ?>

        <?php
            echo " <h2 align='center'>
                  Aluno: Matheus Yuri do Amaral
                  </h2>";
        ?>
    </body>
</html>