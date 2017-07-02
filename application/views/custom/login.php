<?php $this->load->view('custom/header'); ?>


<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1>LOGIN</h1>
    </div>
    <div class="panel-body">
        <!-- <div class="alert alert-info">
          <p><?php echo $this->session->flashdata('message'); ?></p>
        </div> -->
        <?php echo $this->session->flashdata('message'); ?>
        <?php echo form_open('explore/login_action'); ?>
            <div class="form-group">
              <label for="email">Email address:</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
            <input type="submit" class="btn btn-default" name="login" value="LOGIN">
          <?php echo form_close(); ?>
    </div>
  </div>
</div>



<?php $this->load->view('custom/footer'); ?>











<!-- <h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/my_login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->