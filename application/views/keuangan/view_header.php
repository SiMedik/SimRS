<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | SimRS</title>
    <link href="<?php echo base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SimRS</span></a>
            </div>
            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
                <img style="width: 70px;height: 60px" src="<?php echo base_url('upload/foto_admin/'.$this->session->userdata('adm_foto')); ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat datang,</span>
                <h2><?php echo $this->session->userdata("adm_level"); ?><br><?php echo $this->session->userdata("adm_nama"); ?></h2>
              </div>
            </div>
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url()."keuangan/Dashboard"?>"><i class="fa fa-home"></i> Dashboard</a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Aset dan Inventoris <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url()."keuangan/Kategori"?>">Kategori</a></li>
                      <li><a href="<?php echo base_url()."keuangan/P_Jawab"?>">Penanggung Jawab</a></li>
                      <li><a href="<?php echo base_url()."keuangan/Merek"?>">Merek</a></li>
                      <li><a href="<?php echo base_url()."keuangan/Inventori"?>">Inventori</a></li>
                      
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url('upload/foto_admin/'.$this->session->userdata('adm_foto')); ?>" alt="">
                    <?php echo $this->session->userdata("adm_nama"); ?>

                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo base_url()."admin/Login/logout"?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
