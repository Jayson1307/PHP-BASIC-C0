<!DOCTYPE html>
<html lang="en">
<body>
<ul>
    <?php
        function geefTienProcent() {
            $koopprijs = 75;
            $korting = 10;
            return $koopprijs%$korting;
            
        }
    function geefWeer() {
        echo "het totaal bedrag is ", geefTienProcent();
    }
    geefWeer()
    
    ?> 
</ul>
</body>
</html>