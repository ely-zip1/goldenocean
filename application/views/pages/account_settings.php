<div class="main-content">

	<section class="section">
		<div class="section-header section-header-custom">
			<h1>Account Settings</h1>
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
                  <div class="col-md-6">
                    <table>
                      <tbody>
                        <tr>
                          <td>Account name: </td>
                          <th></th>
                        </tr>
                        <tr>
                          <td>Registration date: </td>
                          <th></th>
                        </tr>
                        <tr>
                          <td>Email address: </td>
                          <th></th>
                        </tr>
                        <tr>
                          <td>Full name: </td>
                          <th></th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
    </div>

  </section>
</div>
