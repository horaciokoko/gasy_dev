<div id="content">
 <table id="table" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
                  <th colspan="8"><a class="ui-button-text-icon-primary" href='<?php echo site_url("main/vente_maj")?>'>add</a></th>
                  
              </tr>
              <tr>
                  <th>CODE VENTE</th>
                  <th>NOM ACHETEUR</th>
                  <th>NOM VENDEUR</th>
                  <th>QUANTITE</th>
                  <th>PRIX UNITAIRE</th>
                  <th>PRIX TOTALE</th>
                  <th>DATE VENTE</th> 
                  <th>ACTIONS</th>                   
              </tr>
          </thead>          
          <tbody>
<?php foreach ($ventes as $user): ?>

        
        <tr class="main">
              <td><?php echo $user->code_vente; ?></td>
              <td><?php echo $user->nom_acheteur; ?></td>
              <td><?php echo $user->nom_vendeur; ?></td>
              <td><?php echo $user->quantite; ?></td>
              <td><?php echo $user->prix_unit; ?></td>
              <td><?php echo $user->prix_totale; ?></td>
              <td><?php echo $user->date_vente; ?></td>
              <td><a href="<?php echo site_url('main/voir_vente/'.$user->code_vente)?>" class="edit_button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button">Voir</a>                          
              <a href="<?php echo site_url('main/vente_maj/'.$user->code_vente)?>" class="edit_button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button">Edit</a></td>
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
