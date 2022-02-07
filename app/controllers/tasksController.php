<?php

class tasksController extends ApplicationController
{
	
	public function indexAction()
	{
        //$_GET['pepe']="tasks eoeoeeo";
        echo "Hola desde el controlador de tasks<br>";
       
        // $this->view->message = "hello from jm::index";
      
	}
	
	public function checkAction()
	{
		echo "hello from test::check";
	}

    public function testAction(){
        echo "Hola desde testAction";  
        
        echo "WEB_ROOT= " . WEB_ROOT ."<br>";
        echo "ROOT_PATH= " . ROOT_PATH ."<br>";
        echo "CMS_PATH= " . CMS_PATH ."<br>";
        
    
        require ROOT_PATH ."/app/views/jm/test.phtml";
       
        
    }

    public function deleteAction(){
        echo "record deleted <br>";
        // llamar al modelo con el id
        //volver a la vista
        header('location:' . ROOT_PATH . "/app/views/tasks/index.phtml");
        //header('location: ' . URL . 'songs/index');
    }
}

?>