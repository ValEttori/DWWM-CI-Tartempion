  <!--Formulaire d'enregistrement-->
  <?php if (isset($message)) 
    echo '<p class="alert alert-danger">'.$message.'</p>';
  ?>
  <section id='form'>
  <section id='form2'>
  <?php 
     echo form_open('welcome/register');
     ?>
      <fieldset>
        <legend><dt style="color:white">Inscription</dt></legend>
        <div class="form-group row">
          <label class="col-sm-8 col-form-label">Entrez un nom d'utilisateur :</label>
          <input type="text" placeholder="Nom d'utilisateur" name="email" class="form-control col-lg-5" required>
        </div>
        <div class="form-group row">
          <label class="col-sm-8 col-form-label">Choisissez un mot de passe :</label>
          <input type="password" placeholder="Mot de passe" name="password" class="form-control col-lg-5" required>
        </div>
        <div class="form-group row">
          <label class="col-sm-8 col-form-label">Confirmez votre mot de passe :</label>
          <input type="password" placeholder="Mot de passe" name="confirm_password" class="form-control col-lg-5" required>
        </div>
        <!-- Boutons de validation -->
        <div class="col-md-11 text-center"> 
        <button type="submit" class="btn btn-success">Valider</button>
        <button type="reset" class="btn btn-danger">Annuler</button>
        <!--Bouton de retour tableau-->
        <input type="button" value="Retour" class="btn btn-primary b_middle" onclick="window.location.href='<?= site_url('welcome/home'); ?>'">
        </div>
      </fieldset>
      <?php
     echo form_close();
     ?>
  </section>
</section>