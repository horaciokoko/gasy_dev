

        <div id="content" >
            <?php echo validation_errors(); ?>

<?php echo form_open('main/client_add'); ?>
  <table id="example" class="display" cellspacing="0" width="100%">
          
    <tbody>
      <tr class="main">
        <th>N° Client <?php echo form_hidden("typa",'add'); ?></th>
        <td><input type="text" name="num_cli"/></td>
      </tr>
      <tr class="main">
        <th>Nom</th>
        <td><input type="text" name="nom_cli"/></td>
      </tr>
      <tr class="main">
        <th>Prénoms</th>
        <td><input type="text" name="prenom_cli"/></td>
      </tr>
      <tr class="main">
        <th>Adresse</th>
        <td><input type="text" name="adresse"/></td>
      </tr>
      <tr class="main">
        <th>CIN</th>
        <td><input type="text" name="cin"/></td>
      </tr>
      <tr class="main">
        <th>Tel</th>
        <td><input type="text" name="tel"/></td>
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

        </div>
  
