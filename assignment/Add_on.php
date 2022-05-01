<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add on page</title>
    <style>
        html {
            overflow-y: hidden !important;
            background-image: url("background.jpg") ;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .addonbutton{
            padding-left: 100px;
            padding-top: 100px;
            height: 7cm;
            width: 7cm;
        }
        .addonbutton_{
            padding-left: 200px;
            text-decoration: none;
            display: inline-block;
            color: #575757;
            font-weight: bold;
            font-size: 18px;
        }

    </style>
</head>
<body>
<figure class="hover-img">
    <a href="Fill_the_form.php">
    <img  class="addonbutton" src="Addonbutton.JPG"/
    </a>
</figure>
<br>
<a class="addonbutton_" href=Fill_the_form.php >Add Job opening</a>
</body>
</html>