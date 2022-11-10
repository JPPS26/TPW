<html>
    <body>
        <?php
           if(isset ($_POST["submit"])) {
             $valorA = $_POST["valueA"];
                if(is_numeric($valorA)){
                    if($valorA <= "300"){
                        $salarioaumentado = $valorA * 1.5;
                        echo "O valor do seu salário passou de $valorA € para $salarioaumentado € (Aumento de 50%)<br>";
                    }
                    else{
                        $salarioaumentado = $valorA * 1.3;
                        echo "O valor do seu salário passou de $valorA € para $salarioaumentado € (Aumento de 30%)<br>";
                    }
                }
                else{
                echo "valor invalido";
            }
            echo "<br> <a href='index.php'> Voltar  </a>";
        }
            else{
                ?>
                <form name="data" method="POST" action="index.php">
                    Salário = <input type='number' min=0 name='valueA'>  <br>
                                                                 <br>
                    <input type="submit" name="submit">          <br>
                </form>
                <?php 
            }
            ?>
            </body>
       </html>