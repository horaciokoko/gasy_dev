<div id="content">
 <?php echo validation_errors(); ?>

<?php echo form_open('main/vente_maj'); ?>
  <table id="example" class="display" cellspacing="0" width="100%">
          
    <tbody>
      <tr class="main">
        <th>CODE VENTE<?php echo form_hidden("typa",'add'); ?></th>
        <td><input type="text" name="code_vente"/></td>
      </tr>
      <tr class="main">
        <th>NOM VENDEUR</th>
        <td><input type="text" name="nom_vendeur"/></td>
      </tr>
      <tr class="main">
        <th>nom_acheteur</th>
        <td><input type="text" name="nom_acheteur"/></td>
      </tr>
      <tr class="main">
        <th>quantite</th>
        <td><input type="text" name="quantite"/></td>
      </tr>
      <tr class="main">
        <th>prix_unitaire</th>
        <td><input type="text" name="prix_unitaire"/></td>
      </tr>
      <!--tr class="main">
        <th>prix_total</th>
        <td><input type="text" name="prix_total"/></td>
      </tr-->
      <tr class="main">
        <th>date_vente</th>
        <td><input type="date" name="date_vente"/></td>
      </tr>
      
      <tr class="main">
        
        <td colspan="2"><?php
        $data=array(
          'name'          => 'btn_save',
          'id'            => 'btn_save',
          'value'         => 'true',
          'type'          => 'submit',
          'content'       => 'save'
        );
         echo form_button($data); ?></td>
      </tr>                             
    </tbody>
  </table>
  
<script >
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>

</div>
