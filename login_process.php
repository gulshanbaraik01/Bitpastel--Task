
<?php
    session_start();
    if(isset($_SESSION['email']))
    {	
		
		header('location:dashboard.php');
	}
	else
	{
	
		//header('location:index.php');
	}

 
    
?>
<?php   

    include('dbcon.php');
	if(isset($_POST['submit']))
	{
		
		
			
		$email = $_POST['email'];
		
		$pass =md5( $_POST['password']);
		     
		$qry ="SELECT `email`,`password` FROM `user` WHERE  `email`='$email' and `password`='$pass'";
        
         
		$run = mysqli_query($con, $qry);
		if(mysqli_num_rows($run)>0)
		{		
			echo "<script>alert('Login Sucessfully !!');</script>";

			$data = mysqli_fetch_assoc($run);
			session_start();
			$_SESSION['email']=$data['email'];
			echo"<script>
			window.open('dashboard.php','_self');
			</script>";
			
        }
		else
		{
		echo "<script>alert('Username or password incorrect ! !!');
			window.open('index.php','_self');
			</script>";

		}

	}

	
    else{
    header('location:index.php');
	}

	?>
	

