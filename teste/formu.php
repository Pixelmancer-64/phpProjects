<?php
function pr($data){
    echo "<pre>";
    print_r($data); // or var_dump($data);
    echo "</pre>";
}

$campos = array('status','message');

foreach($campos as $c){
    if (!isset ($_POST["$c"])){
        die("campo '$c' não enviado");
    }
}

function arrayKey($dataArray){
    foreach(array_keys($dataArray) as $dataAux)
    echo $dataAux . "<br>";

}
pr($_POST);
arrayKey($_POST);
    foreach($_POST as $aux){
        if(empty ($_POST["$aux"])) echo "<br/><br/>Not set";
        else  echo "$aux <br/><br/>";
}

?>