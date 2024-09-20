<?php
session_start();
$username=$_SESSION['username'];
include("dbconnect.php");
extract($_POST);
if(isset($btn))
{

	$max_qry = mysqli_query($connect, "select max(id) maxid from  officer");
	$max_row = mysqli_fetch_array($max_qry);
	$id=$max_row['maxid']+1;
		$uqry="INSERT INTO login(fullname,mobilenumber,email,username,password,department,location,block,creationDate,updationDate) VALUES('$fullname','$mobilenumber','$email','$username','$password','$department','$location','$block',NOW(),NOW())";

        $res=mysqli_query($connect,$uqry);
		if($res)
		{
            ?>
<script>
    alert("Account Created");
    window.location.href="officerlogin.php";
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
  <style>
    form {
  background: #fff;
  max-width: 360px;
  width: 100%;
  padding: 58px 44px;
  border: 1px solid #e1e2f0;
  border-radius: 4px;
  box-shadow: 0 0 5px 0 rgba(42, 45, 48, 0.12);
  transition: all 0.3s ease;
}

.row {
  display: flex;
  flex-direction: column;
  margin-bottom: 20px;
}

.row label {
  font-size: 13px;
  color: #8086a9;
}

.row input {
  flex: 1;
  padding: 13px;
  border: 1px solid #d6d8e6;
  border-radius: 4px;
  font-size: 16px;
  transition: all 0.2s ease-out;
}

.row input:focus {
  outline: none;
  box-shadow: inset 2px 2px 5px 0 rgba(42, 45, 48, 0.12);
}

.row input::placeholder {
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
  
  body {
    margin: 0 18px;
  }
  
  form {
    background: #f9faff;
    border: none;
    box-shadow: none;
    padding: 20px 0;
  }
}
  </style>
</head>
<body>
<?php include("homelink.php");?>

<br><br><br><center>
    <h1>Admin Register</h1>
    <br>
<div class="container"> <!-- open container -->
       
          </div>
         
		      <div id="form-content" class="col-md-8">
            
            <form action="" method="post" id="survey-form"> <!-- open form -->
           
                          
                <div class="row form-group">
                   <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*Name:</label>
                   </div>
                  
                   <div class="input-group col-sm-9">
                     <div class="input-group-prepend">
                     </div>                   
                     <input id="name" type="text" class="form-control" placeholder="" name="fullname" required>

                   </div>
                </div>
                <div class="row form-group">
                   <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*Mobile:</label>
                   </div>
                  
                   <div class="input-group col-sm-9">
                     <div class="input-group-prepend">
                     </div>                   
                     <input id="name" type="text" class="form-control" placeholder="" name="mobilenumber" required>

                   </div>
                </div>
                <div class="row form-group">
                   <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*Email:</label>
                   </div>
                  
                   <div class="input-group col-sm-9">
                     <div class="input-group-prepend">
                     </div>                   
                     <input id="name" type="text" class="form-control" placeholder="" name="email" required>

                   </div>
                </div>
   
                <div class="form-group row">
                   <div class="col-sm-3">
                     <label id="email-label" class="control-label" for="email">*Username:</label>
                   </div>
                 
                   <div class="input-group col-sm-9">
                     <div class="input-group-prepend">
                     </div>
                     <input type="text" class="form-control" id="email" placeholder="" name="username" required>

                   </div>
                </div>
                <div class="form-group row">
                   <div class="col-sm-3">
                     <label id="email-label" class="control-label" for="email">*Password:</label>
                   </div>
                 
                   <div class="input-group col-sm-9">
                     <div class="input-group-prepend">
                     </div>
                     <input type="text" class="form-control" id="email" placeholder="" name="password" required>


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
     <option>--Select Department--</option>
     <?php
     $qs=mysqli_query($connect,"select distinct(departmentName) from department");
     while($rs=mysqli_fetch_array($qs))
     {
      ?>
      <option value="<?php echo $rs['departmentName'];?>"><?php echo $rs['departmentName'];?></option>
      <?php
     }
     ?>
    
   

</select>                   </div>
                </div>
                <div class="row form-group">
                   <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*Location:</label>
                   </div>
                  
                   <div class="input-group col-sm-9">
                     <div class="input-group-prepend">
                     </div>                   
                     <select name="location" class="form-control" id="dropdown">
     <option>--Select Location--</option>
     <?php
     $qs=mysqli_query($connect,"select distinct(location) from location");
     while($rs=mysqli_fetch_array($qs))
     {
      ?>
      <option value="<?php echo $rs['location'];?>"><?php echo $rs['location'];?></option>
      <?php
     }
     ?>
    
   

</select>               </div>
                </div>

                <div class="row form-group">
                   <div class="col-sm-3">
                    <label id="name-label" class="control-label" for="name">*Block:</label>
                   </div>
                  
                   <div class="input-group col-sm-9">
                     <div class="input-group-prepend">
                     </div>                   
                     <select name="block" class="form-control" id="dropdown">
     <option>--Select Block--</option>
     <?php
     $qs=mysqli_query($connect,"select distinct(block) from block");
     while($rs=mysqli_fetch_array($qs))
     {
      ?>
      <option value="<?php echo $rs['block'];?>"><?php echo $rs['block'];?></option>
      <?php
     }
     ?>
    
   

</select>               </div>
                </div>
                  
                 
                
              <div class="form-group row">
                <div class="col-sm-12 submit-button">
                  <!--<input type="submit" name="btn" id="submit" class="btn btn-default" value="Submit Form">-->
                  <button type="submit" id="submit" name="btn" class="btn btn-default" aria-pressed="true">Submit</button>

                </div>
              </div>
                               
            </form> 
		    </div> 
               
      </div> 
    </div>
    </div>
    </center><br><br><br><br><br>
<?php include("footer.php");?>


</body>

</html>