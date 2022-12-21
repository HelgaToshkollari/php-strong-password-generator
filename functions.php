<?php
 function getPsw ($charachters) {
    $pass = "";
    for($i = 0;  $i < $_GET["passwordLenght"]; $i++){
      
        $pass .=  $charachters[rand(0, count ($charachters) -1)];
    }
    echo $pass;

};
?>