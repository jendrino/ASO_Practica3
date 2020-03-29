<?php

class User {
    public $username;
    public $passw;
    public $folder;
    public $groupname;
    
    
    public function __construct($username, $groupname, $folder, $passw)  
    {  
        $this->username = $username;  
    $this->groupname = $groupname;
    $this->folder = $folder;
     $this->passw = $passw;
    }
}

?>
