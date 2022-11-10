<html>
    <body>
        <?php
            if(isset ($_POST["submit"])) {
                $valorA = $_POST["valueA"];
                   if(is_numeric($valorA)){
                    switch($valorA){
                        case "1": echo "Número: Um."    ;
                                                         break;
                        case "2": echo "Número: Dois."  ;
                                                         break;
                        case "3": echo "Número: Três."  ;
                                                         break;
                        case "4": echo "Número: Quatro."; 
                                                         break;
                        case "5": echo "Número: Cinco." ; 
                                                         break;
                        case "6": echo "Número: Seis."  ; 
                                                         break;
                        case "7": echo "Número: Sete."  ;
                                                         break;
                        case "8": echo "Número: Oito."  ;
                                                         break;
                        case "9": echo "Número: Nove."  ;
                                                         break;
                        case "10"; echo "Número: Dez."  ; 
                                                         break;
                        default: echo "Valor invalido! Tem que ser um número positivo entre 1 e 10!";
                    }                      
                   }
                   else{
                   echo "Valor invalido! O Campo tém que ser um número positivo entre 1 e 10!";
                   
               }
               echo "<br> <a href='index.php'> Voltar </a>";
           }
               else{
                   ?>
                   <form name="data" method="POST" action="index.php">
                       Número = <input type='text' name='valueA'>   <br>
                                                                    <br>
                       <input type="submit" name="submit"> 
                   </form>
                   <?php 
                    
               }
               ?>
               </body>
          </html>