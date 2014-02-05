<?php

/*$date='2014-12-32';
//$pattern='/^[0-9]{4}-[0-1]{1}[0-9]{1}-[0-3]{1}[0-9]{1}$/';
$pattern='/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/';
if(preg_match($pattern,$date)){
    echo 'match';
}
else{
    echo 'does not match';
}*/
$date='2014-12-32';
$pattern='/^[0-9]{4}-(0[1-9]|1[1-2])-(0[1-9]|[1-2][1-9]|3[0-1])$/';
if(preg_match($pattern,$date))
        echo 'match';
else{
    echo 'does not match';
    
}
