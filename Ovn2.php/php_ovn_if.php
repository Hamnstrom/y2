<?php
    $KalleYrke = "svetsare";
    $KalleAr = "";
    $i = 3;
    $x = 4;
    $today = date("D");


?>

<!DOCTYPE html>
<html>
<body>
    <?php

        // 1
        if($i>=2) {
            echo "$" . "i" . " är större     eller lika med 2\n";
        }

        // 2
        /*
        if ($KalleYrke == "kodare") {
            $KalleAr = "$KalleYrke";
        } elseif ($KalleYrke == "svetsare") {
            $KalleAr = "$KalleYrke";
        } elseif ($KalleYrke == "kock") {
            $KalleAr = "$KalleYrke";
        } else {
            $KalleAr = "Vet inte vad Kalle gör";    
        };
        */
        
        // 3
        switch($KalleYrke) {
            case"kodare": 
                $KalleAr = "$KalleYrke"
            ;
            case"svetsare": 
                $KalleAr = "$KalleYrke"
            ;
            case"kock": 
                $KalleAr = "$KalleYrke"
            ;
        }
        echo "<p> Kalle = $KalleAr</p>";

        // 4
        if($x > 2 && $x < 10) {
            echo "$x";
        }
        else {
            echo "$"."x är mindre än 2 eller större än 10";
        };

        // 5
        echo "<p>".date("D")."</p>";

        // 6
        if($today = "Mon") {
            echo "<p>det är måndag</p>";
        }
        elseif($today = "Tue") {
            echo "<p>det är tisdag</p>";
        }
        elseif($today = "Wed") {
            echo "<p>det är onsdag</p>";
        }
        elseif($today = "Thu") {
            echo "<p>det är torsdag</p>";
        }
        elseif($today = "Fri") {
            echo "<p>det är fredag</p>";
        }
        elseif($today = "Sat") {
            echo "<p>det är lördag</p>";
        }
        elseif($today = "Sun") {
            echo "<p>det är söndag</p>";
        }
        else {
            echo "<p>ogiltigt värde</p>";
        };




    ?>

    
    
</body>
</html>