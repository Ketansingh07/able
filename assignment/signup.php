<?php
if (isset($_POST['sub'])){
    $username = $_POST['uname'];
    $signup = $_POST['signup'];
    $email = $_POST['email'];
    $mobile = $_POST['mob'];
    if ($_POST['pass'] == $_POST['cpass']){
            $connection = mysqli_connect('localhost', 'root', '', 'company');
            if (!$connection) {
                die('database not connected');
            }

        $password = $_POST['pass'];

        $insert = "INSERT INTO signup(username,signup,email,mobile,password) VALUES ('$username','$signup','$email','$mobile','$password')";
        if (mysqli_query($connection,$insert)){
            ?>
            <script>
                alert("Data inserted successfully");
                // redirect in login page

            </script>

            <?php
            header('location:./index.php');
        }
        else{
            ?>
            <script>
                alert("Data Not Inserted Properly");
            </script>
            <?php

        }

    }

}

