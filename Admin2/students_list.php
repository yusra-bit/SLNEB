<?php include('header.php');

 ?>
 <?php
include('connection.php');

if(isset($_POST['delete'])){
  $id=mysqli_real_escape_string($conn, $_POST['del_id']);
  $query ="DELETE  FROM signup WHERE id = $id";
  if(mysqli_query($conn, $query)){
   echo "<script>alert('deleted!!')</script>";
   //header('location:users.php');

  }else{
    echo 'query error: '. mysqli_error($conn);
  }
}

$query = "SELECT * FROM signup ";
		// get the query result
		$result = mysqli_query($conn, $query);
		// fetch result in array format
		$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
		mysqli_free_result($result);
		mysqli_close($conn);
?>



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
                    <li >
                        <a href="categories.php"><i class="menu-icon fa fa-book" ></i>Category Form</a>
                    </li>
                    <li class="active">
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
                            <li class="active">Student List table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Student List </strong>
                            </div>
                            <div class="card-body">
                                <table id="example" class="display" cellspacing="0" width="100%">
                                    <thead>
                                      <tr>
                                    <th>No<?php $sno=0; ?></th>
                                    <th scope="th-sm">Username</th>
                                    <th scope="th-sm">Email</th>
                                    <th scope="th-sm">Password</th>
                                    <th scope="th-sm">Delete</th>
                                    </tr>  
                                    </thead> 
                                    
                                    <tbody>
                            <?php foreach($users as $user): ?>
                                <tr>
                                <td><?php echo ++$sno;?></td>
                                <td><?php echo $user['username']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['password']; ?></td>

                                <td>
                                    <!-- DELETE FORM -->
                                <form action="" method="POST">
                                    <input type="HIDDEN" name="del_id" value="<?php echo $user['id']; ?>" />
                                    <input type="submit" name="delete" value="Delete" class=" btn btn-danger" />
                                </form>
                                </td>
 
                                </tr>
    
<?php endforeach; ?>
  </tbody>
  

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<script>
  
  function del(){
   var y=confirm("Do you Really want to delete this!!!");
         if(y){
         return true;
       }
           else{
              return false;
           }
              
    }

</script>

   

</body>

</html>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.jqueryui.min.css"/>
  
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.jqueryui.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
$('#example').DataTable();
});
</script>
 
   
