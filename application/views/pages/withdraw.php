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
              <a href="<?php echo base_url('account_settings'); ?>" class="btn btn-icon icon-left btn-dark rounded-button rounded-button-settings"><i class="fas fa-cogs"></i> Settings</a>
            </div>

          </div>
        </div>
      </div>

      <div class="row deposit-row">
        <div class="col-12">
          <div class="card bg-info text-white">
            <div class="card-header">
              <h1>Account Balance:  </h1>
            </div>
              <div class="card-body">
                <h6>Pending Withdrawals:  </h6>
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="alert alert-info alert-has-icon">
            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
            <div class="alert-body">
            <div class="alert-title">
              All withdrawals are subject to 5% tax.
            </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card bg-primary text-white">
              <div class="card-body">
                <div class="row">
          				<div class="col-md-12">
          					<?php echo form_open('withdrawal'); ?>
          					<div class="form-row">
          						<div class="form-group col-md-5 deposit-form">
          							<label for="plan_option">Mode</label>
          							<select class="form-control" name="plan_payment_mode">
          								<option <?php if($selected_mode == 'mode1') {echo 'selected';} ?> value="mode1">Bitcoin</option>
          								<option <?php if($selected_mode == 'mode2') {echo 'selected';} ?> value="mode2">Abra</option>
          								<option <?php if($selected_mode == 'mode3') {echo 'selected';} ?> value="mode3">Neteller</option>
          								<option <?php if($selected_mode == 'mode4') {echo 'selected';} ?> value="mode4">Paypal</option>
          								<option <?php if($selected_mode == 'mode5') {echo 'selected';} ?> value="mode5">Mastercard</option>
          								<option <?php if($selected_mode == 'mode6') {echo 'selected';} ?> value="mode6">Skrill</option>
          							</select>
          							<div class="invalid-feedback">
          										<?php echo form_error('plan_payment_mode');?>
          							</div>
                      </div>

                      <div class="form-group col-md-5 deposit-form">
          	            <label for="deposit_amount">Amount</label>
          	            <input type="text" class="form-control <?php if(strlen(form_error('deposit_amount')) > 0){echo "is-invalid";} ?>"
          								name="deposit_amount" id="deposit-amount" placeholder="Amount" value="<?php set_value('deposit_amount','',true); ?>">
          							<div class="invalid-feedback deposit-error">
          										<?php echo form_error('deposit_amount');?>
          							</div>
                      </div>

                      <div class="form-group col-md-2">
              					<button type="submit" class="rounded-button" name="deposit-submit-button">Withdraw</button>
              					<?php echo form_close(); ?>
              				</div>
                    </div>

          				</div>
          			</div>
              </div>
          </div>
        </div>
      </div>


    </div>
	</section>
</div>
