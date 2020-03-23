<div class="main-content">

	<section class="section">
		<div class="section-header section-header-custom">
			<h1>Account Overview</h1>
		</div>

		<div class="section-body">
      <div class="row ">
        <div class="col-12 user-basic-info">
          <div class="row">
            <div class="col-md-2 text-center">
              <img src="<?php echo base_url('assets/img/user-logo.png'); ?>" alt="" class="user-img">
            </div>

            <div class="col-md-7">
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
      </div>

      <div class="row account-summary-row ">
        <div class="col-sm-4 account-summary-1">

          <div class="right">
            <div class="ref-top">
              <h1><?php echo $total_bonus; ?></h1>
            </div>
            <div class="bottom1 ref-card">
              <h6>TOTAL REFERRAL COMMISSION</h6>
            </div>
          </div>
        </div>

        <div class="col-sm-4 account-summary-1">

          <div class="right">
            <div class="ref-top">
              <h1><?php echo $total_referrals; ?></h1>
            </div>
            <div class="bottom2 ref-card">
              <h6>REFERRALS</h6>

            </div>
          </div>
        </div>

        <div class="col-sm-4 account-summary-1">

          <div class="right">
            <div class="ref-top">
              <h1><?php echo $active_referrals; ?></h1>
            </div>
            <div class="bottom3 ref-card">
              <h6>ACTIVE REFERRALS</h6>

            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-12">
          <div class="row">
            <div class="col-md-4">
              <div class="right">
                <div class="top-dash">
                  <h1><?php echo $total_bonus; ?></h1>
                </div>
                <div class="bottom1-dash">
                  <h6>TOTAL REFERRAL COMMISSION</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="right">
                <div class="top-dash">
                  <h1><?php echo $total_referrals; ?></h1>
                </div>
                <div class="bottom2-dash">
                  <h6>REFERRALS</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="right">
                <div class="top-dash">
                  <h1><?php echo $active_referrals; ?></h1>
                </div>
                <div class="bottom2-dash">
                  <h6>ACTIVE REFERRALS</h6>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div> -->


		</div>

	</section>
</div>
