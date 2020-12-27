<?php

if(isset($_POST['enviar'])){
    $acertos = 0;

    for($z = 1; $z <= 5; $z++){
        if($_POST['q' . $z] == 1){
            $acertos++;
        }
    }

    return $acertos;
}
?>