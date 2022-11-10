<html>
    <body>
        <?php
           if(isset ($_POST["submit"])){
             $role = $_POST["value"];
             $preco = $_POST["valueC"];
             
             if(is_numeric($preco)){
                switch($role){
                    case "Comum": 
                        echo "Não possui desconto!!<br>O Valor total a pagar será de: $preco €";
                       
                                                                                                         break;
                    case "Func":       $precoD = $preco * 0.90;
                                       echo "Possui desconto de 10%!!<br> O valor total a pagar será de: $precoD €";
                                     
                                                                                                         break;
                    case "VIP": $precoD = $preco * 0.95;
                                 echo "Possui desconto de 5%!!<br> O valor total a pagar será de: $precoD €";
                                
                                                                                                         break;
                }  
                echo "<br> <a href='index.php'> Voltar </a>";
        }
        else{
            echo "Valor invalido! A preço tem que ser um número!<br>";
       }
     }
            else{
                ?>
                <form name="data" method="POST" action="index.php">
                    Cliente Comum  =   <input type='radio' name='value' value='Comum' checked>
                    Funcionário =      <input type='radio' name='value' value='Func'>
                    Cliente VIP =      <input type='radio' name='value' value='VIP'>    <br>
                    Preço Total em € = <input type='number' name='valueC' min='0'>          <br>
                                                                                       <br>
                    <input type="submit" name="submit">                                <br>
                </form>
                <?php 
            }
            ?>
            </body>
       </html>