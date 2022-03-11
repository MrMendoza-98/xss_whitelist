<?php 
function xss_whitelist($input, $limit = null, $offser = 0){
    $x = (string) $input;

    $x = preg_replace("/[^a-zA-Z0-9 -:,.!?\/|]/", "",$x);

    if ($limit) {
        $x = substr($x, $offset, $limit);
    }

    return htmlentities($x, ENT_QUOTES, 'UTF-8');
}
?>