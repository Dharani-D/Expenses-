
<?php
include('Adminheader.php');
include_once("config.php");  
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
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
<h3>Expense Entry</h3>
</td>
</tr>

</table>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="350" height="100">
	
	
	<tr>
		<td class="col" style="color: #000000">Date:</td>
		<td><input type="text" name="datepicker" id="datepicker"  value=""  style="color: #000000" /></td>
	</tr>
<tr>
		<td class="col" style="color: #000000">Expense:</td>
		<td><select name="eid" onchange="getUserInfo(this.value)" > 
	<option><strong>--SELECT--</strong></option> 
<?php $a = array() ;
	  $a['Expens'] = '';
	  	 $goods_query=mysql_query("select * from expensemas") or die(mysql_error());
                                while($fetch_goods_id=mysql_fetch_array($goods_query))
                                {
                                  echo '<option value="'.$fetch_goods_id['Expens'].'">';;
                                    echo $fetch_goods_id['Expens'].'<br/>'; 
                                    echo ' </option>';
									if(isset($_GET['Expens']) && $_GET['Expens']==$fetch_goods_id['Expens']){
									  $a = $fetch_goods_id;
									  
									
									}
								}

?> 
</select></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000">Description:</td>
		<td><input type="text" name="t1"  value=""  style="color: #000000" /></td>
	</tr>
<tr>
		<td class="col" style="color: #000000">Amount:</td>
		<td><input type="text" name="t2"  value=""  style="color: #000000" /></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000">Mode of Pay:</td>
		<td><select name="s1">
    <option value="Cash">Cash</option>
    <option value="Check">Check</option>
     <option value="Bank Transfer">Bank Transfer</option>
	  
</select></td>
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
			<th bgcolor=Black><font color=white size=2>Date</font></th>
				<th bgcolor=Black><font color=white size=2>Expense</font></th>
				<th bgcolor=Black><font color=white size=2>Description</font></th>
			<th bgcolor=Black><font color=white size=2>Amount</font></th>
			<th bgcolor=Black><font color=white size=2>mode of Pay</font></th>
		 <th bgcolor=Black><font color=white size=2>Delete</font></td>
			  
	</tr>
	
	<?php
	
	$query = "select * from expense";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['id']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Dt']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row['Expense']; ?></font></td>
			<td bgcolor=white><font color=#000000 size=2><?php echo $row['Descr']; ?></font></td>
			<td bgcolor=white><font color=#000000 size=2><?php echo $row['Amt']; ?></font></td>
			<td bgcolor=white><font color=#000000 size=2><?php echo $row['Modeofpay']; ?></font></td>
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
	 	         		
	$query = "INSERT INTO `expense`"; 
	$query .= " VALUES (null,'".$_POST['datepicker']."','".$_POST['eid']."','".$_POST['t1']."','".$_POST['t2']."','".$_POST['s1']."')";
          
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:Addexpensedet.php");
//	exit;
 
 }

?>

<?php

if(isset($_GET['delete']))
	{
	
	$query = "delete from expense where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:Addexpensedet.php");
	exit;
	}
include('footer.php');
?>
 

