<html>
<head></head>

<body>

<?php
    echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>
<table>
    <tr><td>GRUPOS</td>
</table>
    <?php
	 foreach($groups as $nomg=>$group)
{
	if(!empty($group->group)){		
        echo '<input type="radio" name="groupname" value="'.$group->group.'">'.$group->group.'&nbsp;&nbsp;&nbsp;&nbsp;'.'<br>';
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
