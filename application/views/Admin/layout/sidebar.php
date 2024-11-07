<aside class="main-sidebar">
   <!-- sidebar-->
   <section class="sidebar position-relative">
      <div class="multinav">
         <div class="multinav-scroll" style="height: 100%;">
            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">
               <?php if($this->session->userdata('role_id')==0){ ?>
               <li>
                  <a href="<?php echo base_url();?>Admin/addStudent">
                  <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i><span>Registration</span></a>
               </li>
               <?php } ?>
               <li>
               <?php if($this->session->userdata('role_id')!=0){ ?>
               <a href="<?php echo base_url(); ?>Exam/wallet"><i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i><span>Wallet</span></a>
                <?php } ?>
               </li>

               <li>
               <?php if($this->session->userdata('role_id')!=0){ ?>
               <a href="<?php echo base_url(); ?>Exam/examView"><i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i><span>Apply Exam</span></a>
               <?php } ?>
               </li>

               <li>
               <a href="<?php echo base_url(); ?>Exam/view"><i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i><span>Exams List</span></a>
               </li>
         </ul> 
         </div>
      </div>
   </section>    
</aside>

