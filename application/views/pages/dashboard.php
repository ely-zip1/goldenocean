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
        <div class="col-md-6 account-summary-1">
          <div class="left">
            <img src="<?php echo base_url('assets/img/planactivebgside-min.png');?>" alt="">
            <div class="icon-container">
              <img src="<?php echo base_url('assets/img/plan1-min.png');?>" alt="">
            </div>
          </div>
          <div class="right">
            <div class="top-dash">
              <h1>$0.00</h1>
            </div>
            <div class="bottom1-dash">
              <h6>ACCOUNT BALANCE</h6>
            </div>
          </div>
        </div>

        <div class="col-md-6 account-summary-2">

          <div class="left">
            <img src="<?php echo base_url('assets/img/planactivebgside-min.png');?>" alt="">
            <div class="icon-container">
              <img src="<?php echo base_url('assets/img/plan2-min.png');?>" alt="">
            </div>
          </div>
          <div class="right">
            <div class="top-dash">
                <h1>$0.00</h1>
            </div>
            <div class="bottom2">
              <h6>ACTIVE DEPOSIT</h6>
            </div>
          </div>
        </div>
      </div>

      <div class="row account-summary-row ">
        <div class="col-md-6 account-summary-3">
					<div class="table-responsive dash-table-1">
						<table class="table go-table table-striped table-dark">
							<tr>
		          	<th class="table-rowheader">Pending Withdrawal: </th>
								<td><?php echo $pending_withdrawals; ?></td>
		          </tr>
							<tr>
		          	<th class="table-rowheader">Total Withdrawal: </th>
								<td><?php echo $total_withdrawals; ?></td>
		          </tr>
							<tr>
		          	<th class="table-rowheader">Total Earned: </th>
								<td><?php echo $total_growth; ?></td>
		          </tr>
						</table>
					</div>
        </div>

        <div class="col-md-6 account-summary-4">
					<div class="table-responsive dash-table-1">
						<table class="table go-table table-striped table-dark">
							<tr>
		          	<th class="table-rowheader">Last Deposit: </th>
								<td><?php echo $last_deposit; ?></td>
		          </tr>
							<tr>
		          	<th class="table-rowheader">Total Deposit: </th>
								<td><?php echo $total_deposit; ?></td>
		          </tr>
							<tr>
		          	<th class="table-rowheader">Last Withdrawal: </th>
								<td><?php echo $last_withdrawal; ?></td>
		          </tr>
						</table>
					</div>
				</div>

      </div>

      <div class="row">
        <div class="col-lg-12 affiliate-row">
          <div class="card card-primary text-center affiliate-program-card">
            <div class="card-body">
              <h5 class="card-title">AFFILIATE PROGRAM</h5>
                <!-- <div class="alert alert-has-icon affiliate-link-alert">
                    <div class="alert-body"> -->
                      <!-- <input type="text" class="form-control text-center bold-text" name=""
											value="https://goldenocean.com/my/ref/<?php echo $referral_code; ?>"> -->
											<div class="alert alert-light">
												<a class="affiliate-alert" href="https://goldenocean.com/my/ref/<?php echo $referral_code; ?>">https://goldenocean.com/my/ref/<?php echo $referral_code; ?></a>
	                    </div>
											<!-- </br> -->
					              <!-- <a href="#" class="btn btn-icon icon-left btn-dark rounded-button" id="copy_button" onclick="copyTextFunction()"><i class="fas fa-copy"></i> Copy</a> -->
                    <!-- </div>
                </div> -->

            </div>
          </div>
        </div>
      </div>
		</div>

	</section>
</div>

<script type="text/javascript">
	function copyTextFunction() {
	/* Get the text field */
	var copyText = document.getElementById("copy_button");

	/* Select the text field */
	copyText.select();
	copyText.setSelectionRange(0, 99999); /*For mobile devices*/

	/* Copy the text inside the text field */
	document.execCommand("copy");

	/* Alert the copied text */
	alert("Copied the text: " + copyText.value);
	}
</script>
