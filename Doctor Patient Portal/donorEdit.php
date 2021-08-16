<?php
    require_once 'controllers/login_controller.php';
	$username=$_SESSION["loggedDonor"];
	$rs=getDonorByUsername($username);
	$p =$rs[0];
	//var_dump($p);
	
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
<script>
var hasError=false;
			function get(id){
				return document.getElementById(id);
			}
			function validate(){
				refresh();
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

    <body>
    <h4><?php echo $err_db; ?></h4>
        <form action="" onsubmit="return validate()" method="post">
            <fieldset style="background-color:rgb(102, 153, 153);">
                <p align="middle"><font color="blue" size="5">Update Donor</font></p>
            <table align="center">
			
                <tr>
                    <td>
					    Name<br>
                        <input class="s" type="text" id="name" name="name" value="<?php echo $p["name"]; ?>" >
                        <span id="err_name"><?php echo $err_name; ?></span>
                    </td>
                    
                </tr>
                <tr>
                    <td>
					Username<br>
					<input type="hidden" name="id" value="<?php echo $p["id"];?>">
                    <input class="s" type="text" id="username" name="username" value="<?php echo $p["username"]; ?>" disabled>
                    <span id="err_username"><?php echo $err_username; ?></span>
                    </td>
                    
                </tr>
				<tr>
                    <td>
					Password<br>
                    <input class="s" type="password" id="password" name="password" value="<?php echo $p["password"]; ?>" >
                    <span id="err_password"><?php echo $err_password; ?></span>
                    </td>
                    
                </tr>
				<tr>
                    <td>
					Date of Birth<br>
                    <input class="s" type="date" id="dob" name="dob" value="<?php echo $p["dob"]; ?>" >
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
								if($b == $p["bGroup"]) 
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
                    <input class="s" type="text" id="email" name="email" value="<?php echo $p["email"]; ?>" >
                    <span id="err_email"><?php echo $err_email; ?></span>
                    </td>
                    
                </tr>
				<tr>
                    <td>
					Phone<br>
                    <input class="s" type="text" id="phone" name="phone" value="<?php echo $p["phone"]; ?>" >
                    <span id="err_phone"><?php echo $err_phone; ?></span>
                    </td>
                    
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="updateDonor" value="Update">
						<a class="c" href="donorProfile.php">Cancel<a/>
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
		
    </body>
</html>
