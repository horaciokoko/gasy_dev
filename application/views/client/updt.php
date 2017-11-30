<div id="content">
 <?php echo validation_errors(); ?>

<?php echo form_open('main/client_add'); ?>
  <table id="example" class="display" cellspacing="0" width="100%">
          
    <tbody>
      <tr class="main">
        <th>N° Client <?php echo form_hidden("typa",'updt'); ?></th>
        <td><?php echo form_input(array('type' => "text",'name'=> "num_cli",'readonly'=> "readonly",'value'=> $client['num_cli'])); ?></td>
      </tr>
      <tr class="main">
        <th>Nom</th>
        <td><?php echo form_input(array('type' => "text",'name'=> "nom_cli",'value'=> $client['nom_cli'])); ?></td>
      </tr>
      <tr class="main">
        <th>Prénoms</th>
        <td><?php echo form_input(array('type' => "text",'name'=> "prenom_cli",'value'=> $client['prenom_cli'])); ?></td>
      </tr>
      <tr class="main">
        <th>Adresse</th>
        <td><?php echo form_input(array('type' => "text",'name'=> "adresse",'value'=> $client['adresse'])); ?></td>
      </tr>
      <tr class="main">
        <th>CIN</th>
        <td><?php echo form_input(array('type' => "text",'name'=> "cin",'value'=> $client['cin'])); ?></td>
      </tr>
      <tr class="main">
        <th>Tel</th>
        <td><?php echo form_input(array('type' => "text",'name'=> "tel",'value'=> $client['tel'])); ?></td>
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
