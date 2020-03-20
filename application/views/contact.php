  <!--Formulaire de contact-->
  <section id='form'>
  <?php 
      echo form_open('welcome/contact');
  ?>

  <section class="card-body" id="form2" >
    <form>
      
      <?php 
  // Langue: Anglais
    if ($this->session->userdata('langue') == 'en')
    {
     echo '      <fieldset>
     <div class="form-group row">
       <label class="col-form-label" for="contact">Contact person :</label>
       <input type="text" class="form-control col-lg-5" required>
     </div>
     <div class="form-group row">
       <label class="col-form-label" for="satiSelect">Address :</label>
         <textarea class="form-control col-sm-5" rows="2" required></textarea>
       </div>
     <div class="form-group row">
       <label class="col-form-label" for="postal">Name:</label>
       <input type="text" class="form-control col-lg-5" required>
     </div>
     <div class="form-group row">
       <label class="col-form-label" for="ville">First name :</label>
       <input type="text" class="form-control col-lg-5" required>
     </div>
     <div class="form-group row">
       <label class="col-form-label" for="mail">E-mail :</label>
       <input type="mail" class="form-control col-lg-5" required>
     </div>
     <div class="form-group row">
       <label class="col-form-label" for="telephone">Phone :</label>
       <input type="text" class="form-control col-lg-5" required>
     </div>
     <!-- Boutons de validation -->
     <div class="col-md-11 text-center"> 
     <button type="submit" class="btn btn-success">Validate</button>
     <button type="reset" class="btn btn-danger">Cancel</button>
     </div>
   </fieldset>';
    }
  // Langue: Anglais
    else if ($this->session->userdata('langue') == 'es')
    {
     echo '      <fieldset>
     <div class="form-group row">
       <label class="col-form-label" for="contact">Persona de contacto :</label>
       <input type="text" class="form-control col-lg-5" required>
     </div>
     <div class="form-group row">
       <label class="col-form-label" for="satiSelect">Dirección :</label>
         <textarea class="form-control col-sm-5" rows="2" required></textarea>
       </div>
     <div class="form-group row">
       <label class="col-form-label" for="postal">Apellido:</label>
       <input type="text" class="form-control col-lg-5" required>
     </div>
     <div class="form-group row">
       <label class="col-form-label" for="ville">Primer nombre :</label>
       <input type="text" class="form-control col-lg-5" required>
     </div>
     <div class="form-group row">
       <label class="col-form-label" for="mail">E-mail :</label>
       <input type="mail" class="form-control col-lg-5" required>
     </div>
     <div class="form-group row">
       <label class="col-form-label" for="telephone">Teléfono :</label>
       <input type="text" class="form-control col-lg-5" required>
     </div>
     <!-- Boutons de validation -->
     <div class="col-md-11 text-center"> 
     <button type="submit" class="btn btn-success">Validar</button>
     <button type="reset" class="btn btn-danger">Cancel</button>
     </div>
   </fieldset>';
    }
  // Langue: Français
   else
    {
     echo '      <fieldset>
     <div class="form-group row">
       <label class="col-form-label" for="contact">Personne à contacter :</label>
       <input type="text" class="form-control col-lg-5" required>
     </div>
     <div class="form-group row">
       <label class="col-form-label" for="satiSelect">Adresse :</label>
         <textarea class="form-control col-sm-5" rows="2" required></textarea>
       </div>
     <div class="form-group row">
       <label class="col-form-label" for="postal">Nom:</label>
       <input type="text" class="form-control col-lg-5" required>
     </div>
     <div class="form-group row">
       <label class="col-form-label" for="ville">Prénom :</label>
       <input type="text" class="form-control col-lg-5" required>
     </div>
     <div class="form-group row">
       <label class="col-form-label" for="mail">E-mail :</label>
       <input type="mail" class="form-control col-lg-5" required>
     </div>
     <div class="form-group row">
       <label class="col-form-label" for="telephone">Téléphone :</label>
       <input type="text" class="form-control col-lg-5" required>
     </div>
     <!-- Boutons de validation -->
     <div class="col-md-11 text-center"> 
     <button type="submit" class="btn btn-success">Valider</button>
     <button type="reset" class="btn btn-danger">Anular</button>
     </div>
   </fieldset>';
    }
      ?>

</form>
  </section>

      <?php
     echo form_close();
?>
  </section>
  
  <!-- Google Map 
  <div id="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2568.4797402597783!2d2.2722867772084974!3d49.92733892475272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e786b33e3719cf%3A0x5fca6cfbcc69e662!2sAFPA!5e0!3m2!1sfr!2sfr!4v1552596812415" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div> -->
