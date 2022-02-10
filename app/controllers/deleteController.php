<?php

class deleteController extends ApplicationController
{   
    public function indexAction(){

        //llamar model
         echo "controlador de delete con id=" . $_GET['id'];
        header ("location: /views/scripts/tasks/index.phtml");

   
}

}

?>