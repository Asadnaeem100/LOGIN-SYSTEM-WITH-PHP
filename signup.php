<?php

include 'header.php';
include 'footer.php';
include 'dbconnect.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $email = $_POST['email'];
        $password = $_POST['password'];

        //write a Query to Insert a Account
        $sql = "INSERT INTO `loginproject`(`email`, `password`) 
        VALUES ('$email' , '$password')";
        $run = mysqli_query($conn, $sql);

        if($run){
            echo "<script>alert('New Accout has been Created Successfully');window.location.href='account.php';</script>";
        }
        else{
            echo "<script>alert('Something Went Wrong Please Try Again');window.location.href='signup.php';</script>";
        }
    }

?>

<!-- Make a Signup Page to Making a new account -->

<div class="container my-4">
    <h1 style="text-align:center;">Signup to the Project</h1>
    <br>
    <div class="head">
        <form action="#" method="POST">
            <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>