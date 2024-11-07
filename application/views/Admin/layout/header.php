<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.png">
      <title>Exam Attempt - Dashboard</title>
      <!-- Vendors Style-->
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendors_css.css">
      <!-- Style-->  
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skin_color.css">
       
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" rel="stylesheet">
   </head>
   <body class="hold-transition light-skin sidebar-mini theme-primary fixed">
      <div class="wrapper">
      <div id="loader"></div>
      <header class="main-header">
         <div class="d-flex align-items-center logo-box justify-content-start">
            <!-- Logo -->
            <a href="<?php echo base_url();?>Admin/dashboard" class="logo">
               <!-- logo-->
               <div class="logo-mini">
                  <span class="light-logo">Exam Calculate</span>
                  <!-- <span class="dark-logo"><img src="<?php echo base_url().$this->session->userdata('logo');?>" alt="logo" style="height: 50px;width: 150px;"></span> -->
               </div>
            </a>
         </div>
         <!-- Header Navbar -->
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div class="app-menu">
               <ul class="header-megamenu nav">
                  <li class="btn-group nav-item">
                     <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
                     <i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
                     </a>
                  </li>
               </ul>
            </div>
            <h2>Calculate Exam Attempt</h2>
            <div class="navbar-custom-menu r-side">
               <ul class="nav navbar-nav">
                  <!-- User Account-->
                 <li class="dropdown user user-menu">
                     <a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow" data-bs-toggle="dropdown" title="User">
                        <?php $uname="Admin";
                        if($this->session->userdata('role_id')!=0)
                        {
                           $uname="Student";
                        }
                         ?>
                        <div class="d-flex pt-1">
                           <div class="text-end me-10">
                              <p class="pt-5 fs-14 mb-0 fw-700 text-primary"><?php echo $uname; ?></p>
                              <small class="fs-10 mb-0 text-uppercase text-mute"><?php echo $uname; ?></small>
                           </div>
                           <img src="<?php echo base_url();?>assets/images/avatar/avatar-1.png" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
                        </div>
                     </a>
                     <ul class="dropdown-menu animated flipInX">
                        <li class="user-body">
                           <!-- <a class="dropdown-item" href="extra_profile.html"><i class="ti-user text-muted me-2"></i> Profile</a> -->
                           <a class="dropdown-item" href="<?php echo base_url();?>Admin/logout"><i class="ti-lock text-muted me-2"></i>Logout</a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>