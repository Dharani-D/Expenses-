
<?php
include('Userheader.php');
include_once("config.php");  

error_reporting(0);

?>
<body>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

   <script>
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  </script>
<div align="center">



<form action="" name="register"  id="register" method="post">
<style> 
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<table>
<tr>
<td>
<h3>Search Here</h3>
</td>
</tr>

</table>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="130" height="150">

		<tr>
		<td class="col" style="color: #000000">From Date:</td>
		<td> <input type="text" name="datepicker" id="datepicker"
                        placeholder='from Date'
                        value="">
</td>
</tr>
<tr>
<td class="col" style="color: #000000">
To Date:</td>
			<td>		
						<input type="text" name="datepicker1" id="datepicker1"
                        placeholder='to Date'
                        value=""></td></tr>

<tr>
						<td>
<input type="submit" name="Datewisesearch" value="Datewisesearch" />
</td>
	</tr>
	
		

		
	
	
		
	
	</table>
</br>

<h1>Date wise Report</h1>
<?php
	 if(isset($_POST['Datewisesearch'])){

	echo '
	<center >
	<table border="2" cellspacing="2" class="displaycontent" width="800" style="border:10px solid #000080;" align="center">
	<tr>
	   <th bgcolor=Black><font color=white size=2>ID</font></th>
			<th bgcolor=Black><font color=white size=2>Date</font></th>
			<th bgcolor=Black><font color=white size=2>Expenses</font></th>
			<th bgcolor=Black><font color=white size=2>Description</font></th>
			<th bgcolor=Black><font color=white size=2>Amount </font></th>
			<th bgcolor=Black><font color=white size=2>Mode of Pay</font></th>
		
		
		
      
	</tr>';
	
	$query3 = "select * from expense where Dt BETWEEN '".$_POST['datepicker']."' and '".$_POST['datepicker1']."'";
	$result4 = mysql_query($query3) or die(mysql_error());
		

	while($row3 = mysql_fetch_assoc($result4))
		{

		
		//$mob=$row3['Patname'];
	

	  ?>
	

	<tr>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row3['id']; ?></font></td>	
		<td bgcolor=white><font color=#000000 size=2><?php echo $row3['Dt']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row3['Expense']; ?></font></td>
      	<td bgcolor=white><font color=#000000 size=2><?php echo $row3['Descr']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row3['Amt']; ?></font></td>
		<td bgcolor=white><font color=#000000 size=2><?php echo $row3['Modeofpay']; ?></font></td>
	
     
	 
		
        
	</tr>
	<?php } }?>
	
	</table>
	<br>
	<br>
	<br>
	</form>
</div>




<?php

include('footer.php');
?>
 

