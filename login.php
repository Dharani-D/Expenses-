<?php
 include_once("config.php");  
 include_once("header.php"); 
 
  if(isset($_POST['login']))
	  {
	$query ="select * from  employee where Empid='".$_POST['email_id']."'  and	Pwd ='".$_POST['password']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result))
		{
	$row = mysql_fetch_assoc($result);
		$_SESSION['login_user'] = $row['Empid'];
		echo '<script> alert("Login success"); window.location.href = "userhome.php" </script>';
		}
 else
	 {
		echo '<script> alert("Login failed");</script>';
	 }
 }

?>



<div align="center">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
 
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: "10";
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>


	<form action="" name="login_form" id="login_form"  method="post">
	<div class="imgcontainer">
 
  </div>

  <div class="container">
  <table class="displaycontent" width="400" height="120">
  	<tr>
    <td><label for="uname"><b>Username</b></label></td>
  <td> <input type="text" placeholder="Enter Username" name="email_id" required></td>
		</tr>

	<tr>
	<td>
    <label for="psw"><b>Password</b></label></td>
   <td> <input type="password" placeholder="Enter Password" name="password" required></td>
		</tr>
		  </table>
        <br>
    <input type="submit" name="login" value="Login" style="color: #000000"/>
 
  </div>

  




	</form>

<br>
<?php include("footer.php")?>

</div>
</div>
