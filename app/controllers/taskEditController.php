<?php


class taskEditController extends ApplicationController{


    public function indexAction()
    {
        include __DIR__ . '/../../app/models/Tasks.class.php';

        if (!isset($_POST['id'])) {
            echo 'id not found';
            exit;
        }

        $id = $_POST['id'];

        $model = new Tasks();
        $task = $model->getTaskById($id);

        include __DIR__ . '/../../app/views/scripts/taskEdit/index.php';
    }

    public function saveAction()
    {
        include __DIR__ . '/../../app/models/Tasks.class.php';

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