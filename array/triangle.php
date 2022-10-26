
<?php

function writeTriangle($temp)
{
    for ($i = 1; $i < $temp; $i++) {
        $counter = 0;
        while ($counter < $i) {
            echo "0";
            $counter++;
        }
        echo "<br>";

    }
}
writeTriangle(15);

?>
