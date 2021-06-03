<?php
$connection=mysqli_connect("localhost","root","","db_intern");

   if($_POST){
        $name=$_POST['txt1'];
        $email=$_POST['txt2'];
        $mobile=$_POST['txt3'];
        $date=$_POST['txt4'];
        $gender=$_POST['txt5'];
        $address=$_POST['txt6'];
        $area=$_POST['txt7'];
        $hobbie=$_POST['txt8'];
        $city=$_POST['txt9'];
        $bloodgp=$_POST['txt10'];
     $q=mysqli_query($connection,"insert into tbl_student(name,email,mobile,
     date,gender,address,area,hobbie,city,bloodgp)
     values('{$name}','{$email}','{$mobile}','{$date}','{$gender}','{$address}','{$area}','{$hobbie}','{$city}','{$bloodgp}')") or die("Error".mysqli_error($connection));
     if ($q){
         echo "<script>alert('Record Added');</script>";
     }

       
    }

    
?>
<html>
<body style="background-color:powderblue;">
<center><h1 style="font-size:300%">Registration Form</h1></center>
<center><p  style="font-size:150%"> Please fill your details in this form.</p></center>
<form method="POST">
<center>
Name:<br>
<input type="text" name="txt1"></br>
Email:<br>
<input type="text" name="txt2"></br>
Mobile No:<br>
<input type="number"  name="txt3"></br>
Date of Birth:<br>
<input type="Date" name="txt4">
</br>
Gender:<br>
<input type="radio" name="txt5" value="male" checked>male
<input type="radio" name="txt5" value="female" checked>female
<input type="radio" name="txt5" value="other" checked>other
</br>
Address:<br>
<textarea rows= "5" cols "30" type="text" name="txt6">
Enter your address...</textarea></br>
Area:<br>
<input type="text" name="txt7"></br>
Hobbies:<br>
<input type="checkbox" name="txt8" value="Indoor">Indoor
<input type="checkbox" name="txt8" value="Outdoors">Outdoors
<input type="checkbox" name="txt8" value="Other">Other
</br>
<lable for="city">Choose a city:</lable><br>
<select id="city" name="txt9">
<option value="Surat">Surat</option>
<option value="Ahmedabad">Ahmedabad</option>
<option value="Mehsana">Mehsana</option>
<option value="Baroda">Baroda</option>
</select>
</br>
<br>
Blood Group: <br><input type="text" name="txt10"></br>
<br>
<input type="submit" name="submit" value="Submit"/>

</br>
</center>
</form>
</body>
</html>



