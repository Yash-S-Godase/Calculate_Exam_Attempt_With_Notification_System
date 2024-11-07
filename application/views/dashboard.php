<div class="content-wrapper" >
	
    <div class="container-full"><br><br>
	<?php if($this->session->userdata("role_id")!=0){ ?>
        <marquee behavior="scroll" direction="left" scrollamount="3" class="text-danger"> <!-- Marquee tag for scrolling notification -->
            <?php foreach($exam_info as $entry): ?>
                <?php
                    // Calculate remaining days
                    $today = new DateTime();
                    $edate = new DateTime($entry['Edate']);
                    $difference = $today->diff($edate);
                    $remaining_days = $difference->days;
                ?>
                <?php if($remaining_days >= 0): ?> <!-- Display only if Edate is in the future -->
                    <span><?php echo "{$entry['exam']} - {$remaining_days} days remaining"; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php endif; ?>
            <?php endforeach; ?>
        </marquee>
		<?php }?>
    </div>
	<div class="container-fuild" style="height:400px;width:100%;background: url('<?php echo base_url(); ?>assets/images/final-exam.jpg');background-repeat: no-repeat;background-size: cover;"></div>
</div>
