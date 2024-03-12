
<?php
include('Adminheader.php');
include_once("config.php");  
?>


<div align="center">

<br>
<br>
<br>
<br>
<br>

<form action="" name="register"  id="register" method="post">

	<br>
<table>
<tr>
<td>
<h3>Expense Master</h3>
</td>
</tr>

</table>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="350" height="100">
	
	
	<tr>
		<td class="col" style="color: #000000">Expense Details:</td>
		<td><input type="text" name="t1"  value=""  style="color: #000000" /></td>
	</tr>

	
	
	
	
	

	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Register"  style="color: #000000"/>
		     	
		</td>
	</tr>

	
		
	
	</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br>

<h1>Expense Master</h1>

	<table border="2" cellspacing="6" class="displaycontent" width="1200" height="120" style="border:10px solid #79A202;" align="center">
	<tr>
	    <th bgcolor=Black><font color=white size=2>id</font></th>
			<th bgcolor=Black><font color=white size=2>Expense</font></th>
			
		 <th bgcolor=Black><font color=white size=2>Delete</font></td>
			  
	</tr>
	
	<?php
	
	$query = "select * from expensemas";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Expens']; ?></font></td>
		
		<td bgcolor=white><font color=#000000 size=2><a href="?delete=<?php echo $row['id'];?>">Delete</a></font></td>
		
	</tr>
	<?php }  ?>
	
	</table>
	<br>
	</form>
</div>


<?php



 if(isset($_POST['register']))
	 {
	 	         		
	$query = "INSERT INTO `expensemas`"; 
	$query .= " VALUES (null,'".$_POST['t1']."')";
          
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:Addexpense.php");
//	exit;
 
 }

?>

<?php

if(isset($_GET['delete']))
	{
	
	$query = "delete from expensemas where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:Addexpense.php");
	exit;
	}
include('footer.php');
?>
 

