<?php

class taskInsertController extends ApplicationController
{
	
	public function indexAction()
	{
        //$_GET['pepe']="tasks eoeoeeo";
        echo "Hola desde el controlador de Insertar<br>";
       
        // $this->view->message = "hello from jm::index";
      
	}

        public function insertAction(){
        
                //llamar al modelo para insertar
                
                $titulo = $_POST['titulo'];
                $fechaInicio = $_POST['fechaInicio'];
                $fechaFin = $_POST['fechaFin'];
                $usuario = $_POST['usuario'];
                $estado = $_POST['estado'];
                
                echo "Registro insertado :  $titulo $fechaInicio  $fechaFin  $usuario $estado";
                exit();

                 //volver a la vista    
                header('location:' . "http://localhost/dev/developers-team/web/tasks");
        }


}