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
  <style>
    .formclass {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px; /* Adjust as needed */
    margin: 0 auto;
}


.form {
  background: #fff;
  max-width: 360px;
  width: 100%;
  padding: 58px 44px;
  border: 1px solid #e1e2f0;
  border-radius: 4px;
  box-shadow: 0 0 5px 0 rgba(42, 45, 48, 0.12);
  transition: all 0.3s ease;
}

.row1 {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

.row1 label {
  font-size: 13px;
  color: #8086a9;
}

.row1 input {
  flex: 1;
  padding: 13px;
  border: 1px solid #d6d8e6;
  border-radius: 4px;
  font-size: 16px;
  transition: all 0.2s ease-out;
}

.row1 input:focus {
  outline: none;
  box-shadow: inset 2px 2px 5px 0 rgba(42, 45, 48, 0.12);
}

.row1 input::placeholder {
  color: #C8CDDF;
}

button {
  width: 100%;
  padding: 12px;
  font-size: 18px;
  background: #15C39A;
  color: #fff;
  border: none;
  border-radius: 100px;
  cursor: pointer;
  font-family: 'Open Sans', sans-serif;
  margin-top: 15px;
  transition: background 0.2s ease-out;
}

button:hover {
  background: #55D3AC;
}

@media(max-width: 458px) {
  
  
  .form1 {
    background: #f9faff;
    border: none;
    box-shadow: none;
    padding: 20px 0;
  }
}
.link-container a {
            color: rgb(51, 102, 102);
            text-decoration: none;
            transition: color 0.3s, border-bottom 0.3s;
        }
        .link-container a:hover {
            color: rgb(0, 153, 153); /* Change color on hover */
            border-bottom: 2px solid rgb(0, 153, 153); /* Underline effect */
        }
  </style>
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
<br><br><br>
<center><h1>Datewise Report</h1></center>
<br>
<!-- <center>
  <span style="color:rgb(51,102,102)"><a href="datewise-report.php">Datewise</a></span> | <span style="color:rgb(51,102,102)"><a href="department-report.php">Department</a></span>
</center> -->

<br><br><br><br>
<div class="formclass">
<form class="form" action="" method="post">
  <div class="row1">
    <label for="">From Date</label>
    <input type="date" name="sdate" placeholder="">
  </div>
  <div class="row1">
    <label for="">To Date</label>
    <input type="date" name="edate" placeholder="">
  </div>
  <button type="submit" class="" name="btn">Search</button>
</form>
</div>
<br><br><br>

<?php
if (isset($_POST['btn'])) {
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
    
    $sdate = $sdate . " 00:00:00";
    $edate = $edate . " 23:59:59";

    $qry = mysqli_query($connect, "SELECT * FROM tblcomplaints WHERE regDate BETWEEN '$sdate' AND '$edate'");
    $num = mysqli_num_rows($qry);

    if ($num > 0) {
?>

<div class="container">
    <div class="row">
        <div class="table-responsive">
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
                            <th scope="col-xs-1">Country</th>
                            <th scope="col-xs-1">Zip Code</th>
                            <th scope="col-xs-1">Ticket Category</th>
                            <th scope="col-xs-1">Ticket</th>
                            <th scope="col-xs-1">Room Number</th>
                            <th scope="col-xs-1">Date</th>
                            <th scope="col-xs-1">Status</th>
                            <th scope="col-xs-1">Action</th>
                        </tr>
                        <?php
                        $i = 1;
                        while ($r = mysqli_fetch_array($qry)) {
                            $query1 = "SELECT * FROM `users` WHERE id='" . $r['userId'] . "'";
                            $result1 = mysqli_query($connect, $query1);
                            $q1 = mysqli_fetch_array($result1);
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $q1['username']; ?></td>
                            <td><?php echo $q1['contactNo']; ?></td>
                            <td><?php echo $q1['userEmail']; ?></td>
                            <td><?php echo $q1['department']; ?></td>
                            <td><?php echo $q1['address']; ?></td>
                            <td><?php echo $q1['country']; ?></td>
                            <td><?php echo $q1['pincode']; ?></td>
                            <td><?php echo $r['complaint_category'];?></td>
                            <td>
                            <a href="javascript:void(0);" onClick="popUpWindow('complaint-view.php?cid=<?php echo htmlentities($r['complaintNumber']);?>');" title="View Ticket">View Ticket</a>
                          
                          </td>
                          <td><?php echo $r['roon_no'];?>
                          </td>
                            <td><?php echo $r['regDate']; ?></td>
                            <td><?php echo $r['status']; ?></td>
                            
                            <td><a href="delete.php?id=<?php echo $r['complaintNumber']; ?>">Delete</a></td>
                        </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </table>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    } else {
        echo "No results found!";
    }
}
?>
<br><br><br><center>
   <br><br><br><br><br><br><br><br>
<?php include("footer.php");?>

</body>

</html>