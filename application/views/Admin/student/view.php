<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <div class="container-full">
      <!-- Main content -->
      <section class="content">
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">View Students</h3>
               <?php if($this->session->userdata('role_id')!=0){ ?>
               <a href="<?php echo base_url(); ?>Admin/addStudent" class="btn btn-md btn-primary " style="margin-left:70%;">Add</a>
                 <?php } ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <div class="table-responsive">
                  <table id="example5" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                     <thead>
								<tr>
									<th>Sr.No</th>
									<th>Name</th>
									<th>Username</th>
									<th>Password</th>
									<!-- <th>Action</th> -->
								</tr>
							</thead>
                     <tbody>
							<?php
                    if (!empty($student_info)) {
                        $row_count=1;
                        foreach ($student_info as $value) 
                        {          
                  ?>
							<tr>
								<th scope="row"><?php echo $row_count; ?></th>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['username']; ?></td>
                        <td><?php echo $value['password']; ?></td>
                        <!-- <td>
							      <div class="d-flex">
                              <a href="<?php echo base_url(); ?>admin/editStaff/<?php echo $value['id'] ?>" class="waves-effect waves-circle btn btn-circle btn-success btn-xs me-5"><i class="fa fa-pencil"></i></a>
                              <a href="<?php echo base_url(); ?>admin/deleteStaff/<?php echo $value['id'] ?>" class="waves-effect waves-circle btn btn-circle btn-danger btn-xs" onclick="return confirm('Are you sure you want delete this User?');"><i class="fa fa-trash"></i></a>
                           </div> 
                        </td> -->
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
