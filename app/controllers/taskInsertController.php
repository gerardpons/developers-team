<?php

class taskInsertController extends ApplicationController
{
	
	public function indexAction()
	{
        // echo "Hola desde el controlador de Insertar<br>";
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

    }

}