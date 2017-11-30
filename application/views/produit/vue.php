<div id="content">
 <table id="table" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
                  <th colspan="8"><a class="ui-button-text-icon-primary" href='<?php echo site_url("main/produit_add")?>'>add</a></th>
                  
              </tr>
              <tr>
                  <th>Num_prod</th>
                  <th>Qte</th>
                  <th>Depense</th>
                  <th>Prix/g</th>
                  <th>Recette</th>
                  <th>Date</th>
                  <th>Client</th>
                  <th>Action</th>
              </tr>
          </thead>          
          <tbody>
<?php foreach ($produits as $user): ?>

        
        <tr class="main">
              <td><?php echo $user->code_prod; ?></td>
              <td><?php echo $user->quantite; ?></td>
              <td><?php echo $user->depense; ?></td>
              <td><?php echo $user->prix_g; ?></td>
              <td><?php echo $user->recette; ?></td>
              <td><?php echo $user->date_pro; ?></td>
              <td><?php echo $user->Clientnum_cli; ?></td>
              <td><a href="<?php echo site_url('main/voir_prod/'.$user->code_prod)?>" class="edit_button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button">Voir</a>                          
              <a href="<?php echo site_url('main/produit_add/'.$user->code_prod)?>" class="edit_button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button">Edit</a></td>
        </tr>


<?php endforeach; ?>
</tbody>
  </table>
<script >
$(document).ready(function() {
    $('#table').DataTable();
} );

</script>

</div>
