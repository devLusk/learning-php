<?php

function func() {
    $args = func_get_args();

    if ($args == null) {
        return "Nenhum argumento foi passado";
    }
    else {
        return $args;
    }
}

var_dump(func("Lucas", 23, 1.75, "Programador", "PHP"));