<?php

class TestController extends ApplicationController
{
	
	public function indexAction()
	{
        echo "DIR= " . __DIR__ . "<br>";
        echo "WEB_ROOT= " . WEB_ROOT ."<br>";
        echo "ROOT_PATH= " . ROOT_PATH ."<br>";
        echo "CMS_PATH= " . CMS_PATH ."<br>";
        $this->view->message = "hello from test::index";
	}
	
	public function checkAction()
	{
		echo "hello from test::check";
	}
}
