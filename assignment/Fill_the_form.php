<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fill the form</title>
    <link rel="stylesheet" href="specificity.css">
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>
<body>
    <form action="form.php" method="post" name="role" class="container">
        <h1 class="main_heading">Job Information</h1>
        <p >Job Type *:
            <select name="signup"  required>
                <option value="">--select Job Role-- </option>
                <option value="Application_analyst">Application analyst</option>
                <option value="Applications_developer">Applications developer</option>
                <option value="Business">Business analyst</option>
                <option value="Cyber">Cyber security analyst</option>
                <option value="analyst">Data analyst</option>
                <option value="Forensic">Forensic computer analyst</option>
                <option value="Games">Games developer</option>
                <option value="professional">IT sales professional</option>
                <option value="trainer">IT trainer</option>
                <option value="Machine">Machine learning engineer</option>
                <option value="Nanotechnologist">Nanotechnologist</option>
                <option value="Network">Network engineer</option>
                <option value="Penetration">Penetration tester</option>
                <option value="Software_engineer">Software engineer</option>
                <option value="Systems_analyst">Systems analyst</option>
                <option value="UX">UX designer</option>
                <option value=">Web_designer">Web designer</option>
                <option value="Web_developer">Web developer</option>
                <option value="Telecommunications">Telecommunications researcher</option>
                <option value="" > </option>
            </select>
        <p name="job_d" >Job Description *: <em class="small">(We will populate a standard job description that you can edit)</em>  <textarea  name="job_d" cols="100" rows="5" required></textarea></p>
        <p name="address"> Place of Work *: <textarea name="address"  cols="100" rows="5" required></textarea></p>
        <p>Email *: <input type="email" name="email" id="email" required></p>
        <p class="num">Phone no for coordination *: <em>(Your phone no. is extremely safe with us. It is only shared with one people in the team.)</em> <br>
            <input type="number"  name="p_number" required></p>

            <input type="submit" value="Submit"  name="sub">
        </p>
    </form>

</div>
</body>
</html>