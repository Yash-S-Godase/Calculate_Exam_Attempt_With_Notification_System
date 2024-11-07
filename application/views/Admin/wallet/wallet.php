<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-full">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-4"></div>
                <div class="col-12 col-xl-4">
                 <form action="<?= base_url('Exam/wallet') ?>" method="post">
                    <div class="box">
                        <div class="box-body box-inverse bg-info p-0 bbsr-0 bber-0">    
                            <div class="box-header no-border">
                                <h4>Total Balance</h4>
                            </div>
                            <div class="box-body p-10">
                                <h1 class="text-center fs-50" id="balance"><small><i class="fa fa-rupee"></i></small><span id="balance">&nbsp;<?php echo $wallet_info['balance']; ?></span></h1><br><br>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </section>
        <!-- /.content -->
      </div>
  </div>
  <!-- /.content-wrapper -->
