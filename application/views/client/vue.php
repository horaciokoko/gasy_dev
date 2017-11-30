<div id="content">

            <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
            <tr>
                  <th colspan="6"><a class="btn btn-navbar" href='<?php echo site_url("main/client_add")?>'>add</a></th>

                  
              </tr>
              <tr>
                  <th>Num</th>

                  <th>Nom</th>
                  <th>Prénoms</th>
                  <th>Adresse</th>
                  <th>CIN</th>
                  <th>Tel</th>
                  <th>Actions</th>
              </tr>
          </thead>
          
          <tbody>
<?php foreach ($clients as $user): ?>

        
        <tr class="main">
              <td><?php echo $user->num_cli; ?></td>
              <td><?php echo $user->nom_cli; ?></td>
              <td><?php echo $user->prenom_cli; ?></td>
              <td><?php echo $user->adresse; ?></td>
              <td><?php echo $user->cin; ?></td>
              <td><?php echo $user->tel; ?></td>
              <td>
              <a href="<?php echo site_url('main/voir/'.$user->num_cli)?>" class="edit_button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button">Voir</a>

              <a href="<?php echo site_url('main/client_add/'.$user->num_cli)?>" class="edit_button ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" role="button">Edit</a>
              </td>

              
              
        </tr>


<?php endforeach; ?>
</tbody>
  </table>

        </div>

