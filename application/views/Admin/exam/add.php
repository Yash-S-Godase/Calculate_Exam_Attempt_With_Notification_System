<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<div class="container-full">
<!-- Content Header (Page header) -->
<!-- Main content -->
<section class="content">
   <!-- Basic Forms -->
   <div class="box">
   <div class="box-header with-border">
      <h4 class="box-title">Exam List </h4>
   </div>
   <!-- /.box-header -->
   <div class="box-body">
   <div class="row">
      <div class="col">
         <form novalidate class="form" action="<?php echo base_url();?>Exam/exam" method="post" enctype="multipart/form-data">
            <div class="row">
               <div class="col-6">
                  <div class="form-group">
                     <h5>Exam Name<span class="text-danger">*</span></h5>
                     <div class="controls">
                        <input type="text" name="exam_name" class="form-control" value="<?php echo set_value('exam_name'); ?>" required data-validation-required-message="This field is required"> 
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
<!-- /.content -->