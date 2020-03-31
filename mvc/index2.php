<?php

echo "<h2>Registrate</h2> 
<form action='index2.php' method='POST'> 
<p><label for='username'>Username: </label><br> 
<input type='text' name='username'></p> 

<p><input type='submit' value='Registrarse' name='submit'></p>
</form>";

//$output = exec("sudo -u root samba-tool user add diego --random-password");
//$output = proc_open("sudo samba-tool user add diego --random-password",$return,$opcion);
//var_dump($output);

if (!isset($_POST['username']))
    echo "introduce usuario";
else {
    if ($_POST['username'] == " ") 
        echo "introduce usuario";
    else {
        echo "\n<br \>";
        passthru('sudo whoami');
        echo $_POST['username']." se ha creado <br \>";
        passthru('sudo samba-tool user add '.$_POST['username'].' --random-password', $retorno);
        echo "retorno de passthru: ".$retorno;
    }
}

//echo "\n<br/>";
//passthru("pwd");
//echo "\n<br/>";
//passthru("ls -l");
//echo "\n<br/>";

//passthru("sudo samba-tool user add diego --random-password");
//echo "\n<br/>";
//passthru("bash script.sh diego");
//echo "\n<br/>";
//echo "antes del sudo whoami con exec";
//echo exec('sudo whoami');
echo "\n<br/>";
//echo exec("bash script.sh diego");
echo "\n<br/>";
?>
