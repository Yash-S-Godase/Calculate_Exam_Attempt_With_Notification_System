<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="container-full">
<!-- Content Header (Page header) -->
<!-- Main content -->
<section class="content">
   <!-- Basic Forms -->
   <div class="box">
   <div class="box-header with-border">
      <h4 class="box-title">Exam Registration </h4>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
   <div class="row">
      <div class="col">
         <form novalidate class="form" action="<?php echo base_url();?>Exam/Add/<?php echo $exam_name; ?>" method="post" enctype="multipart/form-data">
            <div class="row">
               <div class="col-6">
                  <div class="form-group">
                     <h5>Name Of candidate <span class="text-danger">*</span></h5>
                     <div class="controls">
                        <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>">
                     <span class="text-danger"><?php echo form_error('name'); ?></span>

                     </div>
                  </div>
              </div>
               <div class="col-6">
                  <div class="form-group">
                     <h5>Email ID <span class="text-danger">*</span></h5>
                     <div class="controls">
                        <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" required>
                         <span class="text-danger"><?php echo form_error('email'); ?></span>
                     </div>
                  </div>
              </div>
          </div>
          <div class="row">
               <div class="col-6">
                  <div class="form-group">
                     <h5>Moblie Number<span class="text-danger">*</span></h5>
                     <div class="controls">
                        <input type="number" name="number" class="form-control" value="<?php echo set_value('number'); ?>" required>
                        <span class="text-danger"><?php echo form_error('number'); ?></span> 
                     </div>
                  </div>
              </div>
               <div class="col-6">
                  <div class="form-group">
                     <h5>Date Of Birth <span class="text-danger">*</span></h5>
                     <div class="controls">
                        <input type="date" name="date"
                        value="<?php echo set_value('date'); ?>"class="form-control" required>
                        <span class="text-danger"><?php echo form_error('date'); ?></span> 
                     </div>
                  </div>
              </div>
          </div>
          <div class="row">
               <div class="col-6">
                  <div class="form-group">
                     <h5>Education<span class="text-danger">*</span></h5>
                     <div class="controls">
                        <input type="education" name="education" class="form-control" value="<?php echo set_value('education'); ?>"> 
                        <span class="text-danger"><?php echo form_error('education'); ?></span>
                     </div>
                  </div>
              </div>
               <div class="col-6">
                  <div class="form-group">
                     <h5>Exam Date<span class="text-danger">*</span></h5>
                     <div class="controls">
                        <input type="date" name="Edate" class="form-control" value="<?php echo set_value('Edate'); ?>">
                        <span class="text-danger"><?php echo form_error('Edate'); ?></span>
                     </div>
                  </div>
              </div>
          </div>
          <div class="row">
               <div class="col-6">
                  <div class="form-group">
                     <h5>Exam Select <span class="text-danger">*</span></h5>
                     <div class="controls">
                        <input type="text" name="exam" class="form-control" placeholder="" value="<?php echo $exam_name; ?>" readonly>
                        <span class="text-danger"><?php echo form_error('exam'); ?></span> 
         
                     </div>
                  </div>
              </div>
               <div class="col-6">
                  <div class="form-group">
                     <h5>Exam Fee <span class="text-danger">*</span></h5>
                     <div class="controls">
                        <div class="input-group">
                           <input type="text" name="fee" class="form-control" value="200" readonly> 
                           <span class="input-group-addon" id="basic-addon1"><i class="fa fa-rupee"></i></span>
                           <span class="text-danger"><?php echo form_error('fee'); ?></span> 
                        </div>
                     </div>
                  </div>
              </div>
          </div>
            <div class="text-xs-right">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>
         </form>
         </div>
         <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.box-body -->
   </div>
   <!-- /.box -->
</section>

