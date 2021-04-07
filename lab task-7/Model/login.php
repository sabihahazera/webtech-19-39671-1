
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


body {
  background-color: #DEEFFD ;
}

body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
</body>


<?php
$home="home";

?>
<body>


    <?php include './common/header.php';
    include './common/footer.php';?>



<?php 
     session_start() ;
    

 


$username="admin";
$password="admin";

 

if (isset($_POST['uname'])) {
  if ($_POST['uname']==$username && $_POST['pass']==$password) {
    $_SESSION['uname'] = $username;
    header("location:Homepage.php");
  }
  else{
    $msg="username or password invalid";
    echo "<script>alert('uname or pass incorrect!')</script>";
  }

 

} 

 


?>  

 

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  
    
    <fieldset>
      <legend><h2>Login</h2></legend>
    
    <?php if(isset($msg)){?>
        <h4><?php echo $msg;?></h4>
        
      <?php } ?>
     
      User Name:
      <input type="text" name="uname">
           <br><br>
      Password:
      <input type="password" name="pass">
          <br><br>

          <input type="checkbox"  name="remember" value="remembered">
           <label for="remember">Remember Me</label>
           <br><br>

      <?php
echo '<a href="Logged_in_dashboard.php"><input type="submit" name="login" value="Submit"></a>
         <a href="Forgot_Password.php">Forgot Password?</a>';
?>
    

</form>
</body>
</html>
