<?php
    session_start();
    if(isset($_SESSION['email']))
    {
        echo"";
    }
    // else
	// {
	// 	session_destroy();
	// 	header('location:index.php');
    // }
    ?>


<?php
    
include('header.php');

?>

<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update profile pic</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style3.css">
</head>
<body style="background-image: url('img/shutter3.jpg');">

<div class="container">
	<h1 style="text-align:center;"> Update Your profile picture</h1>
    <div class="col-lg-12 col-sm-8 col-md-8" style="height: 50%;">
        <div class="card hovercard">
            <div class="cardheader">
                </div>
                <form method="POST" action="update.php" enctype="multipart/form-data">

                        <div class="md-form">
                            <label for="materialSubscriptionFormEmail">Image</label>
                            <br>
                            <input style="margin-left:450px;" type="file" name="simg"  id="img1" class="form-control-file" required>
                            <br>
                            <input class="btn" type="submit" name="submit" id="sub" value="Upload">
                            &nbsp;
                            <a style="text-decoration:none;" href="dashboard.php">
                            <input class="btn" type="button" name="back" id="back" value="Back"> </a>
                        </div>
                </form>
            </div>
        </div>
</div>




</body>

</html>
<script>
// var checkimg = function() {
//     if(document.getElementById('img1').value)
//     document.getElementById('sub').disabled = false;


</script>

<?php

        if(isset($_POST['submit'])){

    ?>
            <script>
            
            
            </script>
    <?php
    include('dbcon.php');
    $email = $_SESSION['email'];
    $imagename=$_FILES['simg']['name'];
    $tempname=$_FILES['simg']['tmp_name'];
    move_uploaded_file($tempname,"proimg/$imagename");
    
                                                 //$pass =md5( $_POST['password']);  
                                                                                            
    $qry ="UPDATE `user` SET `img`='$imagename' WHERE `email`='$email'";
    $run = mysqli_query($con, $qry);
    
    if($run==true)
    {
        ?>
        <script>
            alert('Image Upload successfully');
            window.open('dashboard.php','_self');
        
        </script>
 
<?php
    }
}
                                               

?>

<?php

include('footer.php');
?>
