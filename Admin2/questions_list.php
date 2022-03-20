<?php include('header.php');
include('connection.php');
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
                    <li >
                        <a href="students_list.php"><i class="menu-icon fa fa-user"></i>Student List</a>
                    </li>
                    <li>    
                        <a href="results_list.php"><i class="menu-icon fa fa-table"></i>Result List</a>
                    </li>
                    <li class="active">
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
                            <li class="active">Question List Table</li>
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
                                <strong class="card-title">Question  Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="example" class="display" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                          <th>Sno<?php $sno=0; ?></th>
                                            <th>Question</th>
                                            <th>Opt1</th>
                                            <th>Opt2</th>
                                            <th>Opt3</th>
                                            <th>Opt4</th>
                                            <th>Right Answer</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                               <tbody>

    <?php
      $select_cat="SELECT * FROM tblmcq";
      $res=mysqli_query($conn,$select_cat);


      if(mysqli_num_rows($res)>0){


        while($rs=mysqli_fetch_assoc($res)){
          ?>

                                        <tr>
                                            <td><?php echo ++$sno;?></td>
                                            <td><?php echo $rs['questions']; ?></td>
                                             <td><?php echo $rs['opt1']; ?></td>
                                              <td><?php echo $rs['opt2']; ?></td>
                                               <td><?php echo $rs['opt3']; ?></td>
                                                <td><?php echo $rs['opt4']; ?></td>
                                                 <td><?php echo $rs['answer']; ?></td>


                                        <td>
 <?php 
$sql="SELECT * FROM tblcategory WHERE id='".$rs['category_id']."'";
$res1=mysqli_query($conn,$sql);
if(mysqli_num_rows($res1)>0){
  if($rs1=mysqli_fetch_assoc($res1))
    echo $rs1['chapter_name'];
}

 ?>

                                             </td>
                             <?php $QuestionID=$rs['id'];?>
                 <td><?php echo "<a href='edit_question.php?id=$QuestionID'><button class='btn btn-primary btn-xs'>Update</button></a>"?>
                </td>
<td>
                     <?php echo "<a href='delete_question.php?id=$QuestionID'><button class='btn btn-danger btn-xs' onclick=' return del();'>Delete</button></a>"?></td>
                                        
                                        </tr>
            <?php


        }
      }
?>    
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
 