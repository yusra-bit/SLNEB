
<?php
include('connection.php');
?>



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
                    <li>
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
                    <li class="active">
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
                            <li><a href="#">Add Question</a></li>
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
                            <div class="card-header"><strong>Add Question</strong><small> Form</small></div>
                            
                            <div class="card-body card-block">

                             <form action="insert_question.php" method="POST" onsubmit="return QueValidation();" >

                            <div class="err">
                            <div id="Subcatchk" class="popup_error"></div>
                            </div>
                            <div class="form-group" >
                              <label>Select Category</label>
                              <select class="form-control" id="categoryid" name="categoryid">
                                <?php
                            $select_category="SELECT * FROM tblcategory";
                            $res=mysqli_query($conn,$select_category);
                            if(mysqli_num_rows($res)>0){

                            while ($rs=mysqli_fetch_assoc($res)) {
                                ?>
                                <option value="<?php echo $rs['id']; ?>"><?php echo $rs['chapter_name']; ?></option>
                                <?php
                                           }
                                     }

                                ?>
                                </select>
                                </div>
                                   <div class="form-group"   >

                                <label>Question: </label>
                                <input type="text" name="question" class="form-control" placeholder="Enter Question" autocomplete="off" >
                         </div>
                           
                            
                        
                            <div class="form-group" >
                                <label>Option 1:</label>
                                <input type="text" name="opt1" class="form-control"   placeholder="Enter Option1" autocomplete="off"  required> 
                            </div>

                            <div class="form-group">
                                <label>Option 2:</label>
                                <input type="text" name="opt2" class="form-control"   placeholder="Enter Option2" autocomplete="off" required> 
                            </div>

                            <div class="form-group">
                                <label>Option 3:</label>
                                <input type="text" name="opt3" class="form-control"   placeholder="Enter Option3" autocomplete="off" required> 
                            </div>

                            <div class="form-group">
                                <label>Option 4:</label>
                                <input type="text" name="opt4" class="form-control"   placeholder="Enter Option4" autocomplete="off" required> 
                            </div>


                            <div class="form-group">
                                <label>Answer</label>
                                <input type="text" name="ans" class="form-control" placeholder="Enter Answer" autocomplete="off">
                                
                            </div>

                            
                           

                            <br>
                                <input type="submit" name="save" class="btn btn-outline-warning">   
                                </form>
                        </div>
                    </div>

            </div><!-- .animated -->                                                                      
</div>
        </div>




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