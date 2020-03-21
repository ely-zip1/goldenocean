<section class="section">
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
        <div class="row">
          <div class="col-12">
            <div class="login-brand">
            </div>
          </div>
        </div>
        <div class="card card-primary">

          <div class="card-body">

              <div class="row">
                <div class="col-12 text-center">
                    <a href="<?= base_url();?>"><img src="<?= base_url();?>assets/img/goldenocean_logo_2.png" alt="logo" width="60"></a> <br>
                    <h6 class="logo-header">Golden Ocean</h6>
                    <h3>Registration</h3> <br>
                </div>
              </div>

            <!-- <div class="row">
              <?php if(isset($_SESSION['success'])){ $this->load->view('templates/hero_registration'); }?>
            </div> -->

            <?php echo form_open('registration'); ?>

            <div class="form-group">
              <label for="fullname">Your Full Name
              </label>
              <input id="fullname" type="text" value="<?= set_value('fullname','',true)?>"
                     class="form-control <?php if(strlen(form_error('fullname')) > 0){echo "is-invalid";} ?>" name="fullname"
                     autofocus />
              <div class="invalid-feedback">
                <?php echo form_error('fullname');?>
              </div>
            </div>

            <div class="form-group">
              <label for="username">Your Username
              </label>
              <input id="username" type="text" value="<?= set_value('username','',true)?>"
                     class="form-control <?php if(strlen(form_error('username')) > 0){echo "is-invalid";} ?>" name="username"
                     autofocus />
              <div class="invalid-feedback">
                <?php echo form_error('username');?>
              </div>
            </div>

            <div class="form-group">
              <label for="email">Your Email
              </label>
              <input id="email" type="email" value="<?= set_value('email','',true)?>"
                     class="form-control <?php if(strlen(form_error('email')) > 0){echo "is-invalid";} ?>" name="email"
                     autofocus />
              <div class="invalid-feedback">
                <?php echo form_error('email');?>
              </div>
            </div>

            <div class="form-group">
              <label for="confirm_email">Re-type your Email
              </label>
              <input id="confirm_email" type="email" value="<?= set_value('confirm_email','',true)?>"
                     class="form-control <?php if(strlen(form_error('confirm_email')) > 0){echo "is-invalid";} ?>" name="confirm_email"
                     autofocus />
              <div class="invalid-feedback">
                <?php echo form_error('confirm_email');?>
              </div>
            </div>

            <div class="form-group">
              <label for="password">Your Password
              </label>
              <input id="password" type="password"
                     class="form-control <?php if(strlen(form_error('password')) > 0){echo "is-invalid";} ?>" name="password"
                     autofocus />
              <div class="invalid-feedback">
                <?php echo form_error('password');?>
              </div>
            </div>

            <div class="form-group">
              <label for="confirm_password">Re-type Password
              </label>
              <input id="confirm_password" type="password"
                     class="form-control <?php if(strlen(form_error('confirm_password')) > 0){echo "is-invalid";} ?>" name="confirm_password"
                     autofocus />
              <div class="invalid-feedback">
                <?php echo form_error('confirm_password');?>
              </div>
            </div>

            <div class="row">
              <div class="form-group col-12">
                <label>Referred by
                </label>
                <div for="referral" class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">office-goldenocean.com/my/ref/
                    </div>
                  </div>
                  <input id="referral" name="referral" value="<?= set_value('referral',$referral_code,true)?>"
                         type="text"
                         class="form-control <?php if(strlen(form_error('referral')) > 0){echo "is-invalid";} ?>"
                         placeholder="Referrer's code" readonly>
                </div>
                <div class="invalid-feedback">
                  <?php echo form_error('referral');?>
                </div>
              </div>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block">
                Register
              </button>
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
