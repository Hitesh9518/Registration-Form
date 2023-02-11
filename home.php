<?php
    require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <br>
        <h2>Welcome Our Company</h2>
        <br>

        <a href="add.php"><button>Manage Data's</button></a>
        <br><br>

        <form method="POST">
            <input type="text" name="search">
            <input type="date" name="dob">
            <button name="submit">Submit</button>
        </form>
        <br><br>
        <?php
     echo "<table border='1'>";

     if(isset($_POST['submit'])){
        $search=$_POST['search'];
        $dob=$_POST['dob'];
        $sql="SELECT * FROM company WHERE company.fname like '%$search%' or company.mname like '%$search%' or company.lname like '%$search%' ";
        $result = mysqli_query($con,$sql);
        if($result){
     echo "<tr>
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
     </tr>";

    //  $result = mysqli_query($con,"select * from company");
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
         echo "</tr>";
     }
    }
}
?>
    </table>
    </center>
</body>
</html>