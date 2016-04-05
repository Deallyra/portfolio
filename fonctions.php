<?php
function notes($note = 3) {
    $i = 1;
    while($i <= 5) {
        ?><div class="point<?php  echo ($i <= $note) ? " rempli" : ""; ?>"></div><?php
        $i++;
    }
}
?>
