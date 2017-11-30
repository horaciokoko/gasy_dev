<div id="content">
  <table class="display" cellspacing="0" width="100%">
          
    <tbody>

      <tr class="main">
        <th>Nom</th>
        <td><?php echo $client['nom_cli']; ?></td>
      </tr>
      <tr class="main">
        <th>Prénoms</th>
        <td><?php echo $client['prenom_cli']; ?></td>
      </tr>
      <tr class="main">
        <th>Adresse</th>
        <td><?php echo $client['adresse']; ?></td>
      </tr>
      <tr class="main">
        <th>CIN</th>
        <td><?php echo $client['cin']; ?></td>
      </tr>
      <tr class="main">
        <th>Tel</th>
        <td><?php echo $client['tel']; ?></td>
      </tr>                               
    </tbody>
  </table>

  <table id="example" class="display" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th>Num_prod</th>
                  <th>Qte</th>
                  <th>Depense</th>
                  <th>Prix/g</th>
                  <th>Recette</th>
                  <th>Date</th>
              </tr>
          </thead>          
          <tbody>
<?php foreach ($produits as $user): ?>

        
        <tr class="main">
              <td><?php echo $user['code_prod']; ?></td>
              <td><?php echo $user['quantite']; ?></td>
              <td><?php echo $user['depense']; ?></td>
              <td><?php echo $user['prix_g']; ?></td>
              <td><?php echo $user['recette']; ?></td>
              <td><?php echo $user['date_pro']; ?></td>

              
              
        </tr>


<?php endforeach; ?>
 
</tbody>
</table>

<a href='<?php echo site_url("main/pay_add/".$client['num_cli'])?>'>Effectuer payement</a> 

<table id="pays" class="display" cellspacing="0" width="100%">
  <thead>
      <tr>
          <th>Num_pay</th>
          <th>Date</th>
          <th >montant</th>                 
      </tr>
  </thead>          
  <tbody>
    <?php foreach ($payement as $user): ?>

            
            <tr class="main">
                  <td><?php echo $user['num_payement']; ?></td>
                  <td><?php echo $user['date_payement']; ?></td>
                  <td ><?php echo $user['montant']; ?></td>                                  
            </tr>


    <?php endforeach; ?>
    
</tbody>
  </table>

<table id="pays" class="display" cellspacing="0" width="100%">
          
  <tbody>
      <tr class="main">       
      <td >Total recette</td>
      <td><?php echo $total_r; ?></td>
    </tr>
      <td >Total Payement</td>
      <td ><?php echo $total_p; ?></td>
    </tr>
    </tr>
      <td >Solde restant</td>
      <td ><?php echo ($total_r-$total_p); ?></td>
    </tr>
  </tbody>
</table>
<script >
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
<script >
$(document).ready(function() {
    $('#pays').DataTable();
} );

</script>

</div>
