<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-sidebar shadow">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand">
			  <a href="<?= base_url();?>"><img src="<?= base_url();?>assets/img/goldenocean_logo_2.png" alt="logo" width="70"></a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			  <a href="<?= base_url();?>"><img src="<?= base_url();?>assets/img/goldenocean_logo_2.png" alt="logo" width="40"></a>
		</div>
		<ul class="sidebar-menu">
			<!-- <li class="menu-header">Dashboard</li> -->
			<li class="dropdown <?php echo $this->uri->segment(1) == 'dashboard' ? 'active' : ''; ?>"> <a
					href="dashboard" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a> </li>
		</ul>
	</aside>
</div>
