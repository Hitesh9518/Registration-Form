<?php
    require 'connection.php';

    $id = $_GET['id'];
    
    $result = mysqli_query($con,"select * from company where id='$id'");

    if(mysqli_num_rows($result) > 0){
        while($row=mysqli_fetch_assoc($result)){
            $hobbies= explode(",",$row['hobbies']);
?>
    <form method="POST">
            <table>
                <tr>
                    <!-- <td>Enter Id</td> -->
                    <td><input type="hidden" name="id" value="<?php echo $row['id'];?>"></td>
                </tr>
                <tr>
                    <td>Enter Your First Name</td>
                    <td><input type="text" name="fname" value="<?php echo $row['fname'];?>"></td>
                </tr>
                <tr>
                    <td>Enter Your Middle Name</td>
                    <td><input type="text" name="mname" value="<?php echo $row['mname'];?>"></td>
                </tr>
                <tr>
                    <td>Enter Your Last Name</td>
                    <td><input type="text" name="lname" value="<?php echo $row['lname'];?>"></td>
                </tr>
                <tr>
                    <td>Enter Your Date of Birth</td>
                    <td><input type="date" name="dob" value="<?php echo $row['dob'];?>"></td>
                </tr>
                <tr>
                    <td>Select Your Gender</td>
                    <td><input type="radio" name="gender" value="Male"
                    <?php
                        if($row['gender'] == "Male"){
                            echo "checked";
                        }
                    ?>>Male
                    <input type="radio" name="gender" value="Female"
                    <?php
                        if($row['gender'] == "Female"){
                            echo "checked";
                        }
                    ?>>Female</td>
                </tr>
                <tr>
					<td>Select Your Hobbies</td>
					<td><input type="checkbox" name="hobbies[]" value="Reading"
                    <?php
                        if(in_array("Reading",$hobbies)){
                            echo "checked";
                        }
                    ?>>Reading
					<input type="checkbox" name="hobbies[]" value="Cycling"
                    <?php
                        if(in_array("Cycling",$hobbies)){
                            echo "checked";
                        }
                    ?>>Cycling</td>
				</tr>
                <tr>
                    <td>Enter Your Email</td>
                    <td><input type="email" name="email" value="<?php echo $row['email'];?>"></td>
                </tr>
                <tr>
                    <td>Enter Your Mobile No</td>
                    <td><input type="number" name="mobile" value="<?php echo $row['mobile'];?>"></td>
                </tr>
                <tr>
                    <td>Enter Your Address</td>
                    <td><textarea col="5" row="2" name="address" value=""><?php echo $row['address'];?></textarea></td>
                </tr>
                <tr>
					<td>Select Your City</td>
					<td><select name="city" id="">
                    <option value="" disabled selected>--Select--</option>
                        <option value="Surat" 
                        <?php
                        if($row['city'] == "Surat"){
                            echo "selected";
                        }
                    ?>>Surat</option>
                        <option value="Vadodara" 
                        <?php
                        if($row['city'] == "Vadodara"){
                            echo "selected";
                        }
                    ?>>Vadodara</option>
                        <option value="Indore" 
                        <?php
                        if($row['city'] == "Indore"){
                            echo "selected";
                        }
                    ?>>Indore</option>
                        <option value="Pune"
                        <?php
                        if($row['city'] == "Pune"){
                            echo "selected";
                        }
                    ?>>Pune</option>
                        <option value="Jaipur"
                        <?php
                        if($row['city'] == "Jaipur"){
                            echo "selected";
                        }
                    ?>>Jaipur</option>
                    </select></td>
				</tr>
                <tr>
					<td>Select Your State</td>
					<td><select name="state" id="">
                    <option value="" disabled selected>--Select--</option>
                        <option value="Gujarat"
                        <?php
                        if($row['state'] == "Gujarat"){
                            echo "selected";
                        }
                    ?>>Gujarat</option>
                        <option value="Rajasthan"
                        <?php
                        if($row['state'] == "Rajasthan"){
                            echo "selected";
                        }
                    ?>>Rajasthan</option>
                        <option value="Madhya Pradesh"
                        <?php
                        if($row['state'] == "Madhya Pradesh"){
                            echo "selected";
                        }
                    ?>>Madhya Pradesh</option>
                        <option value="Maharashtra"
                        <?php
                        if($row['state'] == "Maharashtra"){
                            echo "selected";
                        }
                    ?>>Maharashtra</option>
                    </select></td>
				</tr>
                <tr>
					<td>Select Your Country</td>
					<td><select name="country" id="">
                    <option value="" disabled selected>--Select--</option>
                        <option value="India"
                        <?php
                        if($row['country'] == "India"){
                            echo "selected";
                        }
                    ?>>India</option>
                        <option value="Australia"
                        <?php
                        if($row['country'] == "Australia"){
                            echo "selected";
                        }
                    ?>>Australia</option>
                        <option value="Russia"
                        <?php
                        if($row['country'] == "Russia"){
                            echo "selected";
                        }
                    ?>>Russia</option>
                        <option value="Canada"
                        <?php
                        if($row['country'] == "Canada"){
                            echo "selected";
                        }
                    ?>>Canada</option>
                    </select></td>
				</tr>
                <tr>
                    <td>Enter Your Pincode</td>
                    <td><input type="number" name="pincode" value="<?php echo $row['pincode'];?>"></td>
                </tr>
                <tr>
                    <td>Enter Your Password</td>
                    <td><input type="password" name="password" value="<?php echo $row['password'];?>"></td>
                </tr>
                <tr>
                    <td>Enter Your Confirm Password</td>
                    <td><input type="password" name="cpassword" value="<?php echo $row['password'];?>"></td>
                </tr>
            </table>
            <button name="update">Update</button>
        </form>
        <?php
        }
    }?>

<?php
    if(isset($_POST['update'])){
        // $id=$_POST['id'];
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
                $password = md5($_POST['password']);
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
                $cpassword = md5($_POST['cpassword']);
              } 
        }

        if($password == $cpassword && $password != ""){

            $update = "UPDATE company SET fname = '$fname', mname = '$mname', lname='$lname', dob = '$dob', gender = '$gender', hobbies = '$hobbies', email = '$email', mobile = '$mobile', address = '$address', city = '$city', pincode = '$pincode', password = '$password' WHERE id = '$id'";

            mysqli_query($con,$update);

            echo "<script> alert('Updated...'); </script>";

            echo '<script>window.location.href="add.php";</script>';
        }
        else{
            echo "<script> alert('Password And Confirm Password Are Not Match...'); </script>";
        }
    }
  ?>