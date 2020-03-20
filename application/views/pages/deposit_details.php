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


      <div class="row">
        <div class="col-md-12">
          <div class="deposit-details">
            <table>
              <tbody>
                <tr>
                  <th>Plan:</th>
                  <td><?php if(isset($deposit_selected_plan) ){echo $deposit_selected_plan;} ?></td>
                </tr>
                <tr>
                  <th>Deposit Amount:</th>
                  <td><?php if(isset($deposit_amount) ){echo $deposit_amount;} ?></td>
                </tr>
                <tr>
                  <th>Date:</th>
                  <td><?php if(isset($deposit_date) ){echo $deposit_date;} ?></td>
                </tr>
                <tr>
                  <th>Mode of Payment:</th>
                  <td><?php if(isset($deposit_payment_mode) ){echo $deposit_payment_mode;} ?></td>
                </tr>
                <tr>
                  <th>Send Payment to:</th>
                <?php
                  if(isset($deposit_payment_mode)){
                    if($deposit_payment_mode == 'BITCOIN'){
                      echo '<td>
                        <img src=" '.base_url('assets/img/qr_bitcoin.jpg').'" alt="bitcoin" width="150px">
                        '. $deposit_address.'
                      </td>';
                    }else if($deposit_payment_mode == 'ABRA'){
                      echo '<td>
                        <img src=" '.base_url('assets/img/qr_abra.jpg').'" alt="bitcoin" width="150px">
                        '. $deposit_address.'
                      </td>';
                    }else{
                      echo '<td>'. $deposit_address.'</td>';
                    }
                  }
                ?>
              </tr>
              <tr>
                <th>Payment Status:</th>
                <td>Pending</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>

	</section>
</div>
