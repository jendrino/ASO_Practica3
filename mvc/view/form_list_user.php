<html>
<head></head>

<body>

<?php
    echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>
<table>
    <tr><td>Usuari</td><td>Grup</td><td>La resta</td></tr>
</table>
    <?php
//FALTA UNA PART DE CODI
	 foreach($users as $nom=> $user)
{
	if(!empty($user->username)){		
        echo '<input type="radio" name="username" value="'.$user->username.'">'.$user->username.'&nbsp;&nbsp;&nbsp;&nbsp;'.$user->groupname.'&nbsp;&nbsp;&nbsp;&nbsp;'.$user->folder.'<br>';
        }
        else
        {
            $this->model->delete_user(trim($_REQUEST['username']));
            $users=$this->model->list_user();
            include 'view/form_list_user.php';
        }
	}

    ?>

    <?php
    echo "<p><input type='submit' value='Menú principal ' name='principal'></p>
            <p><input type='submit' value='Delete User' name='delete'></p>
    </form>";
    ?>

</body>
</html>
