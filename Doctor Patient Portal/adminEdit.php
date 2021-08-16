<?php
    require_once 'controllers/login_controller.php';
	$username=$_SESSION["loggedAdmin"];
	$rs=getAdminByUsername($username);
	$a =$rs[0];
	//var_dump($a);
	
?>

<html>
<head>
<style>
.c{
	text-decoration:none; 
	padding-left:5px; 
	padding-right:5px;
    border-radius:2px; 
	padding-bottom:2px;	
	background-color:rgb(230, 255, 230);
}
</style>
</head>

    <body>
    <h4><?php echo $err_db; ?></h4>
        <form action="" method="post">
            <fieldset style="background-color:rgb(102, 153, 153);">
                <p align="middle"><font color="blue" size="5">Update Admin</font></p>
            <table align="center">
                <tr>
                    <td>
					    <input type="hidden" name="id" value="<?php echo $a["id"];?>">
                        <input type="text" name="usernameEdit" value="<?php echo $a["username"];?>" disabled>
                        <span><?php echo $err_username; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
					
                    <input type="password" name="passwordEdit" value="<?php echo $a["password"];?>">
                    <span><?php echo $err_password; ?></span>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="updateAdmin" value="Update">
						<a class="c" href="adminProfile.php">Cancel<a/>
                    </td>
					
                </tr>
                
            </table>
            </fieldset>
        </form>
		
    </body>
</html>
