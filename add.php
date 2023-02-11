<?php

require 'connection.php';
    
    $fnameErr = $mnameErr = $lnameErr = $dobErr = $genderErr = $hobbiesErr = $emailErr = $mobileErr = $addressErr = $cityErr = $stateErr = $countryErr = $pincodeErr = $passwordErr = $cpasswordErr = "";
    $fname = $mname = $lname = $dob = $gender = $hobbies = $email = $mobile = $address = $city = $state = $country = $pincode = $password = $cpassword = "";

?>
<?php

    if(isset($_POST['insert'])){
    
        if (empty($_POST["fname"])) {  
            $fnameErr = "First Name is Required";  
        } else {  
            $fname = $_POST["fname"];  
                if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {  
                    $fnameErr = "Only alphabets and white space are allowed";  
                } else {  
                    $fname=$_POST['fname'];  
                }   
        }

        if (empty($_POST["mname"])) {  
            $mnameErr = "Middle Name is Required";  
        } else {  
            $mname =$_POST["mname"];  
                if (!preg_match("/^[a-zA-Z ]*$/",$mname)) {  
                    $mnameErr = "Only alphabets and white space are allowed";  
                }else {  
                    $mname=$_POST['mname'];  
                }  
        }

        if (empty($_POST["lname"])) {  
            $lnameErr = "Last Name is Required";  
        } else {  
            $lname =$_POST["lname"];  
                if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {  
                    $lnameErr = "Only alphabets and white space are allowed";  
                }else {  
                    $lname=$_POST['lname'];  
                }    
            }

        if (empty($_POST["dob"])) {  
            $dobErr = "Date Of Birth is Required";  
        }else{
            $dob=$_POST['dob'];
        }

        if (empty ($_POST["gender"])) {  
            $genderErr = "Gender is required";  
        } else {  
                $gender = $_POST["gender"];  
        } 
        
        if (!isset($_POST['hobbies'])){  
            $hobbiesErr = "Please Select Your Hobbies.";  
        } else {  
            $hobbies= implode(",",$_POST['hobbies']); 
        }

        if (empty($_POST["email"])) {  
            $emailErr = "Email is required";  
        } else {  
                $email = $_POST["email"];  
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
                    $emailErr = "Invalid email format";  
                }else{
                    $email = $_POST['email'];
                  }
        }  

        if(empty($_POST['mobile'])){
            $mobileErr="Moblie no is required";
        }else {  
            $mobile = ($_POST["mobile"]);    
            if(!preg_match ("/^[0-9]*$/", $mobile )){  
                $mobileErr = "Only numeric value is allowed.";  
            }elseif(strlen ($mobile) != 10) {  
                $mobileErr = "Moblie no must contain 10 digits.";  
            }else{
                $mobile=$_POST['mobile'];
            }
        }  

        if (empty($_POST['address'])){  
            $addressErr = "Please Enter Your Address.";  
        } else {  
                $address = $_POST["address"];  
        }

        if (!isset($_POST['city'])){  
            $cityErr = "Please Select Your City.";  
        } else {  
                $city = $_POST["city"];  
        }

        if (!isset($_POST['state'])){  
            $stateErr = "Please Select Your State.";  
        } else {  
                $state = $_POST["state"];  
        }

        if (!isset($_POST['country'])){  
            $countryErr = "Please Select Your City.";  
        } else {  
                $country = $_POST["country"];  
        }

        if (empty($_POST["pincode"])) {  
            $pincodeErr = "Pincode no is required";  
        } else {  
            $pincode = $_POST["pincode"];  
            if (!preg_match ("/^[0-9]*$/", $pincode) ) {  
            $pincodeErr = "Only numeric value is allowed.";  
            }  
            elseif (strlen ($pincode) != 6) {  
            $pincodeErr = "Pincode no must contain 6 digits.";  
            }else{
                $pincode = $_POST['pincode'];
              } 
        }

        if (empty($_POST["password"])) {  
            $passwordErr = "Password is required";  
        } else {  
            $password =$_POST["password"];  
            if (!preg_match ("/^[0-9]*$/", $password) ) {  
            $passwordErr = "Only numeric value is allowed.";  
            }  
            elseif (strlen ($password) != 8) {  
            $passwordErr = "Mobile no must contain 8.";  
            }else{
                $password = $_POST['password'];
              }  
        }

        if (empty($_POST["cpassword"])) {  
            $cpasswordErr = "Confirm Password no is required";  
        } else {  
            $cpassword = $_POST["cpassword"];  
            if (!preg_match ("/^[0-9]*$/", $cpassword) ) {  
            $cpasswordErr = "Only numeric value is allowed.";  
            }  
            elseif (strlen ($cpassword) != 8) {  
            $cpasswordErr = "Mobile no must contain 8.";  
            }else{
                $cpassword = $_POST['cpassword'];
              } 
        }

        // if($fnameErr != "" && $mnameErr != "" && $lnameErr != "" && $dobErr != "" &&$genderErr != "" && $hobbiesErr != "" && $emailErr != "" && $mobileErr != "" && $addressErr != "" && $cityErr != "" && $stateErr != "" && $countryErr != "" && $pincodeErr != "" && $passwordErr != "" && $cpasswordErr != "") {

        // $fname=$_POST['fname'];
        // $mname=$_POST['mname'];
        // $lname=$_POST['lname'];
        // $dob=$_POST['dob'];
        // $gender=$_POST['gender'];
        // $hobbies= implode(",",$_POST['hobbies']);
        // $email=$_POST['email'];
        // $mobile=$_POST['mobile'];
        // $address=$_POST['address'];
        // $city=$_POST['city'];
        // $state=$_POST['state'];
        // $country=$_POST['country'];
        // $pincode=$_POST['pincode'];
        // $password=$_POST['password'];
        // $cpassword=$_POST['cpassword'];

                if($password == $cpassword && $password != ""){
                    $insert = "insert into company values(NULL,'$fname','$mname','$lname','$dob','$gender','$hobbies','$email','$mobile','$address','$city','$state','$country','$pincode','$password');";

                    mysqli_query($con,$insert);

                    echo "<script> alert('You Are Registered...'); </script>";
                }
                else{
                    echo "<script> alert('Password And Confirm Password Are Not Match...'); </script>";
                }
        // }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>  
        .error {color: #FF0001;}  
    </style>
</head>
<body>
    <center>
        <br>
        <h2>Manage Data's</h2>
        <br>
        <form method="POST" >
            <table>
                <tr>
                    <td>Enter Your First Name</td>
                    <td><input type="text" name="fname">
                        <span class="error"><?php echo $fnameErr; ?></span></td>
                </tr>
                <tr>
                    <td>Enter Your Middle Name</td>
                    <td><input type="text" name="mname">
                    <span class="error"><?php echo $mnameErr; ?></span></td>
                </tr>
                <tr>
                    <td>Enter Your Last Name</td>
                    <td><input type="text" name="lname">
                        <span class="error"><?php echo $lnameErr; ?></span></td>
                </tr>
                <tr>
                    <td>Enter Your Date of Birth</td>
                    <td><input type="date" name="dob">
                    <span class="error"><?php echo $dobErr; ?></span></td>
                </tr>
                <tr>
                    <td>Select Your Gender</td>
                    <td><input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <span class="error"><?php echo $genderErr; ?></span></td>
                </tr>
                <tr>
					<td>Select Your Hobbies</td>
					<td><input type="checkbox" name="hobbies[]" value="Reading">Reading
					<input type="checkbox" name="hobbies[]" value="Cycling">Cycling
                    <span class="error"><?php echo $hobbiesErr; ?></span></td>
				</tr>
                <tr>
                    <td>Enter Your Email</td>
                    <td><input type="email" name="email">
                    <span class="error"><?php echo $emailErr; ?></span></td>
                </tr>
                <tr>
                    <td>Enter Your Mobile No</td>
                    <td><input type="number" name="mobile">
                    <span class="error"><?php echo $mobileErr; ?></span></td>
                </tr>
                <tr>
                    <td>Enter Your Address</td>
                    <td><textarea col="5" row="2" name="address"></textarea>
                    <span class="error"><?php echo $addressErr; ?></td>
                </tr>
                <tr>
					<td>Select Your City</td>
					<td><select name="city" id="">
                    <option value="" disabled selected>--Select--</option>
                        <option value="Surat">Surat</option>
                        <option value="Vadodara">Vadodara</option>
                        <option value="Indore">Indore</option>
                        <option value="Pune">Pune</option>
                        <option value="Jaipur">Jaipur</option>
                    </select>
                    <span class="error"><?php echo $cityErr; ?></td>
				</tr>
                <tr>
					<td>Select Your State</td>
					<td><select name="state" id="">
                        <option value="" disabled selected>--Select--</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                    </select>
                    <span class="error"><?php echo $stateErr; ?></td>
				</tr>
                <tr>
					<td>Select Your Country</td>
					<td><select name="country" id="">
                        <option value="" disabled selected>--Select--</option>
                        <option value="India">India</option>
                        <option value="Australia">Australia</option>
                        <option value="Russia">Russia</option>
                        <option value="Canada">Canada</option>
                    </select>
                    <span class="error"><?php echo $countryErr; ?></td>
				</tr>
                <tr>
                    <td>Enter Your Pincode</td>
                    <td><input type="number" name="pincode">
                    <span class="error"><?php echo $pincodeErr; ?></td>
                </tr>
                <tr>
                    <td>Enter Your Password</td>
                    <td><input type="password" name="password">
                    <span class="error"><?php echo $passwordErr; ?></td>
                </tr>
                <tr>
                    <td>Enter Your Confirm Password</td>
                    <td><input type="password" name="cpassword">
                    <span class="error"><?php echo $cpasswordErr; ?></td>
                </tr>
            </table>
            <input type="submit" name="insert">
            <a href="home.php"><input type="button" value="Back To Home"></a>
        </form>
        <br>
        <?php
            echo "<table border='1'>
            <tr>
            <th>First Name </th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Hobbies</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>Pincode</th>
            <th>Password</th>
            <th>Operations</th>
            </tr>";

            $result = mysqli_query($con,"select * from company");
            while($row=mysqli_fetch_assoc($result)){

                echo "<tr>";
                echo "<td>".$row['fname']."</td>";
                echo "<td>".$row['mname']."</td>";
                echo "<td>".$row['lname']."</td>";
                echo "<td>".$row['dob']."</td>";
                echo "<td>".$row['gender']."</td>";
                echo "<td>".$row['hobbies']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['mobile']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['city']."</td>";
                echo "<td>".$row['state']."</td>";
                echo "<td>".$row['country']."</td>";
                echo "<td>".$row['pincode']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>"."<a href ='update.php?id=$row[id]'><button type='button'>Edit</button></a>".' '."<a href ='delete.php?id=$row[id]'><button type='button'>Delete</button></a>"."</td>";
            }
        ?></table>
    </center>
</body>
</html>