<?php
include('connection.php');

$username = $email = $password ='';
$errorMsg= array('username'=>'',
                 'email'=>'',
                 'password'=>'');

if(isset($_POST['signup'])){

   if(empty($_POST['username'])){
       $errorMsg['username'] ='Username is required <br/>';
   }else{
       $username=$_POST['username'];
       
       }
   
   if(empty($_POST['email'])){
    $errorMsg['email'] = 'An email is required <br/>';
  }else{
     $email = $_POST['email'];
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $errorMsg['email'] = 'An email must be a valid email address';
     }
  }

if(empty($_POST['password'])){
    $errorMsg['password'] ='password is required <br/>';
}else{
    $password=$_POST['password'];
    
    }


if(array_filter($errorMsg)){
}else{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query ="INSERT INTO signup(username,email,password) VALUES('$username', '$email', '$password')";
    if(mysqli_query($conn, $query)){
      //success
        echo "<meta http-equiv='refresh' content='4'>";
        $msg="<div class='alert alert-success'>Account Registered Successfully.</div>";
     // header('location:login.php');
    

       //window.location.reload();
       

    } else{
        echo 'query error:' .mysqli_error($conn);
    }
    
    
}

}

?>


<?php include ('templates/header.php'); ?>

<html>
    <head>
        <title>Sign Up</title> 
        <link rel="stylesheet" href="css/style0.css">
    </head>
    <body> 
        <div class = 'center'> 
            <h1>Register</h1>
            <form method="POST" action="">
                <?php if(isset($msg)) { echo $msg; } ?>
            <div class="txt_field">
                 <input type="text" name ="username" required autocomplete="off"> 
                 <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                 <input type="text" name ="email" required autocomplete="off">
                 <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                 <input type="password" name ="password" required>
                 <span></span>
                <label>Password</label>
            </div>
           
                <input type='submit' name="signup" value='Register'> 
                <div class="signup_link">
          Already Have An Account <a href="login.php">Log In</a>
        </div>

            </form>
        </div>
    </body>
</html>