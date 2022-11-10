<html>
    <body>
        <?php
            if(isset ($_POST["submit"])) {
                $idade = $_POST["idade"];
                   if(is_numeric($idade)){
                    switch($idade){
                        case "5":
                        case "6":
                        case "7":
                        case "8":
                        case "9":
                        case "10":echo "Categoria: Infantil.";
                                                            break;
                        case "11":
                        case "12": 
                        case "13": 
                        case "14": 
                        case "15": echo "Categoria: Juvenil.";
                                                            break;                                    
                        case "16": 
                        case "17": 
                        case "18": 
                        case "19": 
                        case "20": echo "Categoria: Júnior";
                                                            break;                            
                        case "21": 
                        case "22": 
                        case "23": 
                        case "24": 
                        case "25": echo "Categoria: Profissional."; 
                                                            break;
                        default: echo "Idade invalida! Tem que ser uma idade entre os 5 e os 25 anos!";
                    }                      
                   }
                   else{
                   echo "Idade invalida! O Campo tém que ser um número positivo!";
                   
               }
               echo "<br> <a href='index.php'> Voltar </a>";
           }
               else{
                   ?>
                   <form name="data" method="POST" action="index.php">
                       Idade = <input type='text' name="idade">     <br>
                                                                    <br>
                       <input type="submit" name="submit"> 
                   </form>
                   <?php 
               }
               ?>
               </body>
          </html>