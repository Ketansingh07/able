<?php

if (isset($_POST['sub'])){

    $connection = mysqli_connect('localhost', 'root', '', 'company');


        if (!$connection) {
            die('database not connected');
        }

    $signup = $_POST['signup'];
    $user_add = $_POST['address'];
    $user_email = $_POST['email'];
    $job_description = $_POST['job_d'];
    $user_con = $_POST['p_number'];
    $insert = "INSERT INTO form(jobtype,jobdescription,placeofwork,email,mobile) VALUES('$signup','$job_description','$user_add','$user_email','$user_con')";
    if (mysqli_query($connection, $insert)) {
        echo "<h1 style='color: green'>Data inserted successfully👍</h1>";
        header("refresh:3,url=Add_on.php");
    } else {
        echo "Data not inserted👎";
    }
}

