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

			<div class="row row-deposit">
				<div class="col-md-1 text-center">
					<img src="<?php echo base_url('assets/img/calculatoricon-min.png'); ?>" alt="deposit">
				</div>

				<div class="col-md-9">
					<?php echo form_open('plans'); ?>
					<div class="form-row">
            <div class="form-group col-md-4 deposit-form">
							<label for="chosen_plan">Choose your Plan</label>
							<select class="form-control" name="chosen_plan">
								<option value="plan1"><?php echo $plan1; ?></option>
								<option value="plan2"><?php echo $plan2; ?></option>
								<option value="plan3"><?php echo $plan3; ?></option>
							</select>
							<div class="invalid-feedback">
										<?php echo form_error('chosen_plan');?>
							</div>
            </div>

						<div class="form-group col-md-4 deposit-form">
							<label for="plan_option">Payment Mode</label>
							<select class="form-control" name="plan_payment_mode">
								<option value="mode1">Bitcoin</option>
								<option value="mode2">Abra</option>
								<option value="mode3">Neteller</option>
								<option value="mode4">Paypal</option>
								<option value="mode5">Mastercard</option>
								<option value="mode6">Skrill</option>
							</select>
							<div class="invalid-feedback">
										<?php echo form_error('plan_payment_mode');?>
							</div>
            </div>

            <div class="form-group col-md-4  deposit-form">
	            <label for="deposit_amount">Amount</label>
	            <input type="text" class="form-control <?php if(strlen(form_error('deposit_amount')) > 0){echo "is-invalid";} ?>"
								name="deposit_amount" id="deposit-amount" placeholder="Amount" value="<?php set_value('deposit_amount','',true); ?>">
							<div class="invalid-feedback deposit-error">
										<?php echo form_error('deposit_amount');?>
							</div>
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
