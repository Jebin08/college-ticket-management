<?php
session_start();
include("dbconnect.php");
$username=$_SESSION['username'];
$query = "SELECT * FROM `login` WHERE username='$username'";
$result = mysqli_query($connect, $query);
$q=mysqli_fetch_array($result);
$department=$q['department'];
$location=$q['location'];
$block=$q['block'];
extract($_POST);

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
      height: auto;
      box-sizing: border-box;
    }

    .cards {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      gap: 1rem;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    }

    @media (min-width: 900px) {
      .cards {
        grid-template-columns: repeat(3, 1fr);
      }
    }
    .update{
      padding:10px;
    }
  </style>
</head>
<?php include("officerlink.php");?>
<body>
  <br><br><br><center>
    <h1>User Tickets</h1><br><br><br>
    <div class="cards">
      <?php
      $query = "SELECT * FROM `tblcomplaints` WHERE department='".$department."' && location = '".$location."' && block='".$block."'";
      $result = mysqli_query($connect, $query);
      $i = 1;
      while($r = mysqli_fetch_array($result)) {
        $i++;
      ?>
        <div class="card">
          <h1 style="color:white">Ticket <?php echo $i; ?></h1><br>
          <p style="background-color: white; 
          padding: 15px; 
          border: 2px solid #ccc; 
          border-radius: 10px; 
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
          font-family: Arial, sans-serif; 
          font-size: 14px; 
          color: #333; 
          line-height: 1.6;">
  <?php echo $r['complaintDetails']; ?>
</p>
<br>

          <?php
          $query1 = "SELECT * FROM `users` WHERE id='".$r['userId']."'";
          $result1 = mysqli_query($connect, $query1);
          $q1 = mysqli_fetch_array($result1);
          ?>
          <p>Ticket Category: <?php echo $r['complaint_category']; ?></p>
          <p>Room Number: <?php echo $r['roon_no']; ?></p>
          <p>Name: <?php echo $q1['fullName']; ?></p>
          <p>Mobile: <?php echo $q1['contactNo']; ?></p>
          <p>Email: <?php echo $q1['userEmail']; ?></p>
          <p>Department: <?php echo $q1['department']; ?></p>
          <p>Address: <?php echo $q1['address']; ?></p>
          <p>Country: <?php echo $q1['country']; ?></p>
          <p>Pincode: <?php echo $q1['pincode']; ?></p>
          <?php
          if ($r['status'] == 'Ticket Submitted') {
          ?>
          <div class="update">
          <a style="font-weight:bold;color:black;width:100px;height:50px;border-radius:50px;background-color:white;padding:10px;" href="approval1.php?cid=<?php echo $r['complaintNumber']; ?>">Update</a>


          </div>
          <?php
          } else {
            echo "Ticket has been resolved";
          }
          ?>
        </div>
      <?php
      }
      ?>
    </div>
    <?php
    extract($_REQUEST);
    if ($act == "yes") {
      mysqli_query($connect, "UPDATE tblcomplaints SET status='Your complaint has been resolved' WHERE complaintNumber='$id'");
    ?>
      <script language="javascript">
        alert("Complaint Solved")
        window.location.href = "approval.php";
      </script>
    <?php
    }
    ?>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include("footer.php");?>
  </center>
</body>
</html>
