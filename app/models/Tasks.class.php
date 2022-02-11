<?php

class Tasks
{

    public function getTasks()
    {
        return json_decode(file_get_contents(ROOT_PATH . '/db/tasks.json'), true);
    }

    public function getTaskById($id)
    {
        $tasks = $this->getTasks();
        foreach ($tasks as $task) {
            if ($task['id'] == $id) {
                return $task;
            }
        }
        return null;
    }

    function insertTask($data)
    {
        $tasks = $this->getTasks();

        $data['id'] = rand(1000000, 2000000);

        $tasks[] = $data;

        $this->putJson($tasks);

        return $data;
    }

    public function editTask($data, $id)
    {
        $editTask = [];
        $tasks = $this->getTasks();
        foreach ($tasks as $i => $task) {
            if ($task['id'] == $id) {
                $tasks[$i] = $editTask = array_merge($task, $data);
            }
        }

        $this->putJson($tasks);

        return $editTask;
    }

    public function deleteTask($id)
    {
        $tasks = $this->getTasks();

        foreach ($tasks as $i => $task) {
            if ($task['id'] == $id) {
                array_splice($tasks, $i, 1);
            }
        }

        $this->putJson($tasks);
    }

    function putJson($tasks)
    {
        file_put_contents(ROOT_PATH . '/db/tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));
    }

}

