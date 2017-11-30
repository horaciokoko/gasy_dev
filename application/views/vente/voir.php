<div id="content">

  <table id='datatables' class="display" cellspacing="0" width="100%">
          
    <tbody>

      <tr class="main">
        <th>code_vente</th>
        <td><?php echo $produit['code_vente']; ?></td>
      </tr>
      <tr class="main">
        <th>nom_vendeur</th>
        <td><?php echo $produit['nom_vendeur']; ?></td>
      </tr>
      <tr class="main">
        <th>nom_acheteur</th>
        <td><?php echo $produit['nom_acheteur']; ?></td>
      </tr>
      <tr class="main">
        <th>quantite</th>
        <td><?php echo $produit['quantite']; ?></td>
      </tr>
      <tr class="main">
        <th>prix_unit</th>
        <td><?php echo $produit['prix_unit']; ?></td>
      </tr> 
      <tr class="main">
        <th>prix_totale</th>
        <td><?php echo $produit['prix_totale']; ?></td>
      </tr> 
      <tr class="main">
        <th>date_vente</th>
        <td><?php echo $produit['date_vente']; ?></td>
      </tr>                               
    </tbody>
  </table>
  
<script >
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>

</div>
