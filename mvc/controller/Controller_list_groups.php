<?php
include_once("model/model_group.php");

class controller_list_group {
    public $model;
    
    public function __construct()  
    {  
        $this->model = new model();
    }

    public function invoke()
    {
        if (!isset($_REQUEST['delete']))
        {
            // web por defecto
            $groups=$this->model->list_group();
            include 'view/form_list_group.php';
        }
       else
        {
            $this->model->delete_group(trim($_REQUEST['groupname']));
            $groups=$this->model->list_group();
            include 'view/form_list_group.php';
        }
    }
}
?>
