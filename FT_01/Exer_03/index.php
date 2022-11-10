<html>
    <body>
    <?php
           if(isset ($_POST["submit"])) {
             $valorA = $_POST["valueA"];
             $valorB = $_POST["valueB"];
             if(is_numeric($valorA) and is_numeric($valorB)){
                if($valorA >= $valorB){
                    echo "Ordem Crescente: $valorB , $valorA ";
                }
                if($valorA < $valorB){
                    echo "Ordem Crescente: $valorA , $valorB";
                }
              
             }
             else{
                echo "Valor invalido";
                
             }
             echo "<br> <a href='index.php'> Voltar </a>";
           }
           else{
             ?>
             <form name="data" method="POST" action="index.php">
                 Valor A = <input type='text' name='valueA'> <br>
                 Valor B = <input type='text' name='valueB'> <br>
                                                             <br>
                 <input type="submit" name="submit">         <br>
             </form>
             <?php 
            }
            
            ?>
              </body>
       </html>