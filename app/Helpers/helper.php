<?php

function uniqueCode($length, $string_type)
{
    // Definir los tipos de caracteres permitidos
    $caracteres = [
        'number' => '0123456789',
        'letters' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'alphanumeric' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        'spacials' => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+'
    ];

    // Verificar si el tipo de caracteres es válido
    if (!array_key_exists($string_type, $caracteres)) {
        throw new InvalidArgumentException(__("Character type allow. Options: 'numbers', 'letters', 'alphanumeric', 'special'"));
    }

    // Obtener la cadena de caracteres según el tipo
    $string = $caracteres[$string_type];

    // Generar la cadena única
    $unique_code = '';
    $max = strlen($string) - 1;

    for ($i = 0; $i < $length; $i++) {
        $unique_code .= $string[random_int(0, $max)];
    }

    return $unique_code;
}
