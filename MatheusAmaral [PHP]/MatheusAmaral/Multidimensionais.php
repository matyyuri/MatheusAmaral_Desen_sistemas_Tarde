<html>
    <body>
        <?php
            $musicas = array(
                array ("Kid Abelha","Amanhã",1993),
                array ("Ultrage A Rigor", "Pelados",1985),
                array ("Paralamas do Sucesso","Alagados",1987));
            for ($linha=0;$linha<3;$linha++)
            {
                for ($coluna=0;$coluna<3;$coluna++)
                {
                    echo $musicas[$linha][$coluna]." | ";
                }
                echo "<br>";
            }
        ?>

        <?php echo"<br><br><br>"?>
        
        <?php
            echo "<br>";
            $AmazonProducts = array(
                array("Código" => "Livro","Descrição" => "Livros", "Preço" => 50),
                array("Código" => "DVDs","Descrição" => "Filme", "Preço" => 15),
                array("Código" => "CDs","Descrição" => "Música", "Preço" => 20)
            );
            for ($linha= 0;$linha< 3;$linha++) { ?>
            <p> | <?= $AmazonProducts[$linha]["Código"] ?>
                | <?= $AmazonProducts[$linha]["Descrição"] ?>
                | <?= $AmazonProducts[$linha]["Preço"] ?>
            </p>
        <?php
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