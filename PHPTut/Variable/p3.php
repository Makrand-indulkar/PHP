<?php
//Variables using boolean variables

$login=true;
$isAdmin=false;

$canaccess=$login && $isAdmin;

echo $canaccess; 

//output will be nothing beacuase of one condition was true and another condtion was false

?>