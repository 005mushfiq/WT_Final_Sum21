<?php 
require_once 'donorHeader.php';
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
				if(get("bGroup").selectedIndex == 0){
					hasError=true;
					get("err_bGroup").innerHTML = "*Blood Group Req";
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
                get("err_bGroup").innerHTML = "*Blood Group Req";
                get("err_phone").innerHTML = "*Phone Req";				
			}

</script>
</head>
    <body >
        <h4><?php echo $err_db; ?></h4>
        <form action="" onsubmit="return validate()"  method="post">
            <fieldset style="background-color:rgb(102, 153, 153);">
                <p align="middle"><font color="blue" size="5">Donate Blood</font></p>
            <table align="center">
                <tr>
                    <td>
					    Name<br>
                        <input class="s" type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="Name">
                        <span id="err_name"><?php echo $err_name; ?></span>
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
					Phone<br>
                    <input class="s" type="text" id="phone" name="phone" value="<?php echo $phone; ?>" placeholder="Phone">
                    <span id="err_phone"><?php echo $err_phone; ?></span>
                    </td>
                    
                </tr>
                
                <tr>
                    <td align="center">
                        <input id="btn" type="submit" name="donate" value="Donate">
                    </td>
                </tr>
            </table>
            </fieldset>
        </form>
    </body>
</html>

