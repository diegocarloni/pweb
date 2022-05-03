<!doctype  html>
<html>
<body>
    <?php
        if(isset($_GET["n1"])){
            $x = $_GET["n1"];
            $y =  $_GET["n2"];
            if($x > $y){
                echo "<h4>$x e maior que $y</h4>";
            } else {

                echo "<h4>$y e maior que $x</h4>";
            }
        } else {
            echo "parametros invalidos !!!!!!!!!";
        }
    ?>
</body>
</html>

