<?php

function getCelsius($temperature = null, $includeUnit = true)
{

    // $x = ($temperature * 1.8 + 32 # f -> c

    # https://en.wikipedia.org/wiki/Fahrenheit#Definition_and_conversion
    $x = ($temperature - 32) / 1.8;

    if ($includeUnit == true) {
        // Return the temperature with C appended to the end
        $temp_celsuis = $x . ' C';
        return $temp_celsuis;
    } else {
        // Return just the temperature
        return $x;
    }
}
