<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">
      <title>Calculate Exam Attempt - Log in </title>
      <!-- Vendors Style-->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendors_css.css">
      <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
      <!-- Style-->  
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/skin_color.css">
   </head>
   <body class="hold-transition theme-primary bg-img" style="background-image: url(<?php echo base_url(); ?>assets/images/auth-bg/bg-1.jpg)">
      <div class="container h-p100">
         <div class="row align-items-center justify-content-md-center h-p100" style="margin-top:100px;">
            <div class="col-12">
               <div class="row justify-content-center g-0">
                  <div class="row">
                     <div class="col-sm-6"></div>
                     <div class="col-sm-6">
                        <div class="alert <?php echo ($this->session->flashdata('alert_color')) ? $this->session->flashdata('alert_color') : ''; ?> alert-dismissible fade show" id="success_msg" role="alert" style="<?php echo ($this->session->flashdata('Login_failed')) ? '' : 'display:none;' ?>">
                           <i class="bi bi-check-circle me-1"></i>
                           <?php echo ($this->session->flashdata('Login_failed')) ? $this->session->flashdata('Login_failed') : ''; ?>
                           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 col-md-5 col-12">
                     <div class="bg-white rounded10 shadow-lg" style="margin-bottom: 146px;">
                        <div class="content-top-agile p-20 pb-0">
                           <h2 class="text-primary">Let's Get Started</h2>
                           <p class="mb-0">Sign in to continue to CalculateExamAttempt</p>
                         </div>
                        <div class="p-40">
                           <form  id="loginForm" action="<?php echo base_url(); ?>Admin/index" method="post" enctype="">
                              <div class="form-group">
                                 <div class="input-group mb-3">
                                    <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                    <input type="text" class="form-control ps-15 bg-transparent" placeholder="Username" name="username" value="<?php echo set_value('username'); ?>">
                                    <span class="text-danger"><?php echo form_error('username'); ?></span>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="input-group mb-3">
                                    <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                    <input type="password" name="password" class="form-control ps-15 bg-transparent" placeholder="Password" value="<?php echo set_value('password'); ?>">
                                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                                 </div>
                              </div>
                              <div class="row">
                                 <!-- /.col -->
                                 <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-danger mt-10" id="loginpage">Login</button>
                                 </div>
                                 <!-- /.col -->
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Vendor JS -->
      <script src="<?php echo base_url(); ?>assets/js/vendors.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/pages/chat-popup.js"></script>
      <script src="<?php echo base_url(); ?>assets/icons/feather-icons/feather.min.js"></script>	
   </body>
</html>



<script>
   document.addEventListener("DOMContentLoaded", function() {
   const loginpage = document.getElementById("loginpage");
   
   loginpage.addEventListener("click", function() {
       const loginForm = document.getElementById("loginForm");
       loginForm.submit();
   });
   
   // Prevent form submission on Enter key press
   document.getElementById("loginForm").addEventListener("keypress", function(event) {
       if (event.keyCode === 13) { // 13 is the Enter key code
           event.preventDefault();
       }
   });
   });
</script>
