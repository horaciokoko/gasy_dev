<div id="content">
 <?php echo validation_errors(); ?>

<?php echo form_open('main/vente_maj'); ?>
  <table id="example" class="display" cellspacing="0" width="100%">
          
    <tbody>
      <tr class="main">
        <th>code_vente <?php echo form_hidden("typa",'updt'); ?></th>
        <td><?php echo form_input(array('type' => "text",'name'=> "code_vente",'readonly'=> "readonly",'value'=> $vente['code_vente'])); ?></td>
      </tr>
      
      <tr class="main">
        <th>nom_vendeur</th>
        <td><?php echo form_input(array('type' => "text",'name'=> "nom_vendeur",'value'=> $vente['nom_vendeur'])); ?></td>
      </tr>
      <tr class="main">
        <th>nom_acheteur</th>
        <td><?php echo form_input(array('type' => "text",'name'=> "nom_acheteur",'value'=> $vente['nom_acheteur'])); ?></td>
      </tr>
      <tr class="main">
        <th>quantite</th>
        <td><?php echo form_input(array('type' => "text",'name'=> "quantite",'value'=> $vente['quantite'])); ?></td>
      </tr>
      <tr class="main">
        <th>prix_unitaire</th>
        <td><?php echo form_input(array('type' => "text",'name'=> "prix_unitaire",'value'=> $vente['prix_unit'])); ?></td>
      </tr>
      <tr class="main">
        <th>prix_totale</th>
        <td><?php echo form_input(array('type' => "text",'name'=> "prix_totale",'readonly'=> "readonly",'value'=> $vente['prix_totale'])); ?></td>
      </tr>
      <tr class="main">
        <th>date_vente</th>
        <td><?php echo form_input(array('type' => "date",'name'=> "date_vente",'value'=> $vente['date_vente'])); ?></td>
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
