<?php

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

        echo "WEB_ROOT= " . WEB_ROOT ."<br>";
        echo "ROOT_PATH= " . ROOT_PATH ."<br>";
        echo "CMS_PATH= " . CMS_PATH ."<br>";

    }

    public function deleteAction()
    {
        require ROOT_PATH . '/app/models/Tasks.class.php';

        $model = new Tasks();

        if (!isset($_POST['id'])){
            echo 'not found';
            exit;
        }

        $id = $_POST['id'];
        $model->deleteTask($id);

        header('Location: /');
    }

    public function editAction()
    {
        include ROOT_PATH . '/app/models/Tasks.class.php';

        if (!isset($_POST['id'])) {
            echo 'id not found';
            exit;
        }

        $id = $_POST['id'];

        $model = new Tasks();
        $task = $model->getTaskById($id);

        include ROOT_PATH . '/app/views/scripts/tasks/index.php';
    }

}