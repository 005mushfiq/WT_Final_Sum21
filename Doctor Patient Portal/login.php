<?php
    require_once 'header.php';
    require_once 'controllers/login_controller.php';
?>

<html>
<head>
<style>
    #btn{
		color:white; 
		background-color:blue; 
		border-radius:5px;
		font-family:calibri;
	    padding-left:10px;
	    padding-right:10px;
	    padding-top:5px;
	    padding-bottom:5px;
	}
   .s{
	    border-radius:5px;
   }
   .gap{
	padding-top:110px;
	padding-bottom:110px;
}
</style>
<script>
var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validate(){
				refresh();
				if(get("usertype").selectedIndex == 0){
					hasError=true;
					get("err_usertype").innerHTML = "*User Type Req";
				}
				if(get("username").value == ""){
					hasError = true;
					get("err_username").innerHTML = "*Username Req";
				}
				
				if(get("password").value == ""){
					hasError = true;
					get("err_password").innerHTML = "*Password Req";
				}
				
				return !hasError;
				
			}
			function refresh(){
				hasError=false;
				get("err_usertype").innerHTML = "*User Type Req";
                get("err_username").innerHTML = "*Username Req";	
                get("err_password").innerHTML = "*Password Req";			
			}

</script>
</head>
    <body>
    <h4><?php echo $err_db; ?></h4>
        <form action="" onsubmit="return validate()" method="post">
            <fieldset style="background-color:rgb(102, 153, 153);">
                <p align="middle"><font color="blue" size="5">Login</font></p>
            <table align="center">
			<tr>
               <td align="center">
					User Type<br>
					<select class="s" id="usertype" name="usertype">
						<option disabled selected>--Select--</option>
						<?php
							foreach($arrayUser as $u){
								if($u == $usertype) 
									echo "<option selected>$u</option>";
								else
									echo "<option>$u</option>";
							}
						?>
						</select>
					<span id="err_usertype"> <?php echo $err_usertype;?> </span>
					</td>
               </tr>
                <tr>
                    <td>
                        <input type="text" class="s" id="username" name="username" value="<?php echo $username; ?>" placeholder="Username">
                        <span id="err_username"><?php echo $err_username; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="password" class="s" id="password" name="password" value="<?php echo $password; ?>" placeholder="Password">
                    <span id="err_password"><?php echo $err_password; ?></span>
                    </td>
                </tr>
				<tr>
				<td>
				<input type="checkbox"  name="rememberme"> Remember Me
				</td>
				</tr>
                <tr>
                    <td align="center">
                        <input id="btn" type="submit" name="login" value="Login">
                    </td>
                </tr>
                <tr>
                    <td>
                        Haven't Account?
                        <a style="text-decoration:none"; href="signup.php">Signup</a>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
		<div class="gap">
        &nbsp
        </div>
    </body>
</html>
<?php
    require_once 'footer.php';
?>