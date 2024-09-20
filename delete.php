<?php
include("dbconnect.php");
$id=$_REQUEST['id'];
$s="delete from tblcomplaints where complaintNumber='$id'";
$f=mysqli_query($connect, $s);
if($f)
{
    ?>
    <script language="javascript">
        alert("success");
        window.location.href("manage.php");

        </script>
        <?php
}

?>