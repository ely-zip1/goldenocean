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
          <div class="left">
            <img src="<?php echo base_url('assets/img/planactivebgside-min.png');?>" alt="">
            <div class="icon-container">
              <img src="<?php echo base_url('assets/img/plan1-min.png');?>" alt="">
            </div>
          </div>
          <div class="right">
            <div class="top">
              <h1>$80.00</h1>
              <h6>Up to $799.00</h6>
            </div>
            <div class="bottom1 plan-card">
              <h4><?php echo $plan1; ?></h4>
              <!-- <h4>ULTRAMAX PLAN</h4> -->
              <p class="plan-card-info">
                <b>120 Days</b> Contract
                <br>
                Sponsor Bonus
                <br>
                <b>1st level - 5%</b>
                <br>
                <b>2nd level - 3%</b>
                <br>
                <b>3rd level - 2%</b>
              </p>

              <h1 class="interest-info text-center"> 1% DAILY</h1>
            </div>
          </div>
        </div>

        <div class="col-sm-4 account-summary-1">
          <div class="left">
            <img src="<?php echo base_url('assets/img/planactivebgside-min.png');?>" alt="">
            <div class="icon-container">
              <img src="<?php echo base_url('assets/img/plan7-min.png');?>" alt="">
            </div>
          </div>
          <div class="right">
            <div class="top">
              <h1>$800.00</h1>
              <h6>Up to 3,999.00</h6>
            </div>
            <div class="bottom2 plan-card">
              <h4><?php echo $plan2; ?></h4>
              <p class="plan-card-info">
                <b>90 Days</b> Contract
                <br>
                Sponsor Bonus
                <br>
                <b>1st level - 5%</b>
                <br>
                <b>2nd level - 3%</b>
                <br>
                <b>3rd level - 2%</b>
              </p>

              <h1 class="interest-info text-center"> 1.5% DAILY</h1>
            </div>
          </div>
        </div>

        <div class="col-sm-4 account-summary-1">
          <div class="left">
            <img src="<?php echo base_url('assets/img/planactivebgside-min.png');?>" alt="">
            <div class="icon-container">
              <img src="<?php echo base_url('assets/img/plan9-min.png');?>" alt="">
            </div>
          </div>
          <div class="right">
            <div class="top">
              <h1>$4,000.00</h1>
              <h6>Up to 8,000.00</h6>
            </div>
            <div class="bottom3 plan-card">
              <h4><?php echo $plan3; ?></h4>
              <p class="plan-card-info">
                <b>60 Days</b> Contract
                <br>
                Sponsor Bonus
                <br>
                <b>1st level - 5%</b>
                <br>
                <b>2nd level - 3%</b>
                <br>
                <b>3rd level - 2%</b>
              </p>

              <h1 class="interest-info text-center"> 2% DAILY</h1>
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
