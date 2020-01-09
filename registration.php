
<!DOCTYPE html>
<?php
include('dbcon.php');

?>


<html language="English">
	<head>
		<title>

			Registration Page

		</title>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="css/global.css">
                
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                
<script>
function checkavail(){
    jQuery.ajax({
url: "registration.php",
data:$("#email").val(),
type: "POST",
success:function(data){
    console.log(data);
//$("#error").text("User Already Exists!!");
},
error:function (){
//$("#error").text("");

}
});
}
}



</script>



				

	</head>
<body>
	<div class="container-fluid bg " >
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12"></div>
			<div class="col-md-4 col-sm-4 col-xs-12">

				<form class="form-container" action="add.php" method="POST">
					
					<h2>Registration</h2>

					<div class="form-group">
    					<label for="exampleInputName">Name</label>
    					<input type="text" name="fname" class="form-control" id="exampleInputEmail1" placeholder="Name" required>
  					</div>
  					<div class="form-group">
    					<label for="exampleInputName">Phone</label>
                        <input type="Phone" name="phone" class="form-control" id="exampleInputPhone1" placeholder="xxx-xxx-xxxx"  pattern="[1-9]{1}[0-9]{2}-[0-9]{3}-[0-9]{4}" required>
                        <span id='ph' style="font-size:20px;"></span>
  					</div>
  					<div class="form-group">
    					<label for="exampleInputEmail1">Email</label>
    					<input type="text" name="email" class="form-control" id="email" style="color:black;" onblur="checkavail()" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                    <br>
                    <?php



if(!empty($_POST["email"])) {
  $query = "SELECT * FROM user WHERE email='" . $_POST["email"] . "'";
  $run = mysqli_query($con, $query);

  if(mysqli_num_rows($run)>0) {
      echo "<span class='status-not-available' style='color:white'> Email Exists</span>";
  }else{
      echo "<span class='status-available' style='color:white' > Not Exists.</span>";
  }
}
?>
                    <span id="error"></span>
                      </div>
					<div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					   	<input type="password"  onkeyup='check();' name="password" id="psd1" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
					</div>
					<div>
					   	<label for="exampleInputPassword1">Confirm Password</label>
					   	<input type="password" onkeyup='check();' name="confpassword" id="psd2" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                           <span id='match' style="font-size:15px;font-family:sans-serif;"></span>
                    </div>
                    <br>
					<div>
  							<button type="submit" name="submit" id="rgt" class="btn btn-success" disabled > Register</button>
                              &nbsp;
                              <button type="reset" id="rst" class="btn btn-success btn">Reset</button>
                              &nbsp;
                              &nbsp;
                              
                              <label style="text-size:15px;">
                                    Already Have an account !
                                    <a href="index.php" style="text-decoration: none;">Login </a>
                               </label>
                    
  					</div>
  				</form>

			</div>
		</div>
	</div>
    

</body>
</html>


<script>
        var check = function() {
            var p1 = document.getElementById('psd1').value;
            var p2 = document.getElementById('psd2').value;

            var l = p1.length;
            if (l<8)
                {
                    document.getElementById('match').style.color = 'red';
                    document.getElementById('match').innerHTML = 'Length should be minimum of 8 characters !';
                }
                else{
                        if (p1===p2) {
                        document.getElementById('match').style.color = 'green';
                        document.getElementById('match').innerHTML = 'Matched';
                        document.getElementById('rgt').disabled = false;
                         } else {
                        document.getElementById('match').style.color = 'red';
                        document.getElementById('match').innerHTML = 'Not Matched';
                        //document.getElementById('submit').disabled = false;
                        }   

                    }
  
         }

        

</script>