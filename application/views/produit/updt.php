<div id="content">
 <?php echo validation_errors(); ?>

<?php echo form_open('main/produit_add'); ?>
  <table id="example" class="display" cellspacing="0" width="100%">
          
    <tbody>
      <tr class="main">
        <th>N° Produit <?php echo form_hidden("typa",'updt'); ?></th>
        <td><?php echo form_input(array('type' => "text",'name'=> "code_prod",'readonly'=> "readonly",'value'=> $produit['code_prod'])); ?></td>
      </tr>
      <tr class="main">
        <th>Client </th>
        <td><?php $produit['Clientnum_cli']; echo form_dropdown('Clientnum_cli', $clients,array($place)); ?></td>
      </tr>
      <tr class="main">
        <th>Qte</th>
        <td><?php echo form_input(array('type' => "text",'name'=> "quantite",'value'=> $produit['quantite'])); ?></td>
      </tr>
      <tr class="main">
        <th>Prix/g</th>
        <td><?php echo form_input(array('type' => "text",'name'=> "prix_g",'value'=> $produit['prix_g'])); ?></td>
      </tr>
      <tr class="main">
        <th>Depense</th>
        <td><?php echo form_input(array('type' => "text",'name'=> "depense",'value'=> $produit['depense'])); ?></td>
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
