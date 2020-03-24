<div class="main-content">

	<section class="section">
		<div class="section-header section-header-custom">
			<h1>Account Overview</h1>
		</div>

		<div class="section-body">
      <div class="row ">
        <?php $this->load->view('templates/user_info'); ?>
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
