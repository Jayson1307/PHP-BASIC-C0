<!DOCTYPE html>
<html>
<body>
<?php
    $getallen =  [676,5345,78657,3,46,21,47];
    // asort($getallen);
    echo '<pre>';
    // var_dump($getallen);
    echo '</pre>';
    $laag_hoog = $getallen;
    asort($laag_hoog);
    echo '<pre>';
    print_r($laag_hoog);
    echo '</pre>';
    arsort($laag_hoog);
    $hoog_laag = $laag_hoog;
    arsort($hoog_laag);
    print_r($hoog_laag)
?>

</body>
</html>
