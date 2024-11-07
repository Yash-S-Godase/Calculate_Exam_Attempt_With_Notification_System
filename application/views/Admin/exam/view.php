<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full">
      <!-- Main content -->
      <section class="content">
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Exams</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <div class="table-responsive">
                  <table id="example5" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                     <thead>
								<tr>
									<th>Sr.No</th>
									<th>Exam Name</th>
									<th>Action</th>
								</tr>
							</thead>
                     <tbody>
                        <?php
                              if (!empty($exam_list)) {
                                $row_count=1;
                                foreach ($exam_list as $value) {
                              ?>
                              <tr>
                                 <td><?php echo $row_count; ?></td>
                                 <td><?php echo $value['exam_name']; ?></td>
                                 <td> <?php if($this->session->userdata('role_id')!=0){ ?>
                                    <a href="<?php echo base_url(); ?>Exam/Add/<?php echo $value['exam_name']; ?>" class="waves-effect  btn-primary btn-md me-6">Apply Now</a>
                                    <?php } ?>
                                    
                                 </td>
                              </tr>
                      <?php $row_count++; }} ?>
                    </tbody>
                  </table>
               </div>
            </div>
            <!-- /.box-body -->
         </div>
      </section>
   </div>
</div>
