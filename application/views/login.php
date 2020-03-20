  <!--Formulaire de connexion-->
  <?php 
    if (isset($message)) 
      echo '<p class="alert alert-danger">'.$message.'</p>';
    echo form_open('welcome/login');
  ?>  
  <section id='form'>
  <section id='form2'>
    <form>
      <fieldset>
        <legend><dt style="color:white">Connexion</dt></legend>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label" for="contact">Utilisateur :</label>
          <input type="text" placeholder="Nom d'utilisateur" name="email" class="form-control col-lg-5" required>
        </div>
        <div class="form-group row">
          <label class="col-sm-3 col-form-label" for="postal">Mot de passe :</label>
          <input type="password" placeholder="Mot de passe" name="password" class="form-control col-lg-5" required>
        </div>
        <!-- Boutons de validation -->
        <div class="col-md-11 text-center"> 
        <button type="submit" class="btn btn-success">Valider</button>
        <!--Bouton de retour tableau-->
        <input type="button" value="Retour" class="btn btn-primary b_middle" onclick="window.location.href='<?= site_url('welcome/home'); ?>'">
        </div>
      </fieldset>
      <?php
     echo form_close();
     ?>
  </section>
  </section>