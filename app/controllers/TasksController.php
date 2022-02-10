<?php
// require_once ROOT_PATH . '/app/models/Tasks.class.php';
// $model = new Tasks();
// $tasks = $model->getTasks();

class TasksController extends ApplicationController
{

	public function indexAction()
	{
        require ROOT_PATH . '/app/models/Tasks.class.php';

        $model = new Tasks();
        $tasks = $model->getTasks();

        require ROOT_PATH . '/app/views/scripts/tasks/index.php';
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

    public function deleteAction()
    {
        require __DIR__ . '/../models/Tasks.class.php';

        $model = new Tasks();

        if (!isset($_POST['id'])){
            echo 'not found';
            exit;
        }

        $id = $_POST['id'];
        $model->deleteTask($id);

        header('Location: /');
        // header('location:' . ROOT_PATH . '/app/views/scripts/tasks/index.php');
    }

    public function editAction()
    {
        include __DIR__ . '/../../app/models/Tasks.class.php';

        if (!isset($_POST['id'])) {
            echo 'id not found';
            exit;
        }

        $id = $_POST['id'];

        $model = new Tasks();
        $task = $model->getTaskById($id);

        include __DIR__ . '/../../app/views/scripts/tasks/index.php';

    }

    /*public function deleteAction(){
       
        
        // llamar al modelo con el id
        $id = $_GET["id"];
        echo "record deleted  $id<br>";
        exit();


        //volver a la vista    
        header('location:' . "http://localhost/dev/developers-team/web/tasks");
       
        
    }*/
}

require_once ROOT_PATH . '/app/views/scripts/tasks/index.phtml';

?>