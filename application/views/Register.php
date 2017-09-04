<?=  form_open(base_url()."register")?>
  <table cellspacing="3" cellpadding="3">
      <tr>
         <td>
             Username</td> <td><?=form_input(array("name"=>"username","value"=>set_value("username")))?>
          </td>
      </tr>
      <tr>
         <td>
            Password</td> <td><?=form_password(array("name"=>"password","value"=>set_value("password")))?>
          </td>
      </tr>
      <tr>
         <td>
           Repeat Password</td> <td><?=form_password(array("name"=>"pass_cof","value"=>set_value("pass_cof")))?>
          </td>
      </tr>
      <tr>
         <td>
             Email</td> <td><?=form_input(array("name"=>"email","value"=>set_value("email")))?>
          </td>
      </tr>
      <tr>
         <td>
             city</td> <td><?=form_input(array("name"=>"city","value"=>set_value("city")))?>
          </td>
      </tr>
      <tr>
         <td>
            <?=form_submit(array("name"=>"submit","value"=>"Register"))?> 
         </td>
      </tr>
       
  </table>

<?= form_close()?>