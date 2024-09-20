<?php
session_start();
$username=$_SESSION['username'];
include("dbconnect.php");
extract($_POST);
if(isset($btn))
{

	/* $max_qry = mysqli_query($connect, "select max(id) maxid from  officer");
	$max_row = mysqli_fetch_array($max_qry);
	$id=$max_row['maxid']+1; */
		$uqry="INSERT into location(location,creationDate) values('$location', NOW())";

        $res=mysqli_query($connect,$uqry);
		if($res)
		{
            ?>
<script>
    alert("Location Added");
    window.location.href="addlocation.php";
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
<?php include("adminlink.php");?>
<br><br><br><center>
    <h1>Add Location</h1>
<div class="container"> <!-- open container -->
       
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
                     <input id="name" type="text" class="form-control" placeholder="" name="location" required>

                   </div>
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
    </center><br><br><br><br><br>
    <br><br><br><center>
    <h1>Locations</h1><br><br><br><br>
    <div class="container">
            <div class="row">
			<div class="table-responsive">
				<center>
			   <div class="col-xs-1 col-lg-12">
                <table class="table table-stripped" align="center">
                    <tr>
                        <th scope="col-xs-1">S.No</th>
                        <th scope="col-xs-1">Location</th>
                        <th scope="col-xs-1">Added Date</th>
						

                    </tr>
                    <?php



  $i=0;
			$qs=mysqli_query($connect,"select * from location");
			while($rs=mysqli_fetch_array($qs))
			{
			$i++;
			?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $rs['location']; ?></td>
                <td><?php echo $rs['creationDate']; ?></td>
               
                



            </tr>
            <?php
			}
			?>
                </table>
				</div>

			   </center>
		</div>

		</div>
            </div>
        </div>

</center><br><br><br><br><br><br><br><br>
<?php include("footer.php");?>


</body>

</html>