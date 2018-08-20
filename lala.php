<?php

#ini_set('display_errors', true);

function bar_dump($var, $inline = false){
    if($inline){
        printf($var, true);
    }else{
        var_dump($var);
    }
}

var_dump("lala");

