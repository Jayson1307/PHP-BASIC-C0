<!Doctype HTML>
<html>
<body>
<ul>
    <?php
    $prod_besteld = 69;
    if($prod_besteld < 10) {
            $prijs = 1.50;
            echo "<li>$prijs</li>";
    } 
    elseif($prod_besteld < 20) {
            $prijs = 1.25;
            echo "<li>$prijs</li>";
    } 
    else {
            $prijs = 1.00;
            echo "<li>$prijs</li>";
        }

    $prod_besteld = 8;
    if($prod_besteld < 10) {
            $prijs = 1.50;
            echo "<li>$prijs</li>";
    } 
    elseif($prod_besteld < 20) {
            $prijs = 1.25;
            echo "<li>$prijs</li>";
    } 
    else {
            $prijs = 1.00;
            echo "<li>$prijs</li>";
        }

    $prod_besteld = 18;
    if($prod_besteld < 10) {
            $prijs = 1.50;
            echo "<li>$prijs</li>";
    } 
    elseif($prod_besteld < 20) {
            $prijs = 1.25;
            echo "<li>$prijs</li>";
    } 
    else {
            $prijs = 1.00;
            echo "<li>$prijs</li>" ;
        }
    ?>
</ul>     
</body>
</html>