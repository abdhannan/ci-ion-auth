<?php $this->load->view('custom/header'); ?>

		<div class="container">
				<!-- <div class="alert alert-info">
					<p><?php echo $this->session->flashdata('message'); ?></p>
				</div> -->
				<p><?php echo $this->session->flashdata('message'); ?></p>
				<!-- Main hero unit for a primary marketing message or call to action -->
				<div class="hero-unit">
					<h1>Hello, world!</h1>
					<p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
					<p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
				</div>
				
				<div class="hero-unit">
					<?php if ($this->ion_auth->logged_in()) {
						$this->load->view('custom/template-file/user_details');
					} ?>
				</div>

				<div class="hero-unit">
					<?php if ($this->ion_auth->logged_in()) {
						$this->load->view('custom/template-file/list_user');
					} ?>
				</div>

				<div class="hero-unit">
					<?php if ($this->ion_auth->logged_in()) {
						$this->load->view('custom/template-file/list_group');
					} ?>
				</div>
			</div> <!-- /container -->

<?php $this->load->view('custom/footer'); ?>