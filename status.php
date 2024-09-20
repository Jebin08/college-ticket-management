<?php
session_start();
include("dbconnect.php");
$username=$_SESSION['username'];
$cq=mysqli_query($connect,"select * from users where fullName='$username'");
$cr=mysqli_fetch_array($cq);
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

.user-row {
  margin-bottom: 14px;
}

.table-user-information > tbody > tr {
  border-top: 1px solid #ccc;
}

.table-user-information > tbody > tr:first-child {
  border-top: 0;
}

.table-user-information > tbody > tr > td {
  border-top: 0;
}

.panel {
  margin-top: 20px;
}

   
  </style>
  
</head>
<body>
<?php include("userlink.php");?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
      <div class="panel panel-primary">
     
        <div class="panel-heading">
          <h3 class="panel-title"><?php echo $username;?></h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class=" col-md-10 col-lg-10 ">
            <?php
$i=("select * from tblcomplaints where userId='".$cr['id']."'");
     $qry=mysqli_query($connect, $i);
   if(mysqli_num_rows($qry)>0){

$cnt=1;
while ($row=mysqli_fetch_array($qry)) {

?>  
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>S.No:</td>
                    <td><?php echo $cnt;?></td>
                  </tr>
                  <tr>
                    <td>Ticket Number:</td>
                    <td><?php echo $row['complaintNumber'];?></td>
                  </tr>
                  
                  <tr>
                    <td>Department:</td>
                    <td><?php echo $row['department'];?></td>
                  </tr>
                  <tr>
                    <td>Location:</td>
                    <td><?php echo $row['location'];?></td>
                  </tr>
                  <tr>
                    <td>Block</td>
                    <td><?php echo $row['block'];?></td>
                  </tr>
                  <tr>
                    <td>Ticket Category</td>
                    <td><?php echo $row['complaint_category'];?></td>
                  </tr>
                  
                   
                    <tr>
                    <td>Ticket</td>
                    <td><?php echo $row['complaintDetails'];?>
                    </td></tr>
                    <tr>
                    <td>Room Number</td>
                    <td><?php echo $row['roon_no'];?>
                    </td></tr>
                    
                    <tr>

                      <td>Status</td>
                       <td><?php echo $row['status'];?>
                    </tr>
                    <tr>
                    <tr>
                    <td>Apply date</td>
                    <td><?php echo $row['regDate'];?>
                    </td>
                    </tr>
                   
                    
                </tbody>
                <?php 
$cnt=$cnt+1;} } else { ?>
  <tr>
    <td colspan="8"> No records Found</td>

  </tr>
   

<?php } ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include("footer.php");?>
</body>
</html>