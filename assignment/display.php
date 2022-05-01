<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $ser_name = "localhost";
    $ser_user = "root";
    $ser_pass = "";
    $connection_check = mysqli_connect($ser_name, $ser_user, "", 'company');

    if (!$connection_check) {

        die("Problem in connection" . mysqli_connect_error());
    }

    if (isset($_POST['submit-btn'])) {
        if (isset($_POST['display-btn'])) {
            $display_query = "SELECT * from user";
            $data = mysqli_query($connection_check, $display_query);
            if (mysqli_num_rows($data) > 0) {
                echo "<table>
              <tr><th>job_type</th><th>job_description</th><th>place_of_work</th><th>email</th></tr>     ";
                while ($row = mysqli_fetch_array($data)) {
                    echo "<form action='form.php' method='post'>";
                    echo "<tr>";
                    echo "<td>" . "<input type='text' name='jobtype' value =$row[jobtype]>" . "</td>";
                    echo "<td>" . "<input type='text' name='jobdescription' value =$row[jobdescription]>" . "</td>";
                    echo "<td>" . "<input type='text' name='placeofwork' value =$row[placeofwork]>" . "</td>";
                    echo "<td>" . "<input type='text' name='email' value='email'>" . "</td>";
                    echo "</tr>";
                    echo "</form>";
                }

            } else {
                echo "<h1 style='color: red'>No record found</h1>";
                header("refresh:5,url=form.php");
            }
        }
    }
}
?>
</body>
</html>