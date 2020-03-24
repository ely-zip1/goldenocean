<div class="col-12 user-basic-info">
  <div class="row">
    <div class="col-md-3 text-center">
      <!-- <img src="<?php echo base_url('assets/img/user-logo.png'); ?>" alt="" class="user-img"> -->
      <div class="circular--landscape">
        <img src="<?php echo base_url('uploads/ultra.jpg'); ?>" />
      </div>
    </div>
    <div class="col-md-6">
      <h4>WELCOME BACK, <?php echo strtoupper($this->session->userdata('username')); ?></h4>
      <p>
        Signup Date: <span class="bold-text"> <?php echo strtoupper($this->session->userdata('date_registered')); ?></span><br>
        <!-- Last Access: <?php echo strtoupper($this->session->userdata('username')); ?> -->
      </p>
    </div>
    <div class="col-md-3 text-center">
      <a href="<?php echo base_url('account_settings'); ?>" class="btn btn-icon icon-left btn-dark rounded-button rounded-button-settings"><i class="fas fa-cogs"></i> Settings</a>
    </div>
  </div>
</div>
