<html>
    <body>
        <?php
           if(isset ($_POST["submit"])) {
             $valor = $_POST["value"];
             $altura = $_POST["valueC"];
             if(is_numeric($altura)){
             if($valor == "mulher"){
               $pesoideal = (62.1 * $altura) - 44.7;
               echo "O seu peso ideal será de: $pesoideal";
             }else{
               $pesoideal =  (72.7 * $altura) - 58;
               echo "O seu peso ideal será de: $pesoideal";
             }
            }
            else{
                echo "Valor invalido<br>";
            }
            echo "<br> <a href='index.php'> Voltar </a>";
           }
            else{
                ?>
                <form name="data" method="POST" action="index.php">
                    Feminino  = <input type='radio' name='value' value='mulher' checked>
                    Masculino = <input type='radio' name='value' value='homem' > <br>
                    Altura = <input type='text' name='valueC'>                   <br>
                                                                                 <br>
                    <input type="submit" name="submit">                          <br>
                </form>
                <?php 
            }
            ?>
            </body>
       </html>