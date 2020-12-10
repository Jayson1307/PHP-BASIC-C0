<!DOCTYPE html>
<html lang="en">
<body>
<ul>
    <?php
        function mijnNaamIsLang() {
            $voornaam = "Jayson";
            $achternaam = "van Olffen";
            $volledigenaam = "mijn naam is $voornaam $achternaam";
            $volledigenaam = strtoupper($volledigenaam) ;
            echo $volledigenaam;
            
        }
    mijnNaamIsLang();
    
    ?> 
</ul>
</body>
</html>