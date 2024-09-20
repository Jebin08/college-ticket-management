<?php
session_start();
include("dbconnect.php");
extract($_REQUEST);

$username=$_SESSION['username'];
$qr1y=mysqli_query($connect,"select * from tblcomplaints where complaintNumber='$cid'");
$r12=mysqli_fetch_array($qr1y);
$userid=$r12['userId'];
$complaintDetails=$r12['complaintDetails'];
$qry=mysqli_query($connect,"select * from users where id='$userid'");
$r=mysqli_fetch_array($qry);
$userEmail=$r['userEmail'];
$fullName=$r['fullName'];
date_default_timezone_set('Asia/Kolkata');
$date1 = date('Y-m-d H:i:s');

extract($_POST);

if (isset($btn)) {
  $uqry = "UPDATE tblcomplaints SET updesc='$updesc', status='Your Ticket has been resolved', lastUpdationDate='$date1' WHERE complaintNumber='$cid'";
  $res = mysqli_query($connect, $uqry);
  if ($res) {
      $qry1 = mysqli_query($connect, "SELECT * FROM login WHERE username='$username'");
      $r1 = mysqli_fetch_array($qry1);
      $location = $r1['location'];
      $block = $r1['block'];
      $department = $r1['department'];
      $message = urlencode("Dear {$fullName},<br>Your complaint has been solved. Here are the details:<br>" .
                           "Location: {$location}<br>" .
                           "Department: {$department}<br>" .
                           "Block: {$block}<br>" .
                           "Ticket: {$complaintDetails}<br>" .
                           "Ticket Replay: {$updesc}<br>" .
                           "Admin Name: {$username}<br>" .	
                           "Admin email: {$userEmail}<br>" .
                           "Update Date: {$date1}<br>"
                          );

      echo '<iframe src="http://iotcloud.co.in/testmail/testmail1.php?message='.$message.'&email='.$userEmail.'&subject=CMS" frameborder="0" style="display:none"></iframe>';

      ?>
      <script language="javascript">
      alert("Successfully Added");
      setTimeout(function() {
          window.location.href = "approval.php";
      }, 5000); 
      </script>
      <?php
  } else {
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
  <style>

.card {
  background-color: dodgerblue;
  color: black;
  padding: 1rem;
  height: 4rem;
}

.cards {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  gap: 1rem;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
}

  </style>
</head>
<?php include("officerlink.php");?>
<body>
<br><br><br><center>
   
    <section class="w3l-blog-single6" id="reply-form">
	<div class="form-29 py-5">
		<div class="container pb-lg-3">
			<div class="form-main-cont-29">
				<div class="content-29-form align-center">
					<h3 class="title-cont-foem29">Reply</h3>
					<form action="" method="post" class="w3l-forms-29-form">
						
						<div>
							<textarea class="contact-textarea form-control" name="updesc" placeholder="Your Message"></textarea>
						</div>
						<button type="submit" name="btn" class="actionbg btn">Update Ticket</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
extract($_REQUEST);
if($act=="yes")
{
mysqli_query($connect,"update tblcomplaints set status='Your Ticket has been resolved'where complaintNumber='$id'");
?>
<script language="javascript">
    alert("Ticket Solved")
window.location.href="approval.php";
</script>
<?php
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php include("footer.php");?>

</body>

</html>