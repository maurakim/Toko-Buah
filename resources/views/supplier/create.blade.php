ini create dari view

<form method="POST" 
      action="/Supplier">
      {{ csrf_field() }}
    <input type="text" name="txt_supplier_id" />
    <input type="text" name="txt_supplier_name" />
    <input type="text" name="txt_supplier_address" />

    <input type="submit" 
           name="sbm_save" 
           id="sbm_save" 
           value="save" />
</form>