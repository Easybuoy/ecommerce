<?php

/*$timestamp = time();
echo strftime('%d/%m/%y',$timestamp);
echo "<br />";*/

function strip_zeros_from_date($marked_string=''){
//first removes the marked zeros
    $no_zero = str_replace(0,'',$marked_string);
//removes any remaining marks
    $cleaned_string = str_replace('*','',$no_zero);
return $cleaned_string;

}

//echo strip_zeros_from_date(strftime('%d/%m/%y',$timestamp));
?>