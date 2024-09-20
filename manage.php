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
  <script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
</head>
<body>
<?php include("adminlink.php");?>
<br><br><br><center>
    <h1>Manage User Petition</h1><br><br><br><br>
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
						<th scope="col-xs-1">Mobile</th>
						<th scope="col-xs-1">Email</th>
                        <th scope="col-xs-1">Department</th>
                        <th scope="col-xs-1">Address</th>
						<!-- <th scope="col-xs-1">Country</th>
                        <th scope="col-xs-1">Zip Code</th> -->
                        <th scope="col-xs-1">Ticket Category</th>
						<th scope="col-xs-1">Ticket</th>
						<th scope="col-xs-1">Room Number</th>
						<th scope="col-xs-1">Date</th>
						<th scope="col-xs-1">Status</th>
						<th scope="col-xs-1">Action</th>



                    </tr>
					<?php
					$query = "SELECT * FROM `tblcomplaints`";
$result = mysqli_query($connect, $query);
$i==1;
while($r=mysqli_fetch_array($result))
{
  $i++
    ?>
            <tr>
			<?php
  $query1 = "SELECT * FROM `users` WHERE id='".$r['userId']."'";
  $result1 = mysqli_query($connect, $query1);
  $q1=mysqli_fetch_array($result1);
  ?>
                <td><?php echo $i; ?></td>
                <td><?php echo $q1['fullName']; ?></td>
                <td><?php echo $q1['contactNo']; ?></td>
				<td><?php echo $q1['userEmail']; ?></td>
                <td><?php echo $q1['department']; ?></td>
				<td><?php echo $q1['address']; ?></td>
				<!-- <td><?php echo $q1['country']; ?></td>
				<td><?php echo $q1['pincode']; ?></td> -->
				<td><?php echo $r['complaint_category'];?></td>
                <td>
                            <a href="javascript:void(0);" onClick="popUpWindow('complaint-view.php?cid=<?php echo htmlentities($r['complaintNumber']);?>');" title="View Complaint">View Ticket</a>
                          
                          </td>
                    <td><?php echo $r['roon_no'];?>
                    </td>
				<td><?php echo $r['regDate']; ?></td>
				<td><?php echo $r['status']; ?></td>
				<td><a href="delete.php?id=<?php echo $r['complaintNumber']; ?>">Delete</a></td>



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

</center>
<br><br><br><center>
   <br><br><br><br><br><br><br><br>
<?php include("footer.php");?>

</body>

</html>