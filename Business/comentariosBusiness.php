<?php

include_once(DIR_BASE.'DAO/comentariosDao.php');


function businessGuardarComentario($datos = array()){
    daoGuardarComentario($datos);
}

function businessObtenerComentarios(){
    return daoObtenerComentarios();
}

function businessObtenerComentario($id){
    return daoObtenerComentarios();   

}

function businessModificarComentario($datos , $id){
    daoModificarComentario($datos, $id);
}

function businessBorrarComentario($id){
    daoBorrarComentario($id);
}

?>