<?php

function pwd_generator($pwd_length)
{
    $pwd_components = ["abcdefghijklmnopqrstuvwxyz", "ABCDEFGHIJKLMNOPQRSTUVWXYZ", "0123456789", "!£$%&?-@_*"];

    $pwd_result = "";
    if ($pwd_length > 0) {
        for ($i = 0; $i < $pwd_length; $i++) {
            $rnd_component = rand(0, count($pwd_components) - 1);
            $rnd_element = rand(0, strlen($pwd_components[$rnd_component]) - 1);
            $pwd_result .= $pwd_components[$rnd_component][$rnd_element];
        }
        return $pwd_result;
    } else {
        return $pwd_result = "Vai a fare in culo";
    }
}
