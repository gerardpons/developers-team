<?php


class taskEditController extends ApplicationController{


    public function indexAction()
    {
        include ROOT_PATH . '/app/models/Tasks.class.php';

        if (!isset($_POST['id'])) {
            echo 'id not found';
            exit;
        }

        $id = $_POST['id'];

        $model = new Tasks();
        $task = $model->getTaskById($id);

        include ROOT_PATH . '/app/views/scripts/taskEdit/index.php';
    }

    public function saveAction()
    {

        include ROOT_PATH . '/app/models/Tasks.class.php';

        $taskId = $_POST['id'];

        $model = new Tasks();
        $task = $model->getTaskById($taskId);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $task = array_merge($task, $_POST);

            $task = $model->editTask($_POST, $taskId);

            header("Location: /");

            echo 'edit saved';
        }
    }

}