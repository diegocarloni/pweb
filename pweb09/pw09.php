<!doctype html>
<html>
    <body>
    <h1>Teste de PHP</h1>
<a href="pw09c.php?n1=23&n2=45&nome=joana">Teste de GET</a><br/>

<form method="post" action="pw09.php">
    n1:<input type="number" required id="n1" name="n1" /><br/>
    n2:<input type="number"  id="n2" name="n2" /><br/>
    <button name="bt1">Media</button>
    <button name="bt2">Tabuada</button>
</form>
    <?php 
        if(isset($_POST["bt1"])) media(); 
        if(isset($_POST["bt2"])) tabuada();
    ?>
</body>
</html>
<?php
    function media(){
            $a = $_POST["n1"];
            $b = $_POST["n2"];
            $c = ($a + $b)/2; 
            echo "<h4>Ola a media = $c </h4>";
    }

    function tabuada(){
        $a = $_POST["n1"];
        echo "<ul>";
        for($i=1; $i<=10; $i++){
            $p = $a * $i;
            echo "<li>$a X $i = $p </li>";        
        }
        echo "</ul>";
    }
?>
