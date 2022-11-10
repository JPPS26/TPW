<html>
    <body>
        <?php
            if(isset($_POST["enviar"])){
                $num=$_POST["valor"];
                    if(is_numeric($num)){
                        if($num>0){
                            echo"Positivo";
                        }
                        else {
                            if($num<0){
                                echo"Negativo";
                            }
                            else {
                                echo"Igual a zero";
                            }
                        }
                    }
                    else {
                        echo"Valor invalido";
                    } 
                echo "<br><a href='index.php'> Voltar </a>";
            }
            else {
        ?>
                <form method="Post" action="index.php">
                    Valor? <input  type="text" name="valor">
                    <br>
                    <input type="submit" name="enviar" value="Ok">
                </form>
        <?php
            } 
        ?>
    </body>
</html>

