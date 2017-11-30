<div id="content">

 <?php echo validation_errors(); ?>

<?php echo form_open('main/pay_add'); ?>
  <table id="example" class="display" cellspacing="0" width="100%">
          
    <tbody>
      <tr class="main">
        <th>Client</th>
        <td><input type="text" name="num_cli" value="<?php echo $id_cli;?>" readonly='readonly' /></td>
      </tr>
      <tr class="main">
        <th>N° Payement <?php echo form_hidden("typa",'add'); ?></th>
        <td><input type="text" name="num_payement"/></td>
      </tr>
      
      <tr class="main">
        <th>montant(Ar)</th>
        <td><input type="text" name="montant"/> <?php echo "Solde actuel:".$solde  ?> </td>
      </tr>
      <tr class="main">
        <th>Date payement</th>
        <td><input type="date" name="date_payement"/></td>
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
