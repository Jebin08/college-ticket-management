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
    window.location.href="index.php";
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
<?php include("homelink.php");?>
<section class="w3l-carousel">
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="background-image: url('assets/images/2.jpg');">
      <!-- <img src="assets/images/banner.jpg" class="d-block w-100" alt="..."> -->
      <div class="carousel-caption container">
        <h6 class="tag-cover-9"> <?php include ("title.php");?></h6>
        <h3 class="title-cover-9">Ticket Management System</h3>
        <p class="para-cover-9"></p>
       
      </div>
    </div>
    <div class="carousel-item" style="background-image: url('assets/images/1.jpg')">
      <!-- <img src="assets/images/banner-3.jpg" class="d-block w-100" alt="..."> -->
      <div class="carousel-caption container">
        <h6 class="tag-cover-9">  <?php include ("title.php");?></h6>
        <h3 class="title-cover-9">Ticket Management System</h3>
        <p class="para-cover-9"></p>

      </div>
    </div>
    <div class="carousel-item" style="background-image: url('assets/images/3.jpg')">
      <!-- <img src="assets/images/banner-2.jpg" class="d-block w-100" alt="..."> -->
      <div class="carousel-caption container">
        <h6 class="tag-cover-9">  <?php include ("title.php");?></h6>
        <h3 class="title-cover-9">Ticket Management System</h3>
        <p class="para-cover-9">.</p>

      </div>
    </div>
    <div class="carousel-item" style="background-image: url('assets/images/1.jpg')">
      <!-- <img src="assets/images/banner-1.jpg" class="d-block w-100" alt="..."> -->
      <div class="carousel-caption container">
        <h6 class="tag-cover-9"> <?php include ("title.php");?></h6>
        <h3 class="title-cover-9">Ticket Management System</h3>
        <p class="para-cover-9">.</p>
          
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<!-- Content-with-photo23 block -->
<section class="w3l-content-with-photo-23" id="about">
    <div id="cwp23-block" class="py-5">
        <div class="container py-lg-3">
            <h4 class="sub-title">Brief</h4>
            <h3 class="global-title text-secondary">About us</h3>
            <div class="row cwp23-content align-items-lg-center">
                <div class="cwp23-img col-md-6 pt-md-4">
                    <img src="assets/images/gi_petition.jpg" class="img-fluid" alt="" />
                </div>
                <div class="cwp23-text col-md-6 mt-4 mt-md-0 pl-md-4">
                    <div class="cwp23-title">
                        <h3><?php include("title.php");?></h3>
                    </div>
                    <div class="row cwp23-text-cols">
                        <div class="column col-lg-6 mt-4">
                            <p>You can apply  for all the Ticket here,easy all Tickets will be resolved</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section class="w3l-gallery py-5" id="portfolio">
        <div class="container py-lg-3">
            <div class="title-section">
                <h4 class="sub-title">Gallery</h4>
                <h3 class="global-title text-secondary">TMS</h3>
            </div>
            <ul class="portfolio-categ filter text-center my-md-5 my-3 p-0">
                <li class="port-filter all active">
                    <a href="#" class="btn btn-primary">Show All</a>
                </li>
                <li class="cat-item-1">
                </li>
                <li class="cat-item-2">
                </li>
                <li class="cat-item-3">
                </li>
            </ul>
            <ul class="portfolio-area clearfix p-0 m-0">
                <li class="portfolio-item2" data-id="id-1" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="assets/images/i2.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="assets/images/i2.jpg" class="img-fluid w3layouts " alt="portfolio-img">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-2" data-type="cat-item-2">
                    <span class="image-block">
                        <a class="image-zoom" href="assets/images/cyber.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="assets/images/cyber.jpg" class="img-fluid w3layouts " alt="portfolio-img">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-3" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="assets/images/1.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="assets/images/1.jpg" class="img-fluid w3layouts " alt="portfolio-img">
                        </a>
                    </span>
                </li>
               
                <div class="clear"></div>
            </ul>
            <!--end portfolio-area -->
        </div>
        <!-- //gallery container -->
    </section>
    <!-- //portfolio -->

<!-- <section class="form-16" id="booking">
    <div class="form-16-mian py-5">
        <div class="container py-lg-3">
            <div class="section-title align-center text-center">
                <h4 class="sub-title">Register</h4>
                <h3 class="global-title text-white">Register your Account now</h3>
            </div>
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
                            
                           
                            <button class="btn btn-primary btn-book" name="btn">Register</button>
                            <p class="add-info">For questions and additional information please contact: email <a href="mailto:mailid@mail.com">mailid@mail.com</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php include("footer.php");?>

</body>

</html>