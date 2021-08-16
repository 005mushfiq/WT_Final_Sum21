<?php
    require_once 'doctorHeader.php';
    require_once 'controllers/login_controller.php';
	$username=$_SESSION["loggedDoctor"];
	$rs=getDoctorByUsername($username);
	$p =$rs[0];
	//var_dump($p);
	
?>

<html>
<head>
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
					get("err_username").innerHTML = "*Userame Req";
				}
				if(get("department").value == ""){
					hasError = true;
					get("err_department").innerHTML = "*Department Req";
				}
				if(get("hospital").value == ""){
					hasError = true;
					get("err_hospital").innerHTML = "*Hospital Req";
				}
				if(get("date").value == ""){
					hasError = true;
					get("err_date").innerHTML = "*Date Req";
				}
				if(get("time").value == ""){
					hasError = true;
					get("err_time").innerHTML = "*Time Req";
				}

				return !hasError;
				
			}
			function refresh(){
				hasError=false;
				get("err_name").innerHTML = "*Name Req";
				get("err_username").innerHTML = "*Userame Req";
                get("err_department").innerHTML = "*Department Req";	
                get("err_hospital").innerHTML = "*Hospital Req";
                get("err_date").innerHTML = "*Date Req";
                get("err_time").innerHTML = "*Time Req";				
			}

</script>
</head>

    <body>
    <h4><?php echo $err_db; ?></h4>
        <form action="" onsubmit="return validate()" method="post">
            <fieldset style="background-color:rgb(102, 153, 153);">
                <p align="middle"><font color="blue" size="5">Create Appointment</font></p>
            <table align="center">
			
                <tr>
                    <td>
					    Name<br>
						<input type="hidden" name="id" value="<?php echo $p["id"];?>">
                        <input class="s" type="text" id="name" name="name" value="<?php echo $p["name"]; ?>" >
                        <span id="err_name"><?php echo $err_name; ?></span>
                    </td>  
                </tr>
				<tr>
                    <td>
					Username<br>
                    <input class="s" type="text" id="username" name="username" value="<?php echo $p["username"]; ?>" >
                    <span id="err_username"><?php echo $err_username; ?></span>
                    </td>
                    
                </tr>
				<tr>
                    <td>
					Department<br>
                    <input class="s" type="text" id="department" name="department" value="<?php echo $p["department"]; ?>" >
                    <span id="err_department"><?php echo $err_department; ?></span>
                    </td>
                    
                </tr>
				<tr>
                    <td>
					Hospital<br>
                    <input class="s" type="text" id="hospital" name="hospital" value="<?php echo $p["hospital"]; ?>" >
                    <span id="err_hospital"><?php echo $err_hospital; ?></span>
                    </td>
                    
                </tr>
				<tr>
                    <td>
					Date<br>
                    <input class="s" type="date" id="date" name="date" value="<?php echo $date; ?>" >
                    <span id="err_date"><?php echo $err_date; ?></span>
                    </td>
                    
                </tr>
				<tr>
                    <td>
					Time<br>
                    <input class="s" type="time" id="time" name="time" value="<?php echo $time; ?>" >
                    <span id="err_time"><?php echo $err_time; ?></span>
                    </td>
                    
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="createApp" value="Create Appointment">
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
		
    </body>
</html>
