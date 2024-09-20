<?php
session_start();
$username=$_SESSION['username'];
include("dbconnect.php");

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
<br><br><br><center>
    <h1>Officers Information</h1><br><br><br><br>
    <div class="container">
            <div class="row">
			<div class="table-responsive">
				<center>
               <form id="form1" class="" name="form1" method="post" action="">
			   <div class="col-xs-1 col-lg-12">
                <table class="table table-stripped" align="center">
                    <tr>
                        <th scope="col-xs-1">S.No</th>
                        <th scope="col-xs-1">Name</th>
                        <th scope="col-xs-1">Email</th>
                        <th scope="col-xs-1">Mobile</th>
                        <th scope="col-xs-1">Department</th>
                        <th scope="col-xs-1">Location</th>
                        <th scope="col-xs-1">Block</th>
						<th scope="col-xs-1">Date</th>

                    </tr>
                    <?php



  $i=0;
			$qs=mysqli_query($connect,"select * from login");
			while($rs=mysqli_fetch_array($qs))
			{
			$i++;
			?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $rs['fullname']; ?></td>
                <td><?php echo $rs['email']; ?></td>
				<td><?php echo $rs['mobilenumber']; ?></td>
				<td><?php echo $rs['department']; ?></td>
				<td><?php echo $rs['location']; ?></td>
				<td><?php echo $rs['block']; ?></td>
				<td><?php echo $rs['creationDate']; ?></td>
                



            </tr>
            <?php
			}
			?>
                </table>
				</div>

               </form>
			   </center>
		</div>

		</div>
            </div>
        </div>

</center><br><br><br><br><br><br><br><br>
<?php include("footer.php");?>

</body>

</html>