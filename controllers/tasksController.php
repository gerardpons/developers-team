<?php

//calling the model
require_once("models/tasksModel.php");
$res = getTasks();
//var_dump($res);
echo "Tasks Controller<br/>";

// $accion="";

// if (!isset($_POST['accion'])){
//     echo "Acción vacía<br/>";
// } else {
//     echo "Acción". $_POST['accion'] ."<br/>";
//     $accion=$_POST['accion'];
// }

if (isset($_POST['editar'])){
    echo "Editar activo <br/>";
    require_once("views/taskDetails.php");
}else{
    echo "Editar parado <br/>";
} 
if (isset($_POST['eliminar'])){
    echo "Eliminar activo <br/>";
    require_once("views/taskDetails.php");
}else{
    echo "Eliminar parado <br/>";
}  
if (isset($_POST['insertar'])){
    echo "Insertar activo <br/>";
    require_once("views/taskDetails.php");
}else{
    echo "Insertar parado <br/>";
}     

if ((!isset($_POST['editar'])) && (!isset($_POST['eliminar'])) ){
    echo "Pantalla inicial <br/>";
    require_once("views/tasksView.php");
}
//require_once("views/taskDetails.php");



