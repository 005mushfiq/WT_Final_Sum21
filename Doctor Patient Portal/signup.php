<?php 
require_once 'header.php';
require_once 'controllers/signup_controller.php'; 
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
</style>
<script src="js/signup.js">
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
				if(get("name").value == ""){
					hasError = true;
					get("err_name").innerHTML = "*Name Req";
				}
				if(get("username").value == ""){
					hasError = true;
					get("err_username").innerHTML = "*Username Req";
				}
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML = "*Email Req";
				}
				if(get("password").value == ""){
					hasError = true;
					get("err_password").innerHTML = "*Password Req";
				}
				if(get("bGroup").selectedIndex == 0){
					hasError=true;
					get("err_bGroup").innerHTML = "*Blood Group Req";
				}
				if(get("dob").value == ""){
					hasError = true;
					get("err_dob").innerHTML = "*DOB Req";
				}
				if(get("phone").value == ""){
					hasError = true;
					get("err_phone").innerHTML = "*Phone Req";
				}

				return !hasError;
				
			}
			function refresh(){
				hasError=false;
				get("err_usertype").innerHTML = "*User Type Req";
				get("err_name").innerHTML = "*Name Req";
                get("err_username").innerHTML = "*Username Req";	
                get("err_email").innerHTML = "*Email Req";
                get("err_password").innerHTML = "*Password Req";
                get("err_bGroup").innerHTML = "*Blood Group Req";
                get("err_dob").innerHTML = "*DOB Req";
                get("err_phone").innerHTML = "*Phone Req";				
			}

</script>
</head>
    <body >
        <h4><?php echo $err_db; ?></h4>
        <form action="" onsubmit="return validate()"  method="post">
            <fieldset style="background-color:rgb(102, 153, 153);">
                <p align="middle"><font color="blue" size="5">Sign up</font></p>
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
					    Name<br>
                        <input class="s" type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Name">
                        <span id="err_name"><?php echo $err_name; ?></span>
                    </td>
                    
                </tr>
                <tr>
                    <td>
					Username<br>
                    <input class="s" onfocusout="checkUsername(this)" type="text" id="username" name="username" value="<?php echo $username; ?>" placeholder="Username">
                    <span id="err_username"><?php echo $err_username; ?></span>
                    </td>
                    
                </tr>
				<tr>
                    <td>
					Password<br>
                    <input class="s" type="password" id="password" name="password" value="<?php echo $password; ?>" placeholder="Password">
                    <span id="err_password"><?php echo $err_password; ?></span>
                    </td>
                    
                </tr>
				<tr>
                    <td>
					Date of Birth<br>
                    <input class="s" type="date" id="dob" name="dob" value="<?php echo $dob; ?>" >
                    <span id="err_dob"><?php echo $err_dob; ?></span>
                    </td>
                    
                </tr>
				<tr>
					<td>
					Blood Group<br>
					<select class="s" id="bGroup" name="bGroup">
						<option disabled selected>--Select--</option>
						<?php
							foreach($array as $b){
								if($b == $bGroup) 
									echo "<option selected>$b</option>";
								else
									echo "<option>$b</option>";
							}
						?>
						</select>
					<span id="err_bGroup"> <?php echo $err_bGroup;?> </span>
					</td>
				    </tr>
                   <tr>
                    <td>
					Email<br>
                    <input class="s" type="text" id="email" name="email" value="<?php echo $email; ?>" placeholder="Email">
                    <span id="err_email"><?php echo $err_email; ?></span>
                    </td>
                    
                </tr>
				<tr>
                    <td>
					Phone<br>
                    <input class="s" type="text" id="phone" name="phone" value="<?php echo $phone; ?>" placeholder="Phone">
                    <span id="err_phone"><?php echo $err_phone; ?></span>
                    </td>
                    
                </tr>
                
                <tr>
                    <td align="center">
                        <input id="btn" type="submit" name="signup" value="Sign up">
                    </td>
                </tr>
				<tr>
                    <td>
                        Already have an account?
                        <a style="text-decoration:none"; href="login.php">Login</a>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
    </body>
</html>
<?php
    require_once 'footer.php';
?>
