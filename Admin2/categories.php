
<?php
include('connection.php');

$query=mysqli_query($conn,"SELECT * FROM tblcategory ");

while($row=mysqli_fetch_array($query)){
    $subject = $row['subject'];
  $chapter = $row['chapter_name'];
}


//updating category table
$id='';
//$id=$_GET['id'];
$update =false;
//$row='';

if(isset($_GET['edit'])){

$id = isset($_GET['id']) ? $_GET['id'] : '';
  $id = $_GET['edit'];
  $update = true;
	//select Query from DB
	$query=mysqli_query($conn,"SELECT * FROM tblcategory where id='$id' ");
  $row=mysqli_fetch_array($query);

}

    if(isset($_POST['update']))
    {
        $subject= $_POST['subject'];
        $chapter_name= $_POST['chapter_name'];
       // $time= $_POST['examtime'];
        
	

        $edit = mysqli_query($conn, "UPDATE `tblcategory` SET 
        `subject`='$subject',
        `chapter_name`='$chapter_name' WHERE id ='$id' ");
    

    if($edit)
    {
        mysqli_close($conn);
        header('location:categories.php?status=category_Updated');     
       // $msg="<div class='alert alert-success'>Updated</div>";

        exit;
    }
	else{
        echo mysqli_error($conn);
    }
}


//inserting the data
$subject = $chapter_name = $time = '';
$errorMsg= array('subject'=>'',
                 'chapter_name'=>'');

if(isset($_POST['submit'])){

   // $username =$_POST['username'];
   // $email =$_POST['email'];
   // $password =$_POST['password'];
   // $role =$_POST['role'];

   if(empty($_POST['subject'])){
       $errorMsg['subject'] ='Subject is required <br/>';
   }else{
       $subject=$_POST['subject'];
       
       }
   

   //chapters

   if(empty($_POST['chapter_name'])){
    $errorMsg['chapter_name'] = 'Chapter Name is required <br/>';
}else{
     $chapter_name = $_POST['chapter_name'];
     }

    
//time

/**if(empty($_POST['examtime'])){
    $errorMsg['examtime'] ='Time is required <br/>';
}else{
    $time=$_POST['examtime'];
}*/
    




if(array_filter($errorMsg)){
 //echo 'error in the form';
}else{
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $chapter_name = mysqli_real_escape_string($conn, $_POST['chapter_name']);
   // $time = mysqli_real_escape_string($conn, $_POST['examtime']);

    $query ="INSERT INTO tblcategory(subject, chapter_name) VALUES('$subject', '$chapter_name')";
    if(mysqli_query($conn, $query)){
      //succes
      $msg="<div class='alert alert-success'>New Category is Created</div>";
       // header('location:categories.php');
    } else{
        //error
        echo 'query error:' .mysqli_error($conn);
    }
    
    
}

}

//fetching the data
//$id = $_GET['id'];
$query = "SELECT * FROM tblcategory ORDER BY subject ";
		// get the query result
	$result = mysqli_query($conn, $query);
		// fetch result in array format
		$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
		mysqli_free_result($result);
		mysqli_close($conn);

?>

<?php// include ('templates/admin.php'); ?>


<?php include('header.php'); ?>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">Cohérence Dashboard</a>
                <a class="navbar-brand hidden" href="./">C</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="categories.php"><i class="menu-icon fa fa-book" ></i>Category Form</a>
                    </li>
                    <li>
                        <a href="students_list.php"><i class="menu-icon fa fa-user"></i>Student List</a>
                    </li>
                    <li>    
                        <a href="results_list.php"><i class="menu-icon fa fa-table"></i>Result List</a>
                    </li>
                    <li>
                        <a href="questions_list.php"><i class="menu-icon fa fa-question"></i>Questions </a>
                    </li>
                    <li>
                        <a href="Add_question.php"><i class="menu-icon fa fa-th"></i>Add Question</a>
                    </li>
                    <li>

                         <hr style="background-color:white">
                       <a href="logout.php"><i class="menu-icon fa fa-sign-out"></i>Log Out </a>
                    </li>   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">  
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Category Form</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                    <!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Categories</strong><small> Form</small></div>
                            
                            <div class="card-body card-block">
                                <form action="" method="post">
                                <?php if(isset($msg)) { echo $msg;}?>
                         <?php //if (isset($msgedit)) { echo $msgedit;}?>
                        <input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>"  autocomplete="off" />

                        <div class="form-group">
                                <label>Select The Subject</label>
                                <select name="subject" class="form-control"  value="<?php echo htmlspecialchars($subject)?>" > 
                                
                                <option value="<?php echo $row['subject'];?>"><?php echo $row['subject'];?> |Select Subject</option>

                                    <option value="Islamic">Islamic Studies</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="English">English</option>
                                    <option value="Soomali">Soomali</option>
                                    <option value="Geography">Geography</option>
                                    <option value="History">History</option>
                                    <option value="Maths">Math </option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Biology">Biology</option>
                                    <option value="Physics">Physics</option>


                                </select>
                                <div class="text-danger">
                                <?php echo $errorMsg['subject']; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Chapter </label>
                                <input type="text" name="chapter_name" class="form-control" value="<?php echo $row['chapter_name'];?><?php echo htmlspecialchars($chapter_name)?>"  placeholder="Enter The Chapter" autocomplete="off" required>
                                <div class="text-danger">
                                <?php echo $errorMsg['chapter_name']; ?>
                                </div>
                            </div>

                           


                            
                            
                            <br>
                            <?php if ($update == true): ?>
	<button class="btn btn-warning" type="submit" name="update"  >update</button>
<?php else: ?>
	<button class="btn btn-success" type="submit" name="submit" >Save</button>
<?php endif ?>  

                             </div>
</form>
                        </div>
                    </div>

            </div><!-- .animated -->                                                                      
</div>
        </div>

            
                                    
                                
<a href="Add_question.php" class="btn btn-primary" >Add New Question</a>


<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Subject</th>
                                            <th>Chapter Name</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                     <tbody>
  <?php foreach($users as $user): ?>
    <tr>
      <td><?php echo $user['id']; ?></td>
      <td><?php echo $user['subject']; ?></td>
      <td class="text-capitalize"><?php echo $user['chapter_name']; ?></td>

<!-- Update FORM -->
      <td>
				<a href="categories.php?edit=<?php echo $user['id']; ?>" class="btn btn-primary" >Edit</a>
			</td>

      
    </tr>
    
<?php endforeach; ?>
  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

</div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->




    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>