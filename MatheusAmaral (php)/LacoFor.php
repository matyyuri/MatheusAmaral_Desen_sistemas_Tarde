<html>
    <body>
        <?php
            for ($i = 0; $i <10; $i++) {
                print "O quadrado de $i é " . $i * $i . "<br>";
            }
        ?>

        <?php echo"<br><br><br>"?>

        <?php
            for($i=2; $n = system('dir /b'); $i++) {
                echo ($n);
                if ($i == 10) {
                    break;
                }
            }
        ?>

        <?php echo"<br><br><br>"?>

        <?php
            echo " <h2 align='center'>
                  Aluno: Matheus Yuri do Amaral
                  </h2>";
        ?>
    </body>
</html>