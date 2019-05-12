<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SSCAI</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/lte/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/lte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/lte/dist/css/skins/_all-skins.min.css">
  

  <style type="text/css">
    .content-wrapper, .right-side {
      background: #fff;
    }
  </style>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">SSCAI</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SSCAI</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown">
          <?php $user = $this->M_User->get_by_id($this->session->userdata('id'));?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, <?php echo $user->name;?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>admin/user/profile">Profile</a></li>
            <li><a href="<?php echo base_url();?>admin/user/logout">Logout</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="" style="color: #fff;">
          <p><?php echo $user->name;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <!-- <li><a href="documentation/index.html">Dashboard</a></li> -->
        <?php $segment = $this->uri->segment(2);?>
        <li class="<?php if($segment == 'dashboard') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/dashboard">Dashboard <span class="sr-only">(current)</span></a></li>
        <li class="<?php if($segment == 'admissions') { echo 'active'; }?>">
          <a href="<?php echo base_url();?>admin/admissions">Admissions 
            <?php if($this->M_Admissions->check_pending() != 0):?>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"><?php echo $this->M_Admissions->check_pending();?></span>
            </span>
            <?php endif;?>
          </a>
        </li>
        <li class="<?php if($segment == 'messages') { echo 'active'; }?>">
          <a href="<?php echo base_url();?>admin/messages">Messages
            <?php if($this->M_Messages->check_pending() != 0):?>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"><?php echo $this->M_Messages->check_pending();?></span>
            </span>
            <?php endif;?>
          </a>
        </li>
        <li class="<?php if($segment == 'users') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/users">Users</a></li>

        <li class="<?php if($segment == 'activities' || $segment == 'announcements' || $segment == 'about' || $segment == 'facilities' || $segment == 'virtualtour' || $segment == 'albums') { echo 'active'; }?> treeview">
          <a href="#">
            <span>CMS</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php if($segment == 'activities') { echo 'active'; }?>"><a href="<?php echo base_url();
        ?>admin/activities">Activities</a></li>
          <li class="<?php if($segment == 'announcements') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/announcements">Announcements</a></li>
          <li class="<?php if($segment == 'about') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/about">About</a></li>
          <li class="<?php if($segment == 'facilities') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/facilities">Teachers</a></li>
          <li class="<?php if($segment == 'virtualtour') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/virtualtour">Virtual Tour</a></li>
          <li class="<?php if($segment == 'albums') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/albums">Albums</a></li>
          </ul>
        </li>
        <?php if($this->session->userdata('role') == 'superadmin'):?>
        <li class="<?php if($segment == 'logs') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/logs">Audit Trail</a></li>
        <?php endif;?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SSCAI</title>
    <link href="<?php echo base_url();?>assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
    <script src="<?php echo base_url();?>/assets/vendors/bootstrap/js/jquery.min.js"></script>
  </head>
  <style type="text/css">
    textarea {
      min-height: 150px;
    }
  </style>
<body>  

<?php if($this->session->userdata('id')):?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SSCAI</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php $segment = $this->uri->segment(2);?>
        <li class="<?php if($segment == 'activities') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/activities">Activities <span class="sr-only">(current)</span></a></li>
        <li class="<?php if($segment == 'admissions') { echo 'active'; }?>">
          <a href="<?php echo base_url();?>admin/admissions">Admissions <span class="sr-only" style="position: absolute;top: 5px;right: 5px;width: auto;height: auto;overflow: visible;clip: unset;">
            <?php if($this->M_Admissions->check_pending() != 0):?>
            <span class="badge"><?php echo $this->M_Admissions->check_pending();?></span>
            <?php endif;?></span></a></li>
        <li class="<?php if($segment == 'announcements') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/announcements">Announcements</a></li>
        <li class="<?php if($segment == 'about') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/about">About</a></li>
        <li class="<?php if($segment == 'facilities') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/facilities">Teachers</a></li>
        <li class="<?php if($segment == 'messages') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/messages">Messages
        <span class="sr-only" style="position: absolute;top: 5px;right: 5px;width: auto;height: auto;overflow: visible;clip: unset;">
            <?php if($this->M_Messages->check_pending() != 0):?>
            <span class="badge"><?php echo $this->M_Messages->check_pending();?></span>
            <?php endif;?></span></a></li>
        <li class="<?php if($segment == 'virtualtour') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/virtualtour">Virtual Tour</a></li>
        <li class="<?php if($segment == 'albums') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/albums">Albums</a></li>
        <?php if($this->session->userdata('role') == 'superadmin'):?>
        <li class="<?php if($segment == 'users') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/users">Users</a></li>
        
        <li class="<?php if($segment == 'logs') { echo 'active'; }?>"><a href="<?php echo base_url();?>admin/logs">Audit Trail</a></li>
        <?php endif;?>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <?php $user = $this->M_User->get_by_id($this->session->userdata('id'));?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, <?php echo $user->name;?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>admin/user/profile">Profile</a></li>
            <li><a href="<?php echo base_url();?>admin/user/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php endif;?>
 -->
