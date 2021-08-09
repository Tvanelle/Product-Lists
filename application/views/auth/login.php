</br></br></br></br></br></br><div class="site-section bg-light" id="contact-section" >
      <div class="col-sm-offset-3 container">
        <div class="row justify-content-center text-center"">
        <div class="col-7 text-center mb-5">
          <h3>Se connecter pour continuer la navigation </h3>
          <p></p></hr></br>
          <div id="infoMessage"><?php echo $message;?></div>
        </div>

<?php echo form_open("auth/login");?>

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
  <p><?php echo anchor('auth/create_user','Creer un compte');?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
</div></div></div>