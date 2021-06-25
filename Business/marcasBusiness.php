<?php
include_once(DIR_BASE.'DAO/marcasDao.php');


function businessGuardarMarca($datos = array()){

    daoGuardarMarca($datos);
}

function businessObtenerMarcas(){
 
    return daoObtenerMarcas();

}

function businessObtenerMarca($id){
    return daoObtenerMarca($id);

}

function businessBorrarMarca($id){
    
    daoBorrarMarca($id);
}

function businessModificarMarca($datos ,$id){

    daoModificarMarca($datos,$id);    

}

?>

