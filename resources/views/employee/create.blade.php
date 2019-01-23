ini create dari view

<form method="POST" 
      action="/Employee">
      {{ csrf_field() }}
    <input type="text" name="txt_employee_id" />
    <input type="text" name="txt_employee_name" />
    <input type="text" name="txt_employee_address" />
    <input type="text" name="txt_employee_phone_number" />
    
    <input type="submit" 
           name="sbm_save" 
           id="sbm_save" 
           value="save" />
</form>