<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Panel || Welcome</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?=base_url()?>css/bootstrap.min_1.css" rel="stylesheet">
    <link href="<?=base_url()?>font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="<?=base_url()?>css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="<?=base_url()?>css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?=base_url()?>css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url("css/mystyle.css")?>"/>
</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    
                <a href="<?=base_url("manage.html")?>"><img src="<?=base_url("img/logo.png")?>" class="img-rounded"/></a>
                <a class="navbar-brand" href="<?=base_url("manage.html")?>">TIMS</a>
                <p class="navbar-text">ລະບົບ ຖານຂໍ້ມູນ ການຄຸ້ມຄອງສະຖິຕິ ປື້ມຕຳລາ ຮຽນ ແລະ ປື້ມແບບຝືກຫັດ ຂອງ ໂຮງຮຽນ ອະນຸບານ, ປະຖົມ ແລະ ມັດທະຍົມ ສືກສາ</p>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?=$this->session->userdata("username")?>
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?=base_url("logout")?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw"></i> ຂໍ້ມູນຂອງໂຮງຮຽນ  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url("school")?>">ໂຮງຮຽນ ອະນຸບານ</a>
                                </li>
                                <li>
                                    <a href="<?=base_url("school")?>">ໂຮງຮຽນ ປະຖົມ</a>
                                </li>
                                <li>
                                    <a href="<?=base_url("school")?>">ໂຮງຮຽນ ມັດທະຍົມ</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> ຂໍ້ມູນປື້ມ<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url("book/pre_school")?>">ໂຮງຮຽນ ອະນຸບານ</a>
                                </li>
                                <li>
                                    <a href="<?=base_url("book/primary")?>">ໂຮງຮຽນ ປະຖົມ</a>
                                </li>
                                <li>
                                    <a href="<?=base_url("book/secondary")?>">ໂຮງຮຽນ ມັດທະຍົມ</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> ບົດລາຍງານ <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url("school")?>">ໂຮງຮຽນ ອະນຸບານ</a>
                                </li>
                                <li>
                                    <a href="<?=base_url("school")?>">ໂຮງຮຽນ ປະຖົມ</a>
                                </li>
                                <li>
                                    <a href="<?=base_url("school")?>">ໂຮງຮຽນ ມັດທະຍົມ</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                    <!-- /#side-menu -->
                    
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?=$page_header?></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <?php
                $this->load->view("$modules/$file_view");
            ?>    

            </div>

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
                                          <p class="text-center mute">@TIMS TextBook Information Management System 2014 Develop By Phonesouphanh THEPBANDITH</p>
<script src="<?=base_url("")?>js/jquery-1.11.0.min.js"></script>
    <script src="<?=base_url("")?>js/bootstrap.min.js"></script>
    <script src="<?=base_url("")?>js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="<?=base_url("")?>js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?=base_url("")?>js/plugins/morris/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?=base_url("")?>js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <script src="<?=base_url("")?>js/scripts.js"></script>
    <script src="<?=base_url("js/book.js")?>"></script>
</body>

</html>
