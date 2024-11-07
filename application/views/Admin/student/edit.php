<div class="content-wrapper">
<div class="container-full">
<!-- Main content -->
<section class="content">
   <!-- Step wizard -->
   <div class="box">
      <div class="box-header with-border">
         <h3 class="box-title">Edit User</h3>
         <h6 class="box-subtitle">तहसील कार्यालय नांदगाव</h6>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
         <form  class="tab-wizard wizard-circle"method="Post" action="<?php echo base_url(); ?>admin/editStaff/<?php echo $staff_info['id']; ?>" enctype="multipart/form-data">
         <!-- Step 1 -->
         <h6>User Information</h6>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="name" value="<?php echo $staff_info['name']; ?>"><span class="text-danger"><?php echo form_error('name'); ?></span>
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="username" value="<?php echo $staff_info['username']; ?>"><span class="text-danger"><?php echo form_error('username'); ?></span> 
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="password" value="<?php echo $staff_info['password']; ?>" maxlength="4" minlength="4"><span class="text-danger"><?php echo form_error('password'); ?></span> 
               </div>
            </div>
         </div>
      <div>
      <button type="submit"  name="submit"class="btn btn-primary">Update</button>
      </div><br>
      </form>
   </div>
</div>
</section>
</div>
</div>



