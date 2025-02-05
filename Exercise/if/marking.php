<?php
$mark = 60;

if ($mark > 0 and $mark <= 39){
    echo "Fail";
}elseif ($mark > 39 and $mark <= 79){
    echo "Pass";
}elseif ($mark > 79 and $mark <= 100){
    echo "Distinction";
}else{
    echo "Error";
}
