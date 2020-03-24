<div class="main-content">

	<section class="section">
		<div class="section-header section-header-custom">
			<h1>Make a Deposit</h1>
		</div>
    <div class="section-body">
      <div class="row ">
        <?php $this->load->view('templates/user_info'); ?>
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
