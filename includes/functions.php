<?php

// Generate random string from user inputs
function get_random_characters($number, $string1, $string2, $string3, $string4, $repetition)
{
    // Create unique string
    $megastring = $string1 . $string2 . $string3 . $string4;

    // Temporary Veriable
    $generated_string = '';

    while (strlen($generated_string) < $number) {

        // Create $number random number
        $random_number = rand(0, strlen($megastring) - 1);

        // Repetition is true
        if ($repetition) {

            // Check if generated_string contains new random character
            if (!str_contains($generated_string, $megastring[$random_number])) {

                // Add character into variable
                $generated_string .= $megastring[$random_number];
            }
        } else {
            $generated_string .= $megastring[$random_number];
        }
    }

    return $generated_string;
};
