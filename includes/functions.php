<?php

// Crate string from array
function create_string($array)
{
    $megastring = '';
    // Foreach in array, if true push string
    foreach ($array as $single) {
        if ($single['ready']) {
            $megastring .= $single['name'];
        };
    }
    return $megastring;
};

// Generate random string from user inputs
function get_random_characters($number, $string, $repetition)

{
    // Temporary Veriable
    $generated_string = '';

    while (strlen($generated_string) < $number) {

        // Create $number random number
        $random_number = rand(0, strlen($string) - 1);

        // Repetition is true
        if ($repetition) {

            // Check if generated_string contains new random character
            if (!str_contains($generated_string, $string[$random_number])) {

                // Add character into variable
                $generated_string .= $string[$random_number];
            }
        } else {
            $generated_string .= $string[$random_number];
        }
    }

    return $generated_string;
};
