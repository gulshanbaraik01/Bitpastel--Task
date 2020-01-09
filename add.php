<?php   

    include('dbcon.php');
	if(isset($_POST['submit']))
	{
		
		
		
		$uname = $_POST['fname'];
		$mob = $_POST['phone'];
		$email = $_POST['email'];
		
		$pass =md5( $_POST['password']);
		
			//  echo $uname;
			//  echo $mob;
			//  echo $email;
			//  echo $pass;
			$qry ="SELECT `email` FROM `user` WHERE  `email`='$email' ";
                
			$run = mysqli_query($con, $qry);
			if(mysqli_num_rows($run)>0)
			{		
				
				echo "<script>
            alert('Email Already available');
			window.open('registration.php','_self');    
		</script>";
			}
			else{
		
							$qry ="INSERT INTO `user`(`name`, `email`, `phone`, `password`) VALUES ('$uname','$email','$mob','$pass')";
							$run = mysqli_query($con, $qry);
							if($run==true)
							{
								echo "<script>alert('User Inserted Sucessfully !!');</script>";
								
								echo"<script>

								window.open('index.php','_self');
								</script> ";
								
							}
							else
							{
							echo "<script>alert('User not Inserted Sucessfully !!');</script>";
							echo"<script>

								window.open('registration.php','_self');
								</script>";
							}
			}

	}

	?>
	


