<!Doctype HTML>
<html>
<body>
<ul>
    <?php
        $a = 14;
        $b = 16;
        if($a < 15 && $b > 15) {
            echo '<li>$a is kleiner dan 15 en $b is groter dan 15 </li>';
        }
        else{
            echo '<li>$a is groter dan 15 en/of $b is kleiner dan 15 </li>';
        }
        if($a > 10 || $b < 20) {
            echo '<li>$a is groter dan 10 en/of $b is kleiner dan 20 </li>';
        }
        else{
            echo '<li>$a is kleiner dan 10 en $b is groter dan 20 </li>';
        }
        if($a > 10 xor  $b < 20) {
            echo '<li>$a is groter dan 10 en/of $b is kleiner dan 20 </li>';
        }
        else{
            echo '<li>$a is kleiner dan 10 en $b is groter dan 20 </li>';
        }
        if($a < 15 != $b > 15) {
            echo '<li>$a is kleiner dan 15 en $b is groter dan 15 </li>';
        }
        else{
            echo '<li>$a is groter dan 15 en/of $b is kleiner dan 15 </li>';
        }
    ?>
</ul>     
</body>
</html>