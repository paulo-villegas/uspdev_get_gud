<?php

bar_dump("lala");

function bar_dump($var, $inline = false){
    if($inline){
        printf($var, true);
    }else{
        var_dump($var);
    }
}
