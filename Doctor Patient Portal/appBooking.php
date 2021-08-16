<?php
    require_once 'patientHeader.php';
    require_once 'controllers/login_controller.php';
	$id=$_GET["id"];
	$rs=getAppointmentById($id);
	$p =$rs[0];
	
?>

<html>
    <body>
    <h4><?php echo $err_db; ?></h4>
        <form action="" method="post">
            <fieldset style="background-color:rgb(102, 153, 153);">
                <p align="middle"><font color="blue" size="5">Booking</font></p>
            <table align="center">
			
                <tr>
                    <td>
					    Name<br>
						<input type="hidden" name="id" value="<?php echo $p["id"];?>">
                        <input type="text" name="name" value="<?php echo $p["name"]; ?>" >
                     <span><?php echo $err_name; ?></span>
                    </td>
                    
                </tr>
                <tr>
                    <td>
					Department<br>
                    <input type="text" name="department" value="<?php echo $p["department"]; ?>" >
                    <span><?php echo $err_department; ?></span>
                    </td>
                    
                </tr>
				<tr>
                    <td>
					Hospital<br>
                    <input  type="text" name="hospital" value="<?php echo $p["hospital"]; ?>" >
                   <span><?php echo $err_hospital; ?></span>
                    </td>
                    
                </tr>
				<tr>
                    <td>
					Date<br>
                    <input  type="date" name="date" value="<?php echo $p["date"]; ?>" >
                    <span><?php echo $err_date; ?></span>
                    </td>
                    
                </tr>
				
                   <tr>
                    <td>
					Time<br>
                    <input  type="time"  name="time" value="<?php echo $p["time"]; ?>" >
					<span><?php echo $err_time; ?></span>
                    </td>   
                </tr>
				<tr>
                    <td>
					Patient Name<br>
                    <input  type="text"  name="pname" value="<?php echo $pname; ?>" >
					<span><?php echo $err_pname; ?></span>
                    </td>  
                </tr>
				<tr>
                    <td>
					Phone<br>
                    <input  type="text"  name="phone" value="<?php echo $phone; ?>" >
					<span><?php echo $err_phone; ?></span>
                    </td>  
                </tr>
				<tr>
                    <td>
					Number of Patient<br>
                    <input  type="number"  name="nopatient" value="<?php echo $nopatient; ?>" >
					<span><?php echo $err_nopatient; ?></span>
                    </td> 
                    					
                </tr>
                <tr>
                    <td align="center">
                        <input type="submit" name="booking" value="Booking">
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
		
    </body>
</html>
