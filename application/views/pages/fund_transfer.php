<div class="main-content">

	<section class="section">
		<div class="section-header section-header-custom">
			<h1>Transfer Funds</h1>
		</div>
    <div class="section-body">
      <div class="row ">
        <?php $this->load->view('templates/user_info'); ?>
      </div>

      <div class="row deposit-row">
        <div class="col-12">
          <div class="alert bg-primary text-white">
          	<h4>Account Balance:  $ <?php echo $account_balance; ?></h4>
          </div>
        </div>
      </div>

			<div class="row row-deposit">
				<div class="col-md-1 text-center">
					<img src="<?php echo base_url('assets/img/plan6-min.png'); ?>" alt="deposit">
				</div>

				<div class="col-md-9">
					<?php echo form_open('fund_transfer'); ?>
					<div class="form-row">
            <div class="form-group col-md-8 deposit-form">
              <label for="receiver_code">Send to</label>
              <div class="input-group mb-2">
                <div class="input-group-prepend">
                  <div class="input-group-text">https://office-goldenocean.com/my/ref/</div>
                </div>
                <input name="receiver_code" type="text" class="form-control <?php if(strlen(form_error('receiver_code')) > 0){echo "is-invalid";} ?>"
                id="inlineFormInputGroup" placeholder="Code" value="<?php set_value('receiver_code','',true); ?>">
                <div class="invalid-feedback deposit-error">
  										<?php echo form_error('receiver_code');?>
  							</div>
              </div>
            </div>

            <div class="form-group col-md-4  deposit-form">
	            <label for="transfer_amount">Amount</label>
	            <input type="text" class="deposit-amount form-control <?php if(strlen(form_error('transfer_amount')) > 0){echo "is-invalid";} ?>"
								name="transfer_amount" id="deposit-amount" placeholder="Amount" value="<?php set_value('transfer_amount','',true); ?>">
							<div class="invalid-feedback deposit-error">
										<?php echo form_error('transfer_amount');?>
							</div>
            </div>
          </div>
				</div>

				<div class="col-md-2">
					<button type="submit" class="rounded-button submit-deposit" name="deposit-submit-button">SEND</button>
					<?php echo form_close(); ?>
				</div>
			</div>

      <?php $this->load->view('pages/prefooter'); ?>

    </div>
  </section>
</div>
