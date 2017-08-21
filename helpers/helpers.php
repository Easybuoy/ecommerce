<?php
function err($errors){
    $display = '<ul class="bg-danger">';
    foreach ($errors as $error){
        $display .= '<p class = "bg-danger">'.$error. '</p>';
    }
    $display .= '</ul>';
    return $display;
}

function sanitize($dirty){
    return htmlentities($dirty, ENT_QUOTES,"UTF-8");
}


?>