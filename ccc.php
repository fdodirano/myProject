<?php
session_start();

echo "Your session id is".' '.session_id();
echo '<br>';
echo session_name();
echo '<br>';
function captcha($lenght = 7) {
    $characters = 'abcdefghijklmnopqrstuvwsyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    for ($x=0; $x < $lenght; $x++){
        $result .= $characters[mt_rand(0, 61)];
    }
    return $result;
}
echo captcha();

?>
