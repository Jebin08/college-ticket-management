<?php
session_start();
$username=$_SESSION['username'];
include("dbconnect.php");
extract($_REQUEST);
?>
	
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Ticket</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
</head>
<body>

<div style="margin-left:50px;">
 <form name="updateticket" id="updateticket" method="post"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php
$qry = mysqli_query($connect, "SELECT * FROM tblcomplaints WHERE complaintNumber='$cid'");
$r = mysqli_fetch_array($qry)
?>
    <tr height="50">
      <td colspan="2" class="fontkink2" style="padding-left:0px;"><div class="fontpink2"> <b>Ticket !</b></div></td>
      
    </tr>
    <tr height="30">
      <td  class="fontkink"><?php echo $r['complaintDetails'];?></td>
    </tr>
   
</table>
 </form>
</div>

</body>
</html>

     