<!Doctype HTML>
<html>
<body>
<ul>
    <?php
        $test1 = 10;
        $test2 = 6;
        if($test1 == $test2) {
            echo "gelijk, ";
        }
        if($test1 != $test2) {
            echo "ongelijk, ";
        }
        if($test1 === $test2) {
            echo "indentiek, ";
        }
        if($test1 > $test2) {
            echo "test 1 is goter dan test 2, ";
        }
        if($test1 < $test2) {
            echo "test 1 is kleiner dan test 2, ";
        }
        if($test1 >= $test2) {
            echo "test 1 is groter of gelijk aan test 2. ";
        }
        if($test1 <= $test2) {
            echo "test 1 is kleiner of gelijk aan test 2. ";
        }
    ?>
</ul>     
</body>
</html>