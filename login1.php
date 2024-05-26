<?php

include 'header.php';
include 'dbconnect.php';

?>

<div class="container">
    <div class="head" style="text-align:center">
      <h1>Login to Continue</h1>
    </div>
    <form action="login1.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" name="uname" class="form-control" id="uname" aria-describedby="emailHelp" placeholder="Enter Username">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Enter Password">
      </div>
      <!-- <div class="mb-3 form-check"><input type="checkbox" class="form-check-input" id="exampleCheck1"><label class="form-check-label" for="exampleCheck1">Check me out</label></div> -->
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <?php

    if(isset($_POST['submit'])){

        $email = $_POST['uname'];
        $pwd = $_POST['pwd'];

        $query = "SELECT * FROM `loginproject` WHERE email = '$email' AND password = '$pwd' ";
        $run = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($run)> 0 ){
            while ($row = mysqli_fetch_assoc($run)) {
                
                echo "<script>alert('Mubarak howay login hogeya jay ');window.location.href='account.php';</script>";
            }
        }
        else{
            echo "NO WAY ARSH";
        }
    }

  ?>