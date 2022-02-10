<?php 

/**
 * Used to define the routes in the system.
 * 
 * A route should be defined with a key matching the URL and an
 * controller#action-to-call method. E.g.:
 * 
 * '/' => 'index#index',
 * '/calendar' => 'calendar#index'
 */
$routes = array(
	'/test' => 'test#index',
	'/jm' => 'jm#index',
	'/leo' => 'jm#test',
	'/' => 'tasks#index',
    '/testing' => 'tasks#test',
	'/taskdelete' => 'tasks#delete',
	'/taskedit' => 'taskedit#index',
	'/taskinsertinsert' => 'taskinsert#insert',
	'/tasksave' => 'taskEedit#save',
    '/taskinsert' => 'taskinsert#insert',
    '/tasks/delete' => 'tasks#delete',
	'/app/views/scripts/taskInsert/insert.phtml?' => 'taskinsert#insert',
    '/app/controllers/taskInsertController.php' => 'taskinsert#insert'
);
