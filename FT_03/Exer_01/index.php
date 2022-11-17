<html>
    <body>
        <Title>FT_03 - Exer_01</title>
            <?php
                if(isset ($_POST["submit"])){
                    if(is_numeric($valorA)){
                        $valorA = $_POST["ValueA"];            
                            for($i=0; $i<=$valorA; $i++){
                                echo "$i, ";
                            }
                    }
                    else{
                        echo "ERRO!";
                    }
                        echo "<br><a href='index.php'> Voltar </a>";
            ?>
            <form name="data" method="POST" action="index.php">
                Limite: <input type="number" name="ValueA" min="0">
                        <input type="submit" name="submit">                                
            </form><
        <?php 
        }
        ?>
    </body>
</html>