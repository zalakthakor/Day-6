<?php
$connection=mysqli_connect("localhost","root","","db_intern");
if($_POST){
    $name=$_POST['txt1'];
    $gender=$_POST['txt2'];
    $mobile=$_POST['txt3'];
    $q=mysqli_query($connection,"insert into tbl_user(user_name,user_gender,user_mobile)
     values('{$name}','{$gender}','{$mobile}')") or die("Error".mysqli_error($connection));
     if ($q){
         echo "<script>alert('Record Added');</script>";
     }
}
?>
<html>
<body>
<form method="POST">
Name : <input type="text" name="txt1"/></br>
Gender : <select name="txt2">
<option>Male</option>
<option>Female</option>
</select></br>
Mobile No: <input type="number" name="txt3"/>
<input type="submit"/></br>
</form>
</body>
</html>
"<a href='table.php'>Display Record</a>";