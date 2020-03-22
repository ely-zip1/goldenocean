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
							<h4>Total Deposit: <?php echo $total_details; ?></h4>
						</div>
				  </div>
        </div>
      </div>

      <div class="row deposit-row">
        <div class="col-12">
				  <div class="card bg-primary text-white text-white">
						<div class="card-header">
            	<h4>ULTRAMAX PLAN</h4>
            </div>
				    <div class="card-body">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">Amount</th>
										<th scope="col">Payment Mode</th>
										<th scope="col">Date Created</th>
										<th scope="col">Date Approved</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if(isset($deposit_data)){
									foreach ($deposit_data as $row){?>
								  	<tr>
											<td>$ <?php echo $row['amount']; ?></td>
											<td><?php echo $row['mode']; ?></td>
											<td><?php echo $row['date']; ?></td>
											<td><?php echo $row['date_approved']; ?></td>
										</tr>
									<?php }}?>
								</tbody>
							</table>
						</div>
				  </div>
        </div>
      </div>

      <div class="row deposit-row">
        <div class="col-12">
				  <div class="card bg-primary text-white text-white">
						<div class="card-header">
            	<h4>PANAMAX PLAN</h4>
            </div>
				    <div class="card-body">
							<table class="table table-striped">
								<thead>
									<tr>
										<th scope="col">Amount</th>
										<th scope="col">Payment Mode</th>
										<th scope="col">Date Created</th>
										<th scope="col">Date Approved</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if(isset($deposit_data)){
									foreach ($deposit_data as $row){?>
								  	<tr>
											<td>$ <?php echo $row['amount']; ?></td>
											<td><?php echo $row['mode']; ?></td>
											<td><?php echo $row['date']; ?></td>
											<td><?php echo $row['date_approved']; ?></td>
										</tr>
									<?php }}?>
								</tbody>
							</table>
						</div>
				  </div>
        </div>
      </div>

      <div class="row deposit-row">
        <div class="col-12">
				  <div class="card bg-primary text-white">
						<div class="card-header">
            	<h4>CAPESIZE PLAN</h4>
            </div>
				    <div class="card-body">
							<table class="table table-striped text-white">
								<thead>
									<tr>
										<th scope="col">Amount</th>
										<th scope="col">Payment Mode</th>
										<th scope="col">Date Created</th>
										<th scope="col">Date Approved</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if(isset($deposit_data)){
									foreach ($deposit_data as $row){?>
								  	<tr>
											<td>$ <?php echo $row['amount']; ?></td>
											<td><?php echo $row['mode']; ?></td>
											<td><?php echo $row['date']; ?></td>
											<td><?php echo $row['date_approved']; ?></td>
										</tr>
									<?php }}?>
								</tbody>
							</table>
						</div>
				  </div>
        </div>
      </div>

    </div>
	</section>
</div>
