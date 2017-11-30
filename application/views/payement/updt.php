<div id="content">

 <?php echo validation_errors(); ?>

<?php echo form_open('main/pay_updt'); ?>
  <table id="example" class="display" cellspacing="0" width="100%">
          
    <tbody>
      <tr class="main">
        <th>Client</th>
        <td><input type="text" name="num_cli" value="<?php echo $pay['Clientnum_cli'];?>" readonly='readonly' /></td>
      </tr>
      <tr class="main">
        <th>N° Payement <?php echo form_hidden("typa",'updt'); ?></th>
        <td><input type="text" name="num_payement" value="<?php echo $pay['num_payement'];?>" readonly='readonly'/></td>
      </tr>
      
      <tr class="main">
        <th>montant(Ar)</th>
        <td><input type="text" name="montant" value="<?php echo $pay['montant'];?>" /> <?php echo "Solde actuel:".$solde  ?> </td>
      </tr>
      <tr class="main">
        <th>Date payement</th>
        <td><input type="date" name="date_payement" value="<?php echo $pay['date_payement'];?>"/></td>
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
