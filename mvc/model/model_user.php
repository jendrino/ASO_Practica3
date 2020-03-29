<?php

include_once("model/user.php");

class Model_user {
    public function create_user($username, $groupname, $folder, $passw)
    {
        $usuario=new User($username, $groupname, $folder, $passw);
        echo "Before passtrhu";
        print_r($usuario);
        passthru('sudo ./usuario.sh '.$usuario->username.' '.$usuario->groupname.' '.$usuario->folder.' '.$usuario->passw, $retorno);
        echo "retorno de passthru add_user: ".$retorno;        
        return;
    }
    public function list_user()
    {
        $users=shell_exec("./listar_usuarios.sh");
                
       $file = new SplFileObject("user.txt");
        // Loop until we reach the end of the file.
        while (!$file->eof()) {
            // Echo one line from the file.
            $u=$file->fgets();
           // $u1=explode("", $u);
            $passw='';
            $resultat_list[$u] = new User($u,'','', '');
            
        }
        $file=null;
        return $resultat_list;
    }
    
  
    
    public function delete_user($username)
    {
        $usuario=new user($username, '', '', '');
        passthru("sudo ./deluser.sh ".$usuario->username, $retorno);
        echo "retorno de passthru: ".$retorno;
    }
}

?>
