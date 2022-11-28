<?php

function pwd_generator($pwd_length, $pwd_repetition, $pwd_letters, $pwd_numbers, $pwd_simbols)
{
    $pwd_components = [];
    $pwd_result = "";

    if ($pwd_letters == "true") {
        $pwd_components[] = "abcdefghijklmnopqrstuvwxyz";
        $pwd_components[] = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    }

    if ($pwd_numbers == "true") {
        $pwd_components[] = "0123456789";
    }

    if ($pwd_simbols == "true") {
        $pwd_components[] = "!£$%&-@_*?";
    }

    if ($pwd_length > 0 && count($pwd_components) > 0) {
        if ($pwd_repetition == "true") {
            for ($i = 0; $i < $pwd_length; $i++) {
                $rnd_component = rand(0, count($pwd_components) - 1);
                $rnd_element = rand(0, strlen($pwd_components[$rnd_component]) - 1);
                $pwd_result .= $pwd_components[$rnd_component][$rnd_element];
            }
            return $pwd_result;
        } else {
            if (!(count($pwd_components) === 1 && strlen($pwd_components[0]) < $pwd_length)) {
                $i = 0;
                while ($i < $pwd_length) {
                    $rnd_component = rand(0, count($pwd_components) - 1);
                    $rnd_element = rand(0, strlen($pwd_components[$rnd_component]) - 1);
                    $get_result = $pwd_components[$rnd_component][$rnd_element];
                    if (!str_contains($pwd_result, $get_result)) {
                        $pwd_result .= $get_result;
                        $i++;
                    }
                }
                return $pwd_result;
            } else {
                return $pwd_result = "Non è possibile calcolare la password, Inserisci più campi";
            }
        }
    } else {
        return $pwd_result = "Vai a fare in culo";
    }
}
