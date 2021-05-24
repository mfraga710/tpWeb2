<?php
//Funcion para cortar un texto pero no las palabras

function cortar_palabras($texto, $limite, $break=' ',$pad='...')
{
    if(strlen($texto) <= $limite)    
        return $texto;
    $quiebre = strpos($texto, $break, $limite);
    if($quiebre != false){
        if($quiebre < (strlen($texto) - 1)){
            $texto = substr($texto,0,$quiebre).$pad;
        }
    }
    return $texto;
}
?>