<?php
$insert=false;
if(isset($_POST['name'])){
  //Set connection variables
    $server="pallaviii.mysql.polardb.japan.rds.aliyuncs.com:3306";
    $username="pallavi";
    $password="Pallavi@123456789";
    $database="pallavi";
 
 //create database connection
 $con = mysqli_connect($server,$username,$password,$database);
 
 
 //check for connection success
 if(!$con){
     die("connection to this database failed due to".mysqli_connect_error());
 }
//  echo"success connecting to the DB";
 
//collect post variables
$name=$_POST['name'];
$email=$_POST['email'];
$passwordss=$_POST['password'];

 
$sql= "INSERT INTO logininfo VALUES ('$name','$email','$passwordss');";
 
// echo $sql;
 
//execute query
if($con->query($sql)==true){
    // echo"Successfully inserted";
 
    //flag for successful insertion
    $insert=true;
}
else{
    
    echo"ERROR: $sql <br> $con->error";
}
 
//close the database connection
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.html" class="logo">Educare.</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search courses..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="images/pic-2.jpg" class="image" alt="">
         <h3 class="name">Pallavi Singh</h3>
         <p class="role">Student</p>
         <a href="profile.html" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.html" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-2.jpg" class="image" alt="">
      <h3 class="name">Pallavi Singh</h3>
      <p class="role">studen</p>
      <a href="profile.html" class="btn">view profile</a>
   </div>

   <nav class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.html"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.html"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="teachers.html"><i class="fas fa-chalkboard-user"></i><span>teachers</span></a>
      <a href="contact.html"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>

<section class="form-container">

   <form action="register.php" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
      <p>your name <span>*</span></p>
      <input type="text" name="name" placeholder="enter your name" required maxlength="50" class="box">
      <p>your email <span>*</span></p>
      <input type="email" name="email" placeholder="enter your email" required maxlength="50" class="box">
      <p>your password <span>*</span></p>
      <input type="password" name="password" placeholder="enter your password" required maxlength="20" class="box">
      <input type="submit" value="register new" name="submit" class="btn">
   </form>

</section>















<footer class="footer">

   &copy; copyright @ 2022 by <span></span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>