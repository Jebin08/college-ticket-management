<?php
session_start();
include("dbconnect.php");
$username=$_SESSION['username'];
$qry=mysqli_query($connect,"select * from users where fullName='$username'");
$r=mysqli_fetch_array($qry);
$userId=$r['id'];
$userEmail=$r['userEmail'];
date_default_timezone_set('Asia/Kolkata');
$date1 = date('Y-m-d H:i:s');


extract($_POST);
if (isset($btn)) {
  $rdate = date("Y-m-d");
  $uqry = "INSERT INTO tblcomplaints(userId, location, department, block, complaint_category, complaintDetails, roon_no, regDate, status) VALUES ('$userId', '$location', '$department', '$block', '$complaint_category', '$complaintDetails', '$roon_no', NOW(), 'Ticket Submitted')";
  $res = mysqli_query($connect, $uqry);
  if ($res) {
    $qry1 = mysqli_query($connect, "SELECT * FROM login WHERE department='$department' AND location='$location' ORDER BY id ASC LIMIT 1");

    $r1 = mysqli_fetch_array($qry1);
      $email = $r1['email'];
      $fullname1 = $r1['fullname'];
      $message = urlencode("Dear {$fullname1},<br>A new Complaint has been assigned to you. Here are the details:<br>" .
                           "Location: {$location}<br>" .
                           "Department: {$department}<br>" .
                           "Block: {$block}<br>" .
                           "Ticket category: {$complaint_category}<br>" .
                           "Ticket: {$complaintDetails}<br>" .
                           "Room Number: {$roon_no}<br>" .
                           "Customer: {$username}<br>" .	
                           "Customer email: {$userEmail}<br>" .
                           "Date: {$date1}<br>"
                          );

      echo '<iframe src="http://iotcloud.co.in/testmail/testmail1.php?message='.$message.'&email='.$email.'&subject=TMS" frameborder="0" style="display:none"></iframe>';

      ?>
      <script language="javascript">
      alert("Successfully Added");
      setTimeout(function() {
          window.location.href = "status.php";
      }, 10000); 
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
   .container{
  margin-bottom:5%;
}

#form-header{
  margin-top:5%;
  text-align:center;
}

#form-tagline{
  background: #ff6d00;
  border-top-left-radius: 0.5rem;
	border-bottom-left-radius: 0.5rem;
  color:#ffffff;
  margin-top:5%;
  padding: 4%;
  text-align:left;
}

#form-tagline .fa{
  margin-bottom:15%;
}

#form-tagline h2 {
  margin-bottom:15%;
}

#form-content{
  background: #f4f4f4;
  border-top-right-radius: 0.5rem;
	border-bottom-right-radius:0.5rem;
  margin-top:5%;
  padding: 3%;
}

.form-group{
  margin-top:5%;
}

.contact{
	padding: 4%;
	height: 400px;
}

.control-label{
  font-size:16px;
	font-weight:600;
}

div .submit-button{
  margin-top:3%;
  text-align:right;
}

button#submit{
  white-space: normal;
  width:auto;
	background: #ff6d00;
	color: #ffffff;
  font-weight: 600;
	width: 25%;
}


  </style>
  <script language="javascript">
    $(document).ready(function() {
  $("#survey-form").submit(function() {
    alert("Thank You For Your Feedback");
    document.getElementById("survey-form").reset();
  });
});

  </script>
</head>
<body>
<?php include("userlink.php");?>
<div class="container"> <!-- open container -->
       <div class="row"> <!--  open row -->
         
         <div id="form-header" class="col-12">
           <h1 id="title">Online Ticket Form for University</h1>
         </div>
       </div> <!--  close row --> 
      
      <div class="row"> <!--  open row -->    
          <div id="form-tagline" class="col-md-4">
              <div class="form-tagline">
</i>
                  <h2>We really value your Ticket</h2>
                  <p id="description" class="lead">You can register here for any application</p>
              </div>
          </div>
         
		      <div id="form-content" class="col-md-8">
            
            <form action="" method="post" id="survey-form"> <!-- open form -->
            <div class="row form-group">
                   <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*Location:</label>
                   </div>
                  
                   <div class="input-group col-sm-9">
                     <div class="input-group-prepend">

                     </div>
                                        
<select name="location" class="form-control" id="dropdown">

<?php
$cq=mysqli_query($connect,"select distinct(location) from location");
while($cr=mysqli_fetch_array($cq))
{
?>
<option <?php if($cr['location']==$location) echo "selected"; ?>><?php echo $cr['location']; ?></option>
<?php
}
?>

</select> 
                  </div>

                </div>
                 
                <div class="row form-group">
                   <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*Dept:</label>
                   </div>
                  
                   <div class="input-group col-sm-9">
                     <div class="input-group-prepend">
                     </div>                   
<select name="department" class="form-control" id="dropdown">
<?php
$cq=mysqli_query($connect,"select distinct(departmentName) from department");
while($cr=mysqli_fetch_array($cq))
{
?>
<option <?php if($cr['departmentName']==$departmentName) echo "selected"; ?>><?php echo $cr['departmentName']; ?></option>
<?php
}
?>
</select>                   </div>
                </div>
                <div class="row form-group">
                   <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*Block:</label>
                   </div>
                  
                   <div class="input-group col-sm-9">
                     <div class="input-group-prepend">
                     </div>                   
<select name="block" class="form-control" id="dropdown">
<?php
$cq=mysqli_query($connect,"select distinct(block) from block");
while($cr=mysqli_fetch_array($cq))
{
?>
<option <?php if($cr['block']==$block) echo "selected"; ?>><?php echo $cr['block']; ?></option>
<?php
}
?>
</select>                   </div>
                </div>
                <div class="row form-group">
                   <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*Problem Category:</label>
                   </div>
                  
                   <div class="input-group col-sm-9">
                     <div class="input-group-prepend">
                     </div>                   
                      <select name="complaint_category" class="form-control" id="dropdown">
                      <option value="Speciality">Speciality</option>
                        <option value="Projector"></option>
                        <option value="UPS">UPS</option>
                        <option value="Other">Other</option>

                      </select>                   </div>
                </div>
                 
               
             
                 
              <div class="form-group row"> 
                 <div class="col-sm-3">
                   <label class="control-label" for="comment">Ticket:</label>
                 </div>
                  
                 <div class="input-group col-sm-9">
                     <div class="input-group-prepend">
                     </div>
                  <textarea name="complaintDetails" class="form-control" rows="5" id="comment"></textarea>
                 </div>  
              </div>
              <div class="form-group row"> 
                 <div class="col-sm-3">
                   <label class="control-label" for="comment">Room Number:</label>
                 </div>
                  
                 <div class="input-group col-sm-9">
                     <div class="input-group-prepend">
                     </div>
                     <input type="text" class="form-control" name="roon_no">
                 </div>  
              </div>
                
              <div class="form-group row">
                <div class="col-sm-12 submit-button">
                  <!--<input type="submit" name="btn" id="submit" class="btn btn-default" value="Submit Form">-->
                  <button type="submit" id="submit" name="btn" class="btn btn-default" aria-pressed="true">Submit Form</button>

                </div>
              </div>
                               
            </form> 
		    </div> 
               
      </div> 
    </div>
    
<?php include("footer.php");?>

</body>

</html>