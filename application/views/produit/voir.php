<div id="content">
  <table id='datatables' class="display" cellspacing="0" width="100%">
          
    <tbody>

      <tr class="main">
        <th>Num_prod</th>
        <td><?php echo $produit['code_prod']; ?></td>
      </tr>
      <tr class="main">
        <th>Qte</th>
        <td><?php echo $produit['quantite']; ?></td>
      </tr>
      <tr class="main">
        <th>Depense</th>
        <td><?php echo $produit['depense']; ?></td>
      </tr>
      <tr class="main">
        <th>Prix/g</th>
        <td><?php echo $produit['prix_g']; ?></td>
      </tr>
      <tr class="main">
        <th>Recette</th>
        <td><?php echo $produit['recette']; ?></td>
      </tr> 
      <tr class="main">
        <th>Date</th>
        <td><?php echo $produit['date_pro']; ?></td>
      </tr>                               
    </tbody>
  </table>
  
<script >
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>

</div>
