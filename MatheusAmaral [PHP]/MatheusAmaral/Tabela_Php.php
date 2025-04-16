<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela PHP</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }
        th, td {
            border-style: solid;
            width: 50px;
        }
    </style>
</head>
<body>
    <table>
        <?php
            for ($l=1;$l<=5;$l++)
            {
                echo "<tr>";
                for ($c=1; $c<=20;$c++)
                {
                    echo "<td> $l,$c </td>";
                }
                echo "<tr/>";
            }
            
        ?>
        
        <?php echo"<br><br><br>"?>

        <?php
            echo " <h2 align='center'>
                  Aluno: Matheus Yuri do Amaral
                  </h2>";
        ?>
    </table>
</body>
</html>