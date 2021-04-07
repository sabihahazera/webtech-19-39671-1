<?php  
//session is a used to manage information across difference page
session_start();  //to start session.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    <style>

body {
  background-color: #CFE5F7;
}

    .welcome {

        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans';
        font-size: 50px;
        margin-top: 10rem;

    }

    .main {
        display: flex;

        background-image: pix.png;
    }
    </style>
</head>

<body>
    <?php include './common/header.php';
    include './common/footer.php';
    ?>
    <div class="main">
        <div class="centre">
            <?php 
    include './common/Account.php';
    ?>
        </div>
        <div class="right">
            <div class="welcome">
                <?php  
                        

                        if(isset($_SESSION["Sname"])){             
                        echo "Welcome ". $_SESSION["Sname"] ."<br>";//"using session from registration.php
                            }
                            else{
                                echo "<i> <b>Bachelor home </b> </i> <br>
                                <dd><i>where you find your perfect place</dd></i>";
                            }
                    ?>
            </div>
        </div>
    </div>

</body>

</html>