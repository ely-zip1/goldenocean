<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg navbar-bg-custom"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <div class="mr-auto"></div>
        <div class="navbar-nav navbar-right">
          <a href="<?php echo base_url(); ?>" class="btn btn-icon icon-left rounded-button header-button-1"><i class="fas fa-user"></i> DASHBOARD</a>
          <span class="nav-spacer"> </span>
          <a href="<?php echo base_url('logout'); ?>" class="btn btn-icon icon-left rounded-button header-button-2"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
        </div>
      </nav>
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
      </div>
