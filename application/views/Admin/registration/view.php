<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full">
      <!-- Content Header (Page header) -->   
      <!-- Main content -->
      <section class="content">
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Student Exams List</h3>
                <?php if($this->session->userdata('role_id')!=0){ ?>
               <!-- <a href="<?php echo base_url(); ?>Exam/Add" class="btn btn-md btn-primary " style="margin-left:70%;">Add</a> -->
            <?php } ?>
            </div>
                 <!-- /.box-header -->
            <div class="box-body">
               <div class="inner-user-div4">
                  <div class="table-responsive">
                     <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                        <thead>
                           <tr>
                              <th>Sr.no</th>
                              <th>Name</th>
                              <th>Email ID</th>
                              <th>Mobile No</th>
                              <th>Date Of Birth</th>
                              <th>Education</th>
                              <th>Exam Type</th>
                              <th>Exam Date</th>
                              <th>Exam Fee</th>
                              <?php if($this->session->userdata('role_id')==0){ ?>
                              <th>Action</th>
                              <?php } ?>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              if (!empty($exam_info)) {
                                $row_count=1;
                                foreach ($exam_info as $value) {
                              ?>
                           <tr>
                              <td><?php echo $row_count; ?></td>
                              <td><?php echo $value['name']; ?></td>
                              <td><?php echo $value['email']; ?></td>
                              <td><?php echo $value['number']; ?></td>
                              <td><?php echo $value['date']; ?></td>
                              <td><?php echo $value['education'];?></td>
                              <td><?php echo $value['exam']; ?></td>
                              <td><?php echo $value['Edate']; ?></td>
                              <td><?php echo $value['fee']; ?></td>
                              <td>
                                 <?php if($this->session->userdata('role_id')==0){ ?>
                                    <a href="<?php echo base_url(); ?>Exam/deleteExam/<?php echo $value['id']; ?>/<?php echo $value['added_by']; ?>" class="waves-effect  btn-danger btn-md me-6" onclick="return confirm('Are you sure you want to cancel this exam?')">Cancle Exam</a>
                                    <?php } ?>
                              </td>
                           </tr>
                           <?php $row_count++; }} ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <!-- /.box-body -->
         </div>
      </section>
   </div>
</div>


