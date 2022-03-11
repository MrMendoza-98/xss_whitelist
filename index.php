<?php 
function xss_whitelist($input, $limit = null, $offser = 0){
    $x = (string) $input; #Force input to be a string

    $x = preg_replace("/[^a-zA-Z0-9 -:,.!?\/|]/", "",$x); # Allow alphanumeric characters, whitespace and specific characters

    if ($limit) { #Limit characters
        $x = substr($x, $offset, $limit);
    }

    return htmlentities($x, ENT_QUOTES, 'UTF-8'); # Convert characters to HTML entities and return the clean string
}
?>