<?php
    require_once 'header.php';
	require_once 'controllers/contact_controller.php';
?>
<html>
<head>
<link rel="stylesheet" href="CSS/mystyle.css">
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
				if(get("email").value == ""){
					hasError = true;
					get("err_email").innerHTML = "*Email Req";
				}
				if(get("message").value == ""){
					hasError = true;
					get("err_message").innerHTML = "*Message Req";
				}

				return !hasError;
				
			}
			function refresh(){
				hasError=false;
				
				get("err_name").innerHTML = "*Name Req";	
                get("err_email").innerHTML = "*Email Req";
                get("err_message").innerHTML = "*Message Req";			
			}

</script>
</head>
<body>
<h2 class="head2" align="middle">CONTACT US</h2>
<h3 align="middle">Contact Form</h3>
<form action="" onsubmit="return validate()" method="post">
		<fieldset style="background-color:rgb(102, 153, 153);">
		<p align="middle">
			<table>
				<tr>
					<td>Name</td>
					<td>: <input class="s" type="text" id="name" name="name" placeholder="Name" value="<?php echo $name;?>" > </td>
					<td><span id="err_name"> <?php echo $err_name;?></span></td>
				</tr>
				<tr>
                    <td>Email</td>
                    <td>: <input class="s" type="text" id="email" name="email" placeholder="Email" value="<?php echo $email;?>" >  </td>
                    <td><span id="err_email"> <?php echo $err_email;?> </span></td>
               </tr>
			   <tr>
              <td>Message</td>
                <td>: <textarea class="s" id="message" name="message" placeholder="Your Message...."><?php echo $message;?></textarea>
               </td>
               <td><span id="err_message"><?php echo $err_message;?> </span></td>  
               </tr>
			   <tr>
					<td  colspan="2" align="middle"><input id="btn"  type="submit" name="submit" value="Send Message"></td>

				</tr>
			   </table>
			</p>
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