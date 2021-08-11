</br></br></br></br></br></br><div class="site-section bg-light" id="contact-section" >
      <div class="col-sm-offset-3 container">
        <div class="row justify-content-center text-center"">
        <div class="col-7 text-center mb-5">
          <h4>Creer gratuitement votre compte pour continuer la navigation </h4>
          
          <p></p></hr></br>
          <div id="infoMessage"><?php var_dump(form_error('password'))//$_SESSION["emailMaker"];?></div>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >
          <?php echo form_open("auth/create_user");?>
      <div class="form-group">
           <div class="">
            <?php echo form_input($first_name);?>
            </div>
      </div>
      
      <div class="form-group">
           <div class="">
            <?php echo form_input($last_name);?> 
            </div>
      </div>

      <div class="form-group">
           <div class="">
            <?php echo form_input($phone);?>
            </div>
      </div>
       
      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo ('Entrer votre adresse email');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>

      <div class="form-group">
           <div class="">
            <?php echo form_input($company);?>
            </div>
      </div>
            
      <div class="form-group">
           <div class="">
            <?php echo form_input($email);?>
            </div>
      </div>

      <div class="form-group">
           <div class="">
           <?php echo ('Entrer un mot de passe');?> <br />
            <?php echo form_input($password);?>
            </div>
      </div>
      <div class="form-group">
           <div class="">
           <?php echo ('Confirmez le mot de passe');?> <br />
            <?php echo form_input($password_confirm);?>
            </div>
      </div>
      
      <p><?php echo form_submit('submit', 'Creer un compte');?></p>
      <p><?php echo anchor('auth/login', 'Se connecter');?></p>
      </div>
<?php echo form_close();?>

        </div>
      </div>
    </div><br /><br /><br /><br /><br /><br />

