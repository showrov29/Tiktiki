<?php 

// session_start();

// if (!isset($_SESSION['email'])){
//     header('Location:login.php');
// }
include '../control/Student_process.php';

?>

<html>  
    <head>   
        <title>  
            Registration Page  
        </title>  
    </head>  
    <body bgcolor="orange">
        <h1 style="margin-left:auto; margin-right:auto; text-align:center;"><u>Student Ragistration Page </u></h1>   
        <form style="margin-left:auto; margin-right:auto; text-align:left;" action="" method="POST" enctype="multipart/form-data">  
        <br> <br>
            <table >
                <tr>
                    <td>
                        First name: 
                    </td>
                    <td>
                        <input type="text" name="firstname" size="15"/> <?php echo $fnameerror ?>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Last name: 
                    </td>
                    <td>
                        <input type="text" name="lastname" size="15"/> <?php echo $lnameerror ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Select Department :
                    </td>
                    <td>
                    <select name="course">
                        <option value="Course">Course</option> 
                        <option value="BCA">BCA</option>
                        <option value="BBA">BBA</option>
                        <option value="B.Tech">B.Tech</option>
                        <option value="MBA">MBA</option> 
                        <option value="MCA">MCA</option>
                        <option value="M.Tech">M.Tech</option> 
                    </select>  <?php echo $courseErr ?>
                   
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender : 
                        
                    </td>
                    <td>
                        <input type="radio" name="gender" value="male"/> Male
                        <?php echo $genderErr ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="radio" name="gender" value="female"/> Female
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                        <input type="radio" name="gender" value="other"/> Other  
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone :
                    </td>
                    <td>
                        <!-- <input type="text" name="country code"  value="+880" size="3"/>    -->
                        <input type="text" name="phone" size="11"/> <?php echo $phoneErr ?> 
                       
                    </td>
                </tr>
                <tr>
                    <td>
                        Upload file:
                    </td>
                    <td>
                        <input type="file" name="image"> <?php echo $fileErr ?>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="text" id="email" name="email"/> <?php echo $emailErr ?>
                        
                    </td>
                </tr>

                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="Password" id="pass" name="pass"> <?php echo $passErr ?>
                        
                    </td>
                </tr>
                
                <tr>
                    <td>
                         Re-type password:
                    </td>
                    <td>
                        <input type="Password" id="repass" name="repass">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="Submit" value="Submit"/> 

                    </td>
                    <td>
                        <input type="reset" name="Reset" value="Reset"/> 

                    </td>

                    <tr>
                    <td>
                        <a href="login.php">Already have an account</a>
                    </td>
                </tr>

                </tr>
            </table>
             
        </form> 
    </body>  
</html> 