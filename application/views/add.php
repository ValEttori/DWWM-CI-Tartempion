<?php
  // Si on est pas connecté, cette page ne doit pas s'afficher
   if (!$this->session->userdata('connected'))
   {
    echo"Vous devez être connecté";  
    exit;
   }
?>
<!--Page pour l'ajout de données dans le tableau-->
<section id='form'>
<!-- Génération du formulaire -->
<?php 
     echo form_open('welcome/add');
?>

<section id="form2" >
<div class="form-group row">
</div>
<div class="form-group row">
<label class="col-form-label" for="pro_ref">Référence</label>
<input type="text" class="form-control col-lg-7" name="pro_ref" id="pro_ref">
</div>
<div class="form-group row"> 
<label class="col-form-label" for="pro_cat_id">Catégorie</label> 
<select class="form-control col-lg-7" name="pro_cat_id" id="pro_cat_id">
<?php 
// Boucle sur les catégories pour affichage du menu déroulant
foreach ($catid as $categories):
  echo '<option value="'.$categories->cat_id.'">'.$categories->cat_nom.'</option>';
endforeach;
?>
</select>
</div>
<div class="form-group row">
<label class="col-form-label" for="pro_libelle">Libéllé</label>
<input type="text" class="form-control col-lg-7" name="pro_libelle" id="pro_libelle" required>
</div>
<div class="form-group row">
<label class="col-form-label" for="pro_description">Description</label>
<textarea class="form-control col-lg-7" rows="3" name="pro_description" id="pro_description"></textarea>
</div>
<div class="form-group row">
<label class="col-form-label" for="pro_prix">Prix</label>
<input type="text" class="form-control col-lg-7" name="pro_prix" id="pro_prix" required>
</div>
<div class="form-group row">
<label class="col-form-label" for="pro_stock">Stock</label>
<input type="text" class="form-control col-lg-7" name="pro_stock" id="pro_stock" required>
</div>
<div class="form-group row">
<label class="col-form-label" for="pro_couleur">Couleur</label>
<input type="text" class="form-control col-lg-7" name="pro_couleur" id="pro_couleur">
</div>
<!-- Boutons radio de bloquage des produits -->
<p>Produit bloqué : 
  <label for="1">&nbsp Oui &nbsp</label><input type="radio" name="pro_bloque" id="yes" value="1" required>
  <label for="0" >&nbsp Non &nbsp</label><input type="radio" name="pro_bloque" id="no"  value="0"></p>
<!--Bouton d'ajout-->
<button id= "add" type="submit" value="Ajouter" class="btn btn-success b_middle">Ajouter</button>
<!--Bouton de retour tableau-->
<input type="button" value="Retour" class="btn btn-primary b_middle" onclick="window.location.href='<?= site_url('welcome/table'); ?>'">
<?php
    echo form_close();
?>
</section>
</section>