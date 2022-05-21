<?php
	require('connect.php');

	if(isset($_POST['signbtn']))
	{
		$userName=$_POST['usern'];
		$userPassw=$_POST['passw'];

		$sql="SELECT * FROM userinfo WHERE UserName=$userName AND UPassword=$userPassw";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$coun=mysqli_num_rows($result);

		if($coun==1)
		{
			echo '<p> Successfully Logged In!! </p>';
		}else
		{
			echo '<script type="text/javascript">
			alert("Execute Javascript Code");
			</script>';
		}
		
	}
		

?>