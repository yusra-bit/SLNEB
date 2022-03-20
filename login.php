<?php include('templates/header.php');?>

<?php include('connection.php');
session_start();

                 if (isset($_SESSION['id'])) {
                     header("Location:login.php");
                     exit();
                 }

$username = $password ='';
$errorMsg= array('username'=>'',
                 'password'=>'');

                 

if (isset($_POST['login'])){

  if(empty($_POST['username'])){
    $errorMsg['username'] ='username is required <br/>';
}else{
    $username=$_POST['username'];
    
    }

    if(empty($_POST['password'])){
        $errorMsg['password'] ='password is required <br/>';
    }else{
        $password=$_POST['password'];
        
        }
    //fetching all data from db
    $query ="SELECT * FROM signup WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1){
        $row = $result->fetch_assoc();
        $_SESSION['ID'] = $row['id'];
        $_SESSION['USER'] = $row['username'];
        $_SESSION['PASS'] = $row['password'];
    
      header("location:student_hub.php");


    }else{
        $msg="<div class='alert alert-warning'>Invalid Account</div>";
    }
        

}

?>


<html>
    <head>
        <title> Log In Page</title> 
        <link rel="stylesheet" href="css/style0.css">
    </head>
    <body>
        <div class = 'center'> 
            <h1>Log In</h1>
            <form method="POST" action="">
                <?php if(isset($msg)) { echo $msg;} ?>

            <div class="txt_field">
                <input type="text" name="username"  autocomplete="off" required>
                <span></span>
                <label>Username</label>
                      </div>      

            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div> 
            <div class='pass'>
            <a href="forget_password.php">Forgot password?</a>
</div>
            
                <input type='submit' value='Log In' name="login"> 
                <div class="signup_link">
          I Don't Have An Account <a href="register.php">Register</a>
        </div>

            </form>
        </div>
    </body>
</html>

