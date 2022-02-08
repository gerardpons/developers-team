<?php


class taskEditController extends ApplicationController{

	
	public function indexAction()
	{
        $id =$_GET['id'];
        echo "Hola desde el controlador de Editar con id= $id<br>";

        
        
        $titulo = "ASDFSDFSADF";
        $fechaInicio = "2022-03-13";
        $fechaFin="2022-03-21";
        $usuario="Pepe";
        $estado="impaciente";
        $s= 'location:' . "http://localhost/dev/developers-team/app/views/scripts/taskEdit/index.php?titulo=" . $titulo
        . "&fechainicio=" . $fechaInicio
        . "&fechafin=" . $fechaFin
        . "&usuario=" . $usuario
        . "&estado=" . $estado;

        //echo($s);
        //exit();
       
        //header('location:' . "http://localhost/dev/developers-team/app/views/scripts/taskEdit/index.php?titulo=ASDFASDF");
        header($s);
        
       
        // $this->view->message = "hello from jm::index";
      
	}

        public function saveAction(){
                echo "registro salvado <br>";
        }


}