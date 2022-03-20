<?php
include('connection.php');
if(isset($_GET['token'])){
    $token = mysqli_real_escape_string($conn, $_GET['token']);
    $query="SELECT * FROM password_reset where token='$token'";
    $run=mysqli_query($conn, $query);
    if(mysqli_num_rows($run)>0){
        $row=mysqli_fetch_array($run);
        $token=$row['token'];
        $email=$row['email'];

    }else{
        header('Location:login.php');
    }

}
if (isset($_POST['reset'])) {
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
    //$option=['cost'=>11];
   //$hashed = password_hash($password,PASSWORD_BCRYPT,$option);
    if($password!=$confirmpassword){
        $msg="<div class='alert alert-danger'>Sorry, password didnt matched</div>";
    }elseif(strlen($password)<6){
        $msg="<div class='alert alert-warning'>Password must be 6 characters long.</div>";

    }else {
        $query="update signup set password='$password' where email='$email'";
        mysqli_query($conn, $query);
        $query="delete from password_reset where email='$email'";
        mysqli_query($conn, $query);
        $msg="<div class='alert alert-success'>Password Updated.</div>";

    }


}

?>
<?php include ('templates/header.php'); ?>

<html>
    <head>
        <title>Reset Password</title>
        <link rel="stylesheet" href="css/style0.css">
    </head>
    <body>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h4 class="text-center">Reset Password</h4>

                        <form method="POST" action="#">
                            <div class="form-group">
                                <label>email</label>
                                <input type="text" name="email" value="<?php echo $email; ?>" placeholder="" readonly class="form-control"autocomplete="off">
                                
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" value="" placeholder="" class="form-control"autocomplete="off">
                                                               
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="confirmpassword" value="" placeholder="" class="form-control"autocomplete="off">
                                                               
                            </div>
                            <br>
                            <?php if(isset($msg)){echo $msg;} ?>


                            <input type="submit" name="reset" value="Reset Password" class="btn btn-dark">
                            <br>
</br>
                            
                            <center><a class="btn btn-dark" href="login.php">Back To Login</a></center>
                        </form>
                    </div>
                    <div class="col-md-3"></div>

                </div>
            </div>

        </div>
    </body>
</html>