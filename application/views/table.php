<!--Bouton d'ajout de produit-->
    <?php 
     // Si on est connecté, on affiche le bouton d'ajout
     if ($this->session->userdata('connected')) {
      echo form_open('welcome/add');   

  // Langue: Anglais
    if ($this->session->userdata('langue') == 'en')
    {
     echo '<input type="submit" value="Add" class="btn btn-primary b_middle">';
    }
  // Langue: Espagnol
   else if ($this->session->userdata('langue') == 'es')
    {
     echo '<input type="submit" value="Añadir" class="btn btn-primary b_middle">';
    }  
  // Langue: Français
    else
    {
     echo '<input type="submit" value="Ajouter" class="btn btn-primary b_middle">';
    }
     echo form_close();
    }
    ?>

     <table>
     <thead>
     <tr>
     <?php 
  // Langue: Anglais
    if ($this->session->userdata('langue') == 'en')
    {
     echo ' <th>Photo</th>
     <th>&nbsp ID &nbsp</th>
     <th>Reference</th>
     <th>Wording</th>
     <th>Price</th>
     <th>Stock</th>
     <th>Color</th>
     <th>Adding</th>
     <th>Edit</th>
     <th>Block</th>';
    }
  // Langue: Espagnol
   else if ($this->session->userdata('langue') == 'es')
   {
    echo ' <th>Foto</th>
    <th>&nbsp ID &nbsp</th>
    <th>Referenci</th>
    <th>Libelle</th>
    <th>Precio</th>
    <th>Valores</th>
    <th>Color</th>
    <th>Añadiendo</th>
    <th>Editar</th>
    <th>Bloques</th>';
   }
  // Langue: Français
   else
    {
     echo ' <th>Photo</th>
     <th>&nbsp ID &nbsp</th>
     <th>Référence</th>
     <th>Libéllé</th>
     <th>Prix</th>
     <th>Stock</th>
     <th>Couleur</th>
     <th>Ajout</th>
     <th>Modif</th>
     <th>Bloque</th>';
    }
      ?>
     </tr>
     </thead>

     <tbody>
     <?php 
     // On boucle sur la liste des produits
     foreach ($liste_produits as $row): ?>
     <tr>
     <!-- Libellés des photos référencés -->
     <td><img src="<?= base_url('assets/Img/photo/'); ?><?= $row->pro_id?>.<?= $row->pro_photo ?>" title="photo" id="photo" alt="<?= $row->pro_libelle ?>"></td>
     <?php 
     // Si on est connecté, on affiche le bouton de modification
     if ($this->session->userdata('connected')) 
      echo '<td><input type="button" value="'.$row->pro_id.'" class="btn btn-primary b_middle" onclick="window.location.href=\''.site_url('welcome/update/'.$row->pro_id).'\'"></td>';
     // Si non connecté, on affiche uniquement l'ID du produit
     else
       echo '<td>'.$row->pro_id.'</td>';
     ?>
     <td><?= $row->pro_ref ?></td>
     <td><?= $row->pro_libelle ?></td>
     <td><?= $row->pro_prix ?></td>
     <td><?= $row->pro_stock ?></td>
     <td><?= $row->pro_couleur ?></td>
     <td><?php $date = new DateTime($row->pro_d_ajout);
     echo $date->format('d/m/Y');
     ?></td> 
     <td><?php 
     // Si la date de modificzation est renseignée
     if (!empty($row->pro_d_modif))
     {
      $date = new DateTime($row->pro_d_modif);
      echo $date->format('d/m/Y H:i:s');
     }
     else
       echo 'Jamais modifiée';
     ?></td>
     <td><?php if($row->pro_bloque == 1){
        echo 'Oui';
        } 
        else{
        echo 'Non';
        }
     ?>
     </td>
     </tr>
     <?php 
     // Fin de boucle
    endforeach; ?>

 </tbody>
 </table>

