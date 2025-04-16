<html>
    <body>
        <?php
            # rand - Gera um inteiro aleatório

            $sorteio = rand(0,5);
            echo "Sorteado: $sorteio <hr/>";

            # array_merge - Combina um ou mais arrays
            # ramge - Cria um array contendo uma faixa de elementos
            # (início, fim, passo)

            $vetor = array_merge (range(0,10),
                                          range($sorteio, 10, 2),
                                          array($sorteio));
            print_r($vetor);
            echo"<hr/>";

            # embralha
            shuffle($vetor);
            print_r($vetor);
            echo"<hr/>";
            foreach ($vetor as $valor) {
                echo 'O valor ', $valor, ' tem 3 elementos. <br/>';
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