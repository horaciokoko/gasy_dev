  <div id="content">
  
    <table id="pays" class="display" cellspacing="0" width="100%">
  <thead>
      
      <tr>
          <th>Num_pay</th>
          <th>Date</th>
          <th >montant</th>  
          <th >Client</th> 
          <th >Actions</th>                 
      </tr>
  </thead>          
  <tbody>
    <?php foreach ($pays as $user): ?>

            
            <tr class="main">
                  <td><?php echo $user->num_payement; ?></td>
                  <td><?php echo $user->date_payement; ?></td>
                  <td ><?php echo $user->montant; ?></td>                                  
                  <td ><a class="ui-button-text-icon-primary" href='<?php echo site_url("main/voir/".$user->Clientnum_cli)?>'><?php echo $user->Clientnum_cli; ?></a></td>
                  <th colspan="8"><a class="ui-button-text-icon-primary" href='<?php echo site_url("main/pay_updt/".$user->num_payement)?>'>Edit</a></th>
            </tr>


    <?php endforeach; ?>
    
</tbody>
  </table>
<script >
$(document).ready(function() {
    $('#pays').DataTable();
} );

</script>

</div>
