  <?php
  // Si on est pas connecté, cette page ne doit pas s'afficher
  if (!$this->session->userdata('connected'))
   {
    echo"Vous devez être connecté";  
    exit;
   }
  ?>

<!--Formulaire de mise à jour des données-->
<section id='form'>
<?php 
     echo form_open('welcome/update');
?>
<section id="form2" >
<div class="form-group row">
<label class="col-form-label" for="pro_ref">Référence</label>
<input type="text" class="form-control col-lg-7" name="pro_ref" id="pro_ref" value="<?php echo $produits->pro_ref ?>"><br>
</div>
<div class="form-group row"> 
<label class="col-form-label" for="pro_cat_id">Catégorie</label> 
<select class="form-control col-lg-7" name="pro_cat_id" id="cat" value="<?php echo $produits->pro_id ?>"><br>>
<?php 
// On boucle sur les catégories, et on selectionne celle du produit
foreach ($catid as $categories):
  if ($categories->cat_id == $produits->pro_cat_id) 
    echo '<option value="',$categories->cat_id,'" selected>',$categories->cat_nom,'</option>';
  else
    echo '<option value="',$categories->cat_id,'">',$categories->cat_nom,'</option>';
endforeach;
?>
</select>
</div>
</div>
<div class="form-group row">
<label class="col-form-label" for="pro_libelle">Libéllé</label>
<input type="text" class="form-control col-lg-7" name="pro_libelle" id="pro_libelle" value="<?php echo $produits->pro_libelle ?>"><br>
</div>
<div class="form-group row">
<label class="col-form-label" for="pro_description">Description</label>
<textarea type="text" class="form-control col-lg-7" rows="3" name="pro_description" id="pro_description" value="<?php echo $produits->pro_description ?>"><?php echo $produits->pro_description ?></textarea><br>
</div>
<div class="form-group row">
<label class="col-form-label" for="pro_prix">Prix</label>
<input type="text" class="form-control col-lg-7" name="pro_prix" id="pro_prix" value="<?php echo $produits->pro_prix ?>"><br>
</div>
<div class="form-group row">
<label class="col-form-label" for="pro_stock">Stock</label>
<input type="text" class="form-control col-lg-7" name="pro_stock" id="pro_stock" value="<?php echo $produits->pro_stock ?>"><br>
</div>
<div class="form-group row">
<label class="col-form-label" for="pro_couleur">Couleur</label>
<input type="text" class="form-control col-lg-7" name="pro_couleur" id="pro_couleur" value="<?php echo $produits->pro_couleur ?>"><br>
</div>

<br>
<?php echo form_open_multipart('upload/do_upload');?>
<input type="file" name="pro_photo"/>
<br/>

<p>Produit bloqué :
<?php ($produits->pro_bloque == 1 ? 'checked' : '') ?>
  <label for="1">&nbsp Oui &nbsp</label><input type="radio" name="pro_bloque" id="yes" value="1" required <?php echo ($produits->pro_bloque == 1 ? 'checked' : '') ?>>
  <label for="0" >&nbsp Non &nbsp</label><input type="radio" name="pro_bloque" id="no" value="0" <?php echo ($produits->pro_bloque == 0 ? 'checked' : '') ?>>
<p> Date d'ajout : 
<?php 
  $date = new DateTime($produits->pro_d_ajout);
  echo $date->format('d/m/Y');
?>
</p>
<p> Date de modification : 
<?php 
if (!empty($produits->pro_d_modif))
{
  $date = new DateTime($produits->pro_d_modif);
  echo $date->format('d/m/Y H:i:s');
}
else
  echo 'Jamais modifiée'; ?>
</p>
<input type="hidden" name="pro_id" value="<?= $produits->pro_id?>"><br>
<!--Bouton de modification-->
<input type="submit" value="Modifier" class="btn btn-success b_middle">
<!--Bouton de suppression-->
<input type="button" id="del" value="Supprimer" name="Delete" class="btn btn-danger b_middle">
<!--Bouton de retour tableau-->
<input type="button" value="Retour" class="btn btn-primary b_middle" onclick="window.location.href='<?= site_url('welcome/table'); ?>'">

<?php
     echo form_close();
?>

</section>
</section>


