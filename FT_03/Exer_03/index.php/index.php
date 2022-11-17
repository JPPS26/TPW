<html>
    <body>
        <Title>FT_03 - Exer_03</title>
            <?php
                if(isset ($_POST["submit"])){
                    if(is_numeric($min) and is_numeric($max)){
                        $min = $_POST["min"];
                        $max = $_POST["max"];
                            for($i = $min+1; $i < $max; $i++){
                                echo "$i ";
                            }   
                    }
            ?>
            <form name="data" method="POST" action="index.php">
                1º Valor: <input type="number" name="min">
                2º Valor: <input type="number" name="max">
                <input type="submit" name="submit">                                
        </form>
            <?php 
            }
            ?>
    </body>
</html>