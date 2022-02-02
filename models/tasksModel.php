<?php

function getTasks()
{
    //return $tasks = json_decode(file_get_contents('C:\wamp64\www\todo-project\todo-project\db\tasks.json'), true);
    return $tasks = json_decode(file_get_contents('./db\tasks.json'), true);
}

function getTaskById($id)
{

}

function createTask($data)
{

}

function updateTask($data, $id)
{

}

function deleteTask($id)
{

}