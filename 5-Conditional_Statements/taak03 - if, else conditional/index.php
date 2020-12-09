<!Doctype HTML>
<html>
<body>
<ul>
    <?php
        $test1 = 3 ;
        $test2 = 6 ;
        if($test1 == $test2) {
            echo "<li> gelijk </li>";
        }
        else{
            echo "<li> ongelijk </li>";
        }
        if($test1 != $test2) {
            echo "<li>ongelijk</li>";
        }
        else{
            "<li>niet ongelijk</li>";
        }
        if($test1 === $test2) {
            echo "<li>indentiek</li>";
        }
        else{
            echo "<li> niet identiek </li>";
        }
        if($test1 > $test2) {
            echo "<li>test 1 is goter dan test 2</li>";
        }
        else{
            "<li>test1 is niet groter dan test 2</li>";
        }
        if($test1 < $test2) {
            echo "<li>test 1 is kleiner dan test 2</li> ";
        }
        else{
            echo "<li>test1 is niet kleiner dan test2</li>";
        }
        if($test1 >= $test2) {
            echo "<li> stest 1 is groter of gelijk aan test 2</li> ";
        }
        else{
            echo "<li>test1 is niet groter of gelijk aan test 2</li>";
        }
        if($test1 <= $test2) {
            echo "<li>test 1 is kleiner of gelijk aan test 2.</li>";
        }
        else{
            echo "<li>test 1 is niet kleiner of gelijk aan test2</li>";
        }

    ?>
</ul>     
</body>
</html>