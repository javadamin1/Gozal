<?php

function pd($array,$flag=true){
    print_r($array);
    echo "<br>";
    if ($flag)
        exit();
}
function vd($array,$flag=true){
    var_dump($array);
    echo "<br>";
    if ($flag)
        exit();
}
