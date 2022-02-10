<?php


class taskEditController extends ApplicationController{

	
	public function indexAction()
	{
        require __DIR__ . '/../models/Tasks.class.php';

        $model = new Tasks();
        $tasks = $model->getTasks();

        $taskId = $_POST['id'];

        require __DIR__ . '/../views/scripts/taskEdit/edit.phtml';
	}

    public function editAction()
    {

        require __DIR__ . '/../models/Tasks.class.php';

        $model = new Tasks();

        if (!isset($_GET['id'])) {
            echo 'not found 1';
            exit;
        }

        $taskId = $_GET['id'];

        $task = $model->getTaskById($taskId);
        if (!$task) {
            echo 'not found 2';
            exit;
        }

        $errors = [
            'name' => "",
            'assignee' => "",
            'startDate' => "",
            'endDate' => "",
            'status' => "",
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $task = array_merge($task, $_POST);

            $task = $model->editTask($_POST, $taskId);

            header("Location: /");

            echo 'Saved';

        }

    }

    /*$id = $_GET['id'];
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


        // $this->view->message = "hello from jm::index";*/



}