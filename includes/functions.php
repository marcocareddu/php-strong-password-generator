<?php

// Generate random string from user inputs
function get_random_characters($number, $string1, $string2, $string3, $string4)
{
    // Create unique string
    $megastring = $string1 . $string2 . $string3 . $string4;

    // Temporary Veriable
    $generated_string = '';

    // Create $number random number
    for ($i = 0; $i <= $number; $i++) {
        $random_number = rand(0, strlen($megastring) - 1);

        // Add character into variable
        $generated_string .= $megastring[$random_number];
    }

    return $generated_string;
};
