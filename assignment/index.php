<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
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
                    <p class="subtitle is-4"> <b>Please login to proceed.<b></p>
                    <br />
                    <form action="signin.php" method="post">
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input is-medium" type="email" name="username" placeholder="Email" />
                                <span class="icon is-medium is-left">
                      <i class="fas fa-envelope"></i>
                    </span>
                            </p>
                        </div>
                        <div >
                            <p class="control has-icons-left">
                                <input class="input is-medium" type="password" name="password" placeholder="Password" />
                                <span class="icon is-small is-left">
                                <i class="fas fa-lock"></i>
                    </span>
                            </p>
                        </div>

                        <span class="icon is-medium is-right">
                    </span>
<!--                        <a class="meow" href="#">Forgot Password ?</a> &nbsp;-->
                        <button class="button is-block is-info is-large is-fullwidth" type="submit" name="sub">Login</button><br />
                        <a href="sign_up.php">New user ? Sign Up here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>