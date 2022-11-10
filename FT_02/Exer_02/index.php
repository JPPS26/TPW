<html>
    <body>
        <?php
            if(isset ($_POST["submit"])) {
                $ValorA = $_POST["ValueA"];
                $ValorB = $_POST["ValueB"];
                if(is_numeric($ValorB) and $ValorB > 0){
                                       
                    switch($ValorA){
                        case "Produto 1":   $Preco = 2.98 * $ValorB;
                                            echo "O preço total será de: $Preco €";
                                            
                                                                                   break;
                        case "Produto 2":   $Preco = 4.50 * $ValorB;
                                            echo "O preço total será de: $Preco €";
                                            
                                                                                   break;
                        case "Produto 3":   $Preco = 9.98 * $ValorB;
                                            echo "O preço total será de: $Preco €";
                                         
                                                                                   break;
                        case "Produto 4":   $Preco = 4.49 * $ValorB;
                                            echo "O preço total será de: $Preco €";
                                           
                                                                                   break;
                        default: echo "ERRO!! Verifique se possui um produto selecionado ou se a quantidade é um número positivo";
                                 
                    }
                    echo "<br> <a href='index.php'> Voltar </a>";
                                      
                }   
                else{
                   echo "ERRO!! O Campo tém que ser um número positivo";
                   echo "<br> <a href='index.php'> Voltar </a>";
                }
            }
            else{
                   ?>
                   <form name="data" method="POST" action="index.php">
                       Produto: <select name ='ValueA'>
                                 <option selected> 
                                    <option value="Produto 1"> Produto 1
                                    <option value="Produto 2"> Produto 2
                                    <option value="Produto 3"> Produto 3
                                    <option value="Produto 4"> Produto 4
               </select>                                  
                       Quantidade: <input type='text' name='ValueB'>                     
                                                                                          
                       <input type="submit" name="submit">                                
                   </form>
                   <?php
               }
               ?>
               </body>
          </html>