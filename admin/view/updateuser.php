<?php
include ("../control/update_control.php");
?>
<html>

<body>


<form action="" method="POST" enctype="multipart/form-data">
Firstname        
<input type="text" name="firstname" value="<?php echo $fname; ?>" size="15"/><br> <br>  
 
 Lastname:       
<input type="text" name="lastname" value="<?php echo $lname; ?>" size="15"/> <br> <br>  
  
Password:       
<input type="password" name="password" value="<?php echo $lname; ?>" size="15"/> <br> <br>  
  
   
Course :  
   
<select name="course">  
<option value="Course">Course</option>  
<option value="BCA" <?php 
if($course=="BCA")
echo "selected"; ?> >BCA</option>  
<option value="BBA" <?php 
if($course=="BBA")
echo "selected"; ?>>BBA</option>  
<option value="B.Tech" <?php 
if($course=="B.Tech")
echo "selected"; 
 ?>>B.Tech</option>  
<option value="MBA" <?php 
if($course=="MBA")
echo "selected"; 
?>>MBA</option>  
<option value="MCA" <?php
if($course=="MCA")
echo "selected"; 
?>>MCA</option>  
<option value="M.Tech" <?php 
if($course=="M.Tech")
echo "selected";
?>>M.Tech</option>  
</select>  
  
<br>  
<br>  
   
Gender :  
<br>  
<input type="radio" name="gender" value="male" 
<?php
if($gender=="male")
echo "checked";
?>
/> Male <br>  
<input type="radio" name="gender" value="female"
<?php
if($gender=="female")
echo "checked";
?>
/> Female <br>  
<input type="radio" name="gender" value="other"
<?php
if($gender=="other")
echo "checked";
?>
/> Other  
<br>  
<br>  
  
<br>  
<input type="file" name="image">
<img src="<?php echo $file; ?>" width="100" height="100">

<br> <br>  

<input type="submit" name="update" value="Update">
</form>
</body>
</html>