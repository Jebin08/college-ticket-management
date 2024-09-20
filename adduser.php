<?php
include("dbconnect.php");
extract($_POST);

if(isset($btn))
{

	
	$rdate=date("Y-m-d");
    $uqry = "INSERT INTO users (fullName, userEmail, password, contactNo, address, department, country, pincode, userImage, regDate, status) 
    VALUES ('$fullName', '$userEmail', '$password', '$contactNo', '$address', '$department', '$country', '$pincode', '', NOW(), '1')";
   $res=mysqli_query($connect,$uqry);
		if($res)
		{
            ?>
<script>
    alert("Account Created");
    window.location.href="admin.php";
</script>
<?php
		}
		else
		{
		echo "Could not be stored!";
		}
	}	
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php include ("title.php");?></title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
</head>
<body>
<?php include("adminlink.php");?>
<br><br><br>
<section class="form-16" id="booking">
    <!-- /form-16-section -->
    <div class="form-16-mian py-5">
        <div class="container py-lg-3">
            <div class="section-title align-center text-center">
                <h4 class="sub-title">Add User</h4>
<!--                 <h3 class="global-title text-white">Register your Account now</h3>
 -->            </div>
            <div class="forms-16-top">

                <div class="form-right-inf">
                    <div class="form-inner-cont">

                        <form action="" method="post" class="signin-form">
                            <div class="d-grid book-form">
                                <div class="form-input">
                                    <input type="text" class="form-control" name="fullName" placeholder="Name.." required />
                                </div>
                                <div class="form-input">
                                    <input type="email" class="form-control" name="userEmail" placeholder="Email address.." required />
                                </div>
                                <div class="form-input">
                                    <input type="text" class="form-control" name="password" placeholder="Password" required />
                                </div>
                                <div class="form-input">
                                    <input type="text" class="form-control" name="contactNo" placeholder="Contact no.." required />
                                </div>
                                
                                <div class="form-input">
                                    <input type="text" class="form-control" name="address" placeholder="Address.." required />
                                </div>
                                
                                <div class="form-input">
                                    <input type="text" class="form-control" name="department" placeholder="Department" required="">
                                </div>
                               
                                <div class="form-input">
                                    <input type="text" class="form-control" name="country" placeholder="Country" required="">
                                </div>
                                <div class="form-input">
                                    <input type="text" class="form-control" name="pincode" placeholder="ZIP code.." required="">
                                </div>
                            </div>
                            
                           
                            <button class="btn btn-primary btn-book" name="btn">Add</button>
<!--                             <p class="add-info">For questions and additional information please contact: email <a href="mailto:mailid@mail.com">mailid@mail.com</a></p>
 -->                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php");?>

</body>

</html>
