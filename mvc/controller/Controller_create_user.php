<?php
include_once("model/model_user.php");

class controller_create_user {
    public $model;
    
    public function __construct()  
    {  
        $this->model = new Model_user();
    }

    public function invoke()
    {
        if (!isset($_REQUEST['create']))
        {
            // web por defecto
            include 'view/form_create_user.php';
        }
        else
        {
            print_r($_REQUEST);
            $this->model->create_user($_REQUEST['user'],$_REQUEST['group'],$_REQUEST['folder'],$_REQUEST['passw']);
            include 'view/form_create_user.php';
        }
    }
}
?>
