<!DOCTYPE html>
<html lang="en">
<head></head> 
<body>
    <div class="isMeerderJarig">
        <?php
            $leeftijd = 14;
            if ($leeftijd >= 18) {
                echo "je bent meerderjarig";
            }
            else {
                echo "je bent minderjarig";
            }
            ?>
    </div>
</body>
</html>