<?php
    require_once 'adminHeader.php';
    require_once 'controllers/login_controller.php';
	$id=$_GET["id"];
	$rs=getFinalDoctorById($id);
	$p =$rs[0];
	
?>

<html>
    <body>
    <h4><?php echo $err_db; ?></h4>
        <form action="" method="post">
            <fieldset style="background-color:rgb(102, 153, 153);">
                <p align="middle"><font color="blue" size="5">Delete Doctor</font></p>
            <table align="center">
			
                <tr>
                    <td>
					    Name<br>
						<input type="hidden" name="id" value="<?php echo $p["id"];?>">
                        <input type="text" name="name" value="<?php echo $p["name"]; ?>" disabled >
                  
                    </td>
                    
                </tr>
				<tr>
                    <td>
					Date of Birth<br>
                    <input  type="date" name="dob" value="<?php echo $p["dob"]; ?>" disabled>
                    
                    </td>
                    
                </tr>
				<tr>
					<td>
					Blood Group<br>
					<select  name="bGroup">
						<option disabled selected>--Select--</option>
						<?php
							foreach($array as $b){
								if($b == $p["bGroup"]) 
									echo "<option selected disabled>$b</option>";
								else
									echo "<option disabled>$b</option>";
							}
						?>
						</select>
					
					</td>
				    </tr>
                   <tr>
                    <td>
					Email<br>
                    <input  type="text"  name="email" value="<?php echo $p["email"]; ?>" disabled>
                    </td>   
                </tr>
				<tr>
                    <td>
					Phone<br>
                    <input  type="text"  name="phone" value="<?php echo $p["phone"]; ?>" disabled>
                    </td>  
                </tr>
				<tr>
                    <td>
					Department<br>
                    <input  type="text"  name="department" value="<?php echo $p["department"]; ?>" disabled>
                    </td>  
                </tr>
				<tr>
                    <td>
					Hospital<br>
                    <input  type="text"  name="hospital" value="<?php echo $p["hospital"]; ?>" disabled>
                    </td>  
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="deletedoctor" value="Delete">
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
		
    </body>
</html>
