<?php

class Tasks
{
    public function getTasks()
    {
        return json_decode(file_get_contents(__DIR__ . '/../../db/tasks.json'), true);
    }
}