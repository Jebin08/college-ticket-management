<?php
session_start();
include("dbconnect.php");
extract($_POST);
$msg="";
if(isset($btn))
{
$qry=mysqli_query($connect,"select * from admin where username='$username' && password='$password'");
$num=mysqli_num_rows($qry);
	if($num==1)
	{
	$_SESSION['username']=$username;
    ?>
    <script>
        alert("Entered To Home a Admin Page");
        window.location.href="admin.php";
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
    <h1>Admin Login</h1>
<form action="" method="post">
  <div class="row">
    <input type="text" name="username" autocomplete="off" placeholder="Username">
  </div>
  <div class="row">
   <input type="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class=""name="btn">Login</button>
</form>
</center>
<?php include("footer.php");?>

</body>

</html>