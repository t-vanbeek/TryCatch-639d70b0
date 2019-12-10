<?php


$input = $argv[1];

function countdown($input){

    if ($input < 0 || $input > 10) {
        throw new Exception("Je kan aleen een getal tussen 0 - 10 gebruiken.", 1);
    } 

for ($i=$input; $i >= 0; $i--) { 
    echo $i . " Seconden" . PHP_EOL;
}
     
}

try{

    echo countdown($input);
}

catch(exception $error){
    echo 'Fout gevonden: '.$error->getMessage();
    exit;
}
echo $input . ' seconden afgeteld';
exit;