<div id="content">
 <?php echo validation_errors(); ?>

<?php echo form_open('main/produit_add'); ?>
  <table id="example" class="display" cellspacing="0" width="100%">
          
    <tbody>
      <tr class="main">
        <th>N° produit <?php echo form_hidden("typa",'add'); ?></th>
        <td><input type="text" name="code_prod"/></td>
      </tr>
      <tr class="main">
        <th>Client</th>
        <td><?php echo form_dropdown('Clientnum_cli', $clients);
 ?></td>
      </tr>
      <tr class="main">
        <th>Qte</th>
        <td><input type="text" name="quantite"/></td>
      </tr>
      <tr class="main">
        <th>prix/g</th>
        <td><input type="text" name="prix_g"/></td>
      </tr>
      <tr class="main">
        <th>depense</th>
        <td><input type="text" name="depense"/></td>
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
