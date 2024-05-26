<?php

// $_SESSION['logging'] = false;
session_start();
include 'header.php';
include 'footer.php';
include 'dbconnect.php';

    // if($_SERVER['REQUEST_METHOD'] == "POST"){

    //     //Making variables
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];

    //     //write a Query to Check Data
    //     $sql = "SELECT * FROM `loginproject` WHERE email = '$email' AND password = '$password' ";
    //     $run = mysqli_query($conn, $sql);

    //     if($run){
    //         echo "<script>alert('Logged in Successfully');window.location.href='account.php';</script>";
    //         // session_start();
    
    //         $_SESSION['logging'] = true;
    //         $_SESSION['useremail'] = $email;
    //     }
    //     else{
    //         echo "<script>alert('Your Email or Password are Wrong');window.location.href='login.php';</script>";
    //     }
    // }
            if(isset($_POST['submit'])){

                $email1 = $_POST['email'];
                $pwd = $_POST['password'];

                $query = "SELECT * FROM `loginproject` WHERE email = '$email1' AND password = '$pwd' ";
                $run = mysqli_query($conn, $query);

                if(mysqli_num_rows($run)>0){
                    while(mysqli_fetch_assoc($run)){
                        
                        echo "<script>alert('Logged In SuccessFully');window.location.href='account.php';</script>";
                        
                        $_SESSION['logging'] = true;
                        $_SESSION['useremail'] = $email1;
                    }
                }
                else{
                    echo "<script>alert('Your Email or Password is Wrong. Please Check your Email or Password.');</script>";
                }
            }
?>


<!-- Make a Login Form -->

<div class="container my-4">
    <div class="head">
        <h1 style="text-align:center;">Login to the Project</h1>
        <br>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>