<?php
	require('connect.php');

	session_start();

	if(isset($_POST['signbtnx']))
	{
		$userName=$_POST['usern'];
		$userPassw=$_POST['passw'];

		$sql="SELECT * FROM userinfo WHERE UserName='$userName' AND UPassword='$userPassw'";
		$result=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		$coun=mysqli_num_rows($result);

		if($coun==1)
		{
			echo '<script type="text/javascript">

				alert("Successfully Logged In!!");
				window.location.href = "http://localhost/syst/OnlinePetCareSystem/index.php";

				</script>';

			
		}else
		{
			echo '<script type="text/javascript">

				alert("Incorrect Username or Password :( Please try again!");
				window.location.href = "http://localhost/syst/OnlinePetCareSystem/signin.php";

				</script>';


		}
		
	}
		
//coded by IT21174230
?>

