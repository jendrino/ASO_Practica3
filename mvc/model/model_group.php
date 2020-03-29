<?php

include_once("model/grupo.php");

class model {
	public function create_group($group)
	{
		echo "entro en funcion create <br>";
		$usuario=new Group($group);
		 passthru('sudo ./grupos.sh '.$usuario->group, $retorno);

		echo "retorno de passthru: ".$retorno;
		return;
	}
	
	public function list_group()
    {
     passthru("./listar_grupos.sh");
     $file = new SplFileObject("./grupo.txt");
     // Loop until we reach the end of the file.
     while (!$file->eof()) {
         // Echo one line from the file.
         $nomg=$file->fgets();
         //$u1=explode("", $u);
         $resultat_list[$nomg] = new group($nomg);
     }
     $file=null;
     return $resultat_list;
    }
	
	public function delete_group($g)
    {
        $usuario=new group($g);
        echo $usuario->group;
     passthru("./delgroup.sh ".$usuario->group, $retorno);
     echo "retorno de passthru: ".$retorno;
    }
	
}
?>
