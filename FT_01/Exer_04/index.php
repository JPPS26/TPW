<html>
    <body>
        <?php
           if(isset ($_POST["submit"])) {
             $valorA = $_POST["valueA"];
             $valorB = $_POST["valueB"];
             $valorC = $_POST["valueC"];
             $valorD = $_POST["valueD"];
                if(is_numeric($valorA) and is_numeric($valorB) and is_numeric($valorC) and is_numeric($valorD)){
                   
                    $media = ($valorA + $valorB + $valorC + $valorD) / 4;
                    if($media >= 9){
                        echo "Aluno aprovado com média de: $media";
                    }
                    else{
                        echo "Aluno reprovado com média de: $media";
                    }
                    echo "<br> <a href='index.php'> Voltar </a>";
            }
        }
            else{
                ?>
                <form name="data" method="POST" action="index.php">
                    Nota 1 = <input type='number' min=0 max=20 name='valueA'> <br>
                    Nota 2 = <input type='number' min=0 max=20 name='valueB'> <br>
                    Nota 3 = <input type='number' min=0 max=20 name='valueC'> <br>
                    Nota 4 = <input type='number' min=0 max=20 name='valueD'> <br>
                                                                <br>
                    <input type="submit" name="submit">         <br>
                </form>
                <?php 
            }
            ?>
            </body>
       </html>