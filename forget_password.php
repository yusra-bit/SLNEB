
<?php
include('connection.php');

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $query = "SELECT * FROM signup where email = '$email'";
    $run=mysqli_query($conn,$query);
    if (mysqli_num_rows($run)>0) {
        $row=mysqli_fetch_array($run);
        $db_email=$row['email'];
        $db_id=$row['id'];
        $token= uniqid(md5(time())); //This is a random token

        $query = "INSERT INTO password_reset(id,email,token) VALUES(NULL,'$email','$token')";
        if(mysqli_query($conn, $query)){
            $to=$db_email;
            $subject="Password reset link";
            $message="Click <a href='https://YOUR_WEBSITE.com/reset.php?token=$token'>here</a> to reset your password.";
            $headers="MIME-Version 2.0" . "\r\n";
            $headers.="Content-type:text/html;charset=utf-8" . "\r\n";
           $headers.="From: <coherence@demo.com" . "\r\n";
           // mail($to,$subject,$message,$headers);
           $msg="<div class='alert alert-success'>Password reset link has been sent to the email</div>";
        }
    }else{
            $msg="<div class='alert alert-warning'>User not found</div>";

        
    }
}
?>


<?php include ('templates/header.php'); ?>

<html>
    <head>
        <title>Forget Password</title>   
             <link rel="stylesheet" href="css/style0.css">

    </head>
    <body>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h4 class="text-center">Forget Password</h4>

                        <form method="POST" action="">
                            <div class="form-group">
                                <label>Enter Email</label>
                                <input type="email" name="email"  placeholder="name@example.com" class="form-control">
                            </div>

                            
                            <br>
                            <?php if(isset($msg)){echo $msg;} ?>
                            <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-dark " class="form-control">
                            </div>


                        </form>
                    </div>
                    

                </div>
            </div>

        </div>
    </body>
</html>


<html>
    <head>
        <title> Forgot Password Page</title> 
    </head>
    