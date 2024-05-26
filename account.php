<?php

session_start();

if(!isset($_SESSION['logging']) && $_SESSION['logging'] != true){
    header("location:login.php");
}

include 'header.php';
include 'footer.php';
include 'dbconnect.php';

// $_SESSION['useremail'] = "Asad Naeem";

// $_SESSION['useremail'] = $email;
?>

<div class="container">
    <div class="head">
    <div class="alert alert-success my-3" role="alert">
      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['useremail']; ?></h4>
      <p>Hey, How are you doing? You are Logged in as <?php echo $_SESSION['useremail']; ?>
      <hr>
      <p class="mb-0">Whenever you need to, be sure Logged out 
        <a href="logout.php" class="btn btn-outline-danger">Logout</a>
      </p>
    </div>
    </div>
</div>