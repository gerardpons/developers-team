<?php

class jmController extends ApplicationController
{
	
	public function indexAction()
	{
        //$res = $_GET['prueba'];
        //echo "Hola desde el controlador de jm res=". $res ."<br>";
        echo "Hola desde el controlador de jm <br>";
       
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
}


