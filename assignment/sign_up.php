<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up Page</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma-social@1/bin/bulma-social.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
<section >
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <div class="box">
                    <p class="subtitle is-4"> <b>Please Sign up to continue <b></p>
                    <br />
                    <form action="signup.php" method="post">
<!--                        username -->
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input  class="input is-medium" type="text" name="uname" placeholder="Username" required />
                                <span class="icon is-medium is-left">
                                    <i class="fas fa-user"></i>
                    </span>
                            </p>
                        </div>
<!--                        Find Yourself-->
                        <div class="field">
                            <select class="input is-medium" name="signup" placeholder="Sign Up AS" required="required">

                                <option value="SUA">Sign Up As </option>
                                <option value="recruiter">Recruiter</option>
                                <option value="developer">Developer</option>

                            </select>
                            </p>
                        </div>
<!--                        Email -->
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input is-medium" type="email" name="email" placeholder="Email" required/>
                                <span class="icon is-medium is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <br>
                            </p>
                        </div>
<!--                        mobile number-->
                        <div class="field" >
                            <p class="control has-icons-left has-icons-right">
                                <input class="input is-medium" type="text" name="mob" placeholder="Enter Mobile number"  required />
                                <span class="icon is-small is-left">
                                <i class="fas fa-mobile"></i></span>
                            </p>
                        </div>
<!--                        Password -->
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input is-medium" type="password" name="pass" placeholder="Password" required />
                                <span class="icon is-medium is-left">
                                <i class="fas fa-lock"></i>
                            </span>
                            </p>
                        </div>

<!--                        Confirm password -->
                        <div class="field" >
                            <p class="control has-icons-left has-icons-right">
                                <input class="input is-medium" type="password" name="cpass" placeholder="Confirm password" required />
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </p>
                        </div>

                        <button class="button is-block is-info is-large is-fullwidth" type="submit" name="sub">Submit</button>`
                        <a href="index.php">Already Registered ? Log in here</a>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
</body>
</html>