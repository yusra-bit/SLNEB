
<?php 
include('header.php');
include('connection.php');
$countQs = 0;
$res = mysqli_query($conn,  "select * from tblmcq ");
$countQs = mysqli_num_rows($res);

$countC = 0;
$res = mysqli_query($conn,  "select * from tblcategory");
$countC = mysqli_num_rows($res);

$countS = 0;
$res = mysqli_query($conn,  "select * from signup ");
$countS = mysqli_num_rows($res);



?>

    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="">Cohérence Dashboard</a>
                <a class="navbar-brand hidden" href="">C</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                           <a href="categories.php"><i class="menu-icon fa fa-book"></i>Category Form</a>
                        <a href="students_list.php"><i class="menu-icon fa fa-user"></i>Student List</a>
                        <a href="results_list.php"><i class="menu-icon fa fa-table"></i>Result List</a>
                        <a href="questions_list.php"><i class="menu-icon fa fa-question"></i>Questions </a>
                        <a href="Add_question.php"><i class="menu-icon fa fa-th"></i>Add Question</a>
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
                        <h1>Cohérence Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Cohérence Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
 <div class="col-xl-8 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Active Questions</div>
                                <div class="stat-digit"> <?php echo $countQs;?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-xl-8 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-book text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Number of Chapters</div>
                                <div class="stat-digit"><?php echo $countC; ?> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <div class="col-xl-8 col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Number of Students </div>
                                <div class="stat-digit"><?php echo $countS; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  

</body>

</html>
