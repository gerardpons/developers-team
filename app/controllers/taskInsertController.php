<?php

class taskInsertController extends ApplicationController
{
	
	public function indexAction()
	{
        //$_GET['pepe']="tasks eoeoeeo";
        echo "Hola desde el controlador de Insertar<br>";
        // $this->view->message = "hello from jm::index";
      
	}

    public function insertAction()
    {
        require __DIR__ . '/../models/Tasks.class.php';

        $model = new Tasks();

        $task = [
            'id' => '',
            'name' => '',
            'assignee' => '',
            'startDate' => '',
            'endDate' => '',
            'status' => '',
        ];

        $errors = [
            'name' => "",
            'assignee' => "",
            'startDate' => "",
            'endDate' => "",
            'status' => "",
        ];
        $isValid = true;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $task = array_merge($task, $_POST);

            $task = $model->insertTask($_POST);

            header('Location: /');

        }

        /*$model = new Tasks();
        $model->

        $name = $_POST['name'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $assignee = $_POST['assignee'];
        $status = $_POST['status'];

        echo "Registro insertado :  $name $fechaInicio  $fechaFin  $usuario $estado";
        exit();*/

        //volver a la vista
    }

}