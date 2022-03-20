<?php include('connection.php');
session_start();
                 if (isset($_SESSION['id'])) {
                     header("Location:categories.php");
                     exit();
                 }
$username = $password ='';
$errorMsg= array('username'=>'',
                 'password'=>'');

                 

if (isset($_POST['login'])){

  //  $username =$_POST['username'];
  //  $password =$_POST['password'];
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

    $query ="SELECT * FROM admin WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1){
        
     //   $_SESSION['PASSWORD'] = $row['name'];
       // echo "login succesfully";
       header("location:categories.php");
       
         
       // $role ="SELECT role FROM signup WHERE username='$username' AND password='$password'";
       // $roles =mysqli_query($conn, $role);

       // $row = mysqli_fetch_array($roles);

        //if($row['role'] == "Admin") {
          //  $_SESSION['admin'] = $username;

            //header("Location:categories.php");
        //}
        //else if ($row['role'] =="User"){
          //  $_SESSION['user'] = $username;

            //header("Location:select_exam.php");

        //}



    }else{
        $msg="<div class='alert alert-danger'>Invalid Account</div>";

    }
}
?>






<?php include ('../templates/header.php'); ?>

<html>
    <head>
        <title>Admin</title>
    </head>
    <body>
        <div class="container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <h4 class="text-center"> Admin Login</h4>
                      
                        <form method="POST">
                            <?php if(isset($msg)) { echo $msg;}?>
                        <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" value="<?php echo htmlspecialchars($username)?>" placeholder="Enter username" class="form-control"autocomplete="off">
                                <div class="text-danger">
                                <?php echo $errorMsg['username']; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" value="<?php echo htmlspecialchars($password)?>" placeholder="Enter password" class="form-control"autocomplete="off">
                                <div class="text-danger">
                                <?php echo $errorMsg['password']; ?>
                                </div>                                
                            </div>
                            <br>

                            <input type="submit" name="login" class="btn btn-warning">

                           

                        </form>
                    </div>
                    <div class="col-md-3"></div>

                </div>
            </div>

        </div>
    </body>
</html>