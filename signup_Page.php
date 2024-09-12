<?php 
$name='';
$fname='';
$dob='';
$adds='';
$con_number='';
$what_number='';
$email='';
$password='';
$con_password='';
$con=mysqli_connect("localhost","root","","data_store");
if(isset($_POST["sub"])){
    $name=$_POST["name"];
    $fname=$_POST["father_name"];
    $dob=$_POST["date_b"];
    $adds=$_POST["address"];
    $con_number=$_POST["number"];
    $what_number=$_POST["number_w"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $con_password=$_POST["con_password"];
  
} 
$sql="insert into  store_data(name,F_name,dob,adds,num,num_w,email,password,c_password) values(' $name','$fname','$dob','$adds','$con_number','$what_number','$email','$password','$con_password')";
$que=mysqli_query($con,$sql);
if($que){
    echo "<h1>'connection is ok'</h1>";
}
else{
    echo "<h1>'connection is not ok'</h1>";

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup_page.css">
    <title>Sign Up Page</title>
</head>

<body>
    <hr><br>
    <div class="sign-up">
        
        <h1>Sign Up</h1>
        <h3>It's free only take a minute</h3>
        <form  action="" method="POST">
            <label>Name :</label>
            <input type="text" name="name" required placeholder="Name">

            <!---<label>Last Name :</label>
            <input type="text" name="" required placeholder="Last name">
            --->

            <label>Father's Name :</label>
            <input type="text" name="father_name" required placeholder="Father's name">


            

         <!---
            <label name="gender">Gender :
               <input class="check" type="checkbox" name="" required>Male
               <input class="check" type="checkbox" name="" required>Female
               <input class="check" type="checkbox" name="" required>Others
            </label>

         --->
            <label>Date of Birth :</label>
            <input type="date" name="date_b" required placeholder="Date of Birth">


            <label>Full Address  :</label>
            <textarea class="add" type="text" name="address" required placeholder="write your address here "></textarea>


            <div>
                
                <label>Contract Number</label>
                <input type="number" name="number" required placeholder="contract Number">

                <label>WhatApps Number</label>
                <input type="number" name="number_w" required placeholder="WhatApps Number">

            </div>

            <label>email</label>
            <input type="email" name="email" required placeholder="email here">

            <label>password</label>
            <input type="password" name="password" required placeholder="password here">

            <label>confirm password</label>
            <input type="password" name="con_password" required placeholder="password here">

            <input type="submit" name="sub" value="submit">



        </form>
        <p>By clicking the sign up button,you agree t us<br><a href="#">  Terms & condition</a> and
            <a href="#" policy Privacy></a>
        </p>
        <p>Already Have an account ?<a href="Login_page.php">Log in here</a></p>
        
    </div>


</body>

</html>