<div class="main-content">

	<section class="section">
		<div class="section-header section-header-custom">
			<h1>Make a Deposit</h1>
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
              <a href="#" class="btn btn-icon icon-left btn-dark rounded-button rounded-button-settings"><i class="fas fa-cogs"></i> Settings</a>
            </div>

          </div>
        </div>
      </div>

      <div class="row account-summary-row ">
        <div class="col-md-4 account-summary-1">
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
							<h4>BASIC PLAN</h4>
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

        <div class="col-md-4 account-summary-1">
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
              <h4>PREMIUM PLAN</h4>
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

        <div class="col-md-4 account-summary-1">
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
              <h4>GOLD PLAN</h4>
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

			<div class="row row-deposit">
				<div class="col-md-1 text-center">
					<img src="<?php echo base_url('assets/img/calculatoricon-min.png'); ?>" alt="deposit">
				</div>

				<div class="col-md-9">
					<?php echo form_open('plans'); ?>
					<div class="form-row">
            <div class="form-group col-md-6 deposit-form">
							<label for="plan_option">Choose your Plan</label>
							<select class="form-control" name="plan_option">
								<option class="option-1">Basic Plan</option>
								<option class="option-2">Premium Plan</option>
								<option class="option-3">Gold Plan</option>
							</select>
            </div>
            <div class="form-group col-md-6  deposit-form">
	            <label for="inputPassword4">Amount</label>
	            <input type="text" class="form-control" name="deposit_amount" id="deposit-amount" placeholder="Amount">
            </div>
          </div>
				</div>

				<div class="col-md-2">
					<button type="submit" class="rounded-button submit-deposit" name="deposit-submit-button">SPEND</button>
					<?php echo form_close(); ?>
				</div>
			</div>

		</div>

	</section>
</div>
