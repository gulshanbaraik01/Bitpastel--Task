<?php
    session_start();
    if(isset($_SESSION['email']))
    {
        echo"";
    }
    else
	{
		session_destroy();
		header('location:index.php');
    }
    ?>
<?php
    
include('header.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style3.css">
    
    
</head>
<body style="background-image: url('img/shutter3.jpg');">
	<div class="container">
	<h1 style="text-align:center;"> Welcome To User Dashboard</h1>
	<div class="col-lg-12 col-sm-8 col-md-8" style="height: 50%;">

        <div class="card hovercard">
            <div class="cardheader">
                </div>
                            

                    <?php
                        include('dbcon.php');
                                
                        if(isset($_SESSION['email']))
                        {     $email = $_SESSION['email'];
                                //$pass =md5( $_POST['password']);                                                                                            
                                $qry ="SELECT `name`, `email`, `phone`,`img` FROM `user` WHERE  `email`='$email'";
                                $run = mysqli_query($con, $qry);
                                if(mysqli_num_rows($run)>0)
                                {   $data = mysqli_fetch_assoc($run)
                                                    

                    ?>
                        <div class="avatar">
                                                    
                        <?php
                            if ($data['img']==NULL)
                            {
                                $data['img']='demo.jpg';
                            }
                        ?>
                        <img alt="no image" src="proimg/<?php echo $data['img'];    ?>">
                        <br>
                                              
                        <a style="text-decoration:none;" href="update.php">                                           
                            <input  class="btn" style="margin-top: -40px;"  type="button" name="update" id="update" value="Add/Update"/>
                        </a>
                                                    
                        </div>
                            <div class="info"><br>
                                <div class="title">
                                    <a target="_blank" href="#"> <?php echo $data['name']  ?></a>
                                </div>
							
                                <label class="desc"><?php echo $data['email']  ?></label><br>
                                <label class="desc"><?php echo $data['phone']  ?></label>
                                <br>

                        <?php

                            }
                            else
                            {
                                // echo "<script>alert('Username or password incorrect ! !!');
                                //     window.open('index.php','_self');
                                //     </script>";


                                                        
                                /* Redirect browser */
                                 header("location:index.php");

                                /* Make sure that code below does not get executed when we redirect. */
                                exit;
                                                    
                                                        
                            }



                        }

                    ?>

                    </div>
                </div>

        </div>


    </div>
</body>
</html>
<?php

include('footer.php');
?>
