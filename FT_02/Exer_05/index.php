<html>
    <body>
        <?php
            if(isset ($_POST["submit"])) {
                $opera = $_POST["operacao"];
                $num01 = $_POST["numero1"];
                $num02 = $_POST["numero2"];
                
                if($num01 >0 && $num02 > 0){              
                    switch($opera){
                        case "+": 
                            $r = $num01 + $num02;
                            echo "Operação: $num01 + $num02 <br><br> Resultado: $r";
                                                                                            break;
                        case "-": 
                            $r = $num01 - $num02;
                            echo "Operação: $num01 - $num02 <br><br> Resultado: $r";         
                                                                                            break;
                        case "*": 
                            $r = $num01 * $num02;
                            echo "Operação: $num01 * $num02 <br><br> Resultado: $r";           
                                                                                            break;
                        case "/": 
                            if($num02 <> 0){
                                $r = $num01 / $num02;
                                echo "Operação: $num01 / $num02 <br><br> Resultado: $r";  
                            }
                            else{
                                echo "Operação inválida";
                            }       
                                                                                            break;
                    }
                }else{
                        echo "ERRO!! Os números tem de ser positivos.";
                }
                echo "<br> <a href='index.php'> Voltar </a>";  
            }
            else{
    
                   ?>
                   <form name="data" method="POST" action="index.php">
                       Operação: <select name ="operacao">
                                 <option selected> 
                                    <option value="+"> + 
                                    <option value="-"> -
                                    <option value="*"> *
                                    <option value="/"> /
               </select>                                  
                        Número 1: <input type='text' name='numero1'>                     
                        Número 2: <input type='text' name='numero2'>                                                          
                       <input type="submit" name="submit">                                
                   </form>
                <?php
                }
               ?>
               </body>
          </html>