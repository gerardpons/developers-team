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

    '/' => 'tasks#index',

	'/delete' => 'tasks#delete',
    '/insert' => 'taskinsert#insert',
    '/edit' => 'taskedit#index',
    '/save' => 'taskedit#save',

    // '/app/controllers/taskEditController.php' => 'taskedit#save',
    // '/app/views/scripts/taskInsert/insert.phtml?' => 'taskinsert#insert',
    // '/app/controllers/taskInsertController.php' => 'taskinsert#insert',

    '/test' => 'test#index'

);
