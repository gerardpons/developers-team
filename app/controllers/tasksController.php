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
       
        
        // llamar al modelo con el id
        $id = $_GET["id"];
        echo "record deleted  $id<br>";
        exit();


        //volver a la vista    
        header('location:' . "http://localhost/dev/developers-team/web/tasks");
       
        
    }
}

?>