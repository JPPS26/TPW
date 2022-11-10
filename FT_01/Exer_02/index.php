<html>
    <body>
        <?php
           if(isset ($_POST["submit"])) {
             $valorA = $_POST["valueA"];
             $valorB = $_POST["valueB"];
             $valorC = $_POST["valueC"];
             $valorD = $_POST["valueD"];
                if(is_numeric($valorA) and is_numeric($valorB) and is_numeric($valorC) and is_numeric($valorD)){
                    $resultadoAC = $ValorA + $ValorC;
                    $resultadoBD = $ValorB * $ValorD;
                     if($resultadoAC > $resultadoBD){
                        echo "A+C é maior que B*D";
                     }
                     else{
                        if($resultadoAC < $resultadoBD){
                            echo "A+C é menor que B*D";
                        }
                        else{
                            
                                echo "A+C é igual a B*D";
                            
                        }
                     }
                     echo "<br> <a href='index.php'> Voltar </a>";
                }
                else{
                    echo "Valor invalido";
                }
            } 
            else{
                ?>
                <form name="data" method="POST" action="index.php">
                    Valor A = <input type='text' name='valueA'> <br>
                    Valor B = <input type='text' name='valueB'> <br>
                    Valor C = <input type='text' name='valueC'> <br>
                    Valor D = <input type='text' name='valueD'> <br>
                                                                <br>
                    <input type="submit" name="submit">         <br>
                </form>
                <?php 
            }
            ?>
            </body>
       </html>