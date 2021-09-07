<fieldset id="field-shared">
    <legend>Shared Resources</legend>

    <p>These fields will be automatically filled from given information but should be editied to reflect any 
    individual employee's needs.</p>

    <label for="dept-l">Departmental L Drive(s):</label>
    <input type="text" name="dept-l" id="dept-l" value="<?php echo @$form_data['dept-l']; ?>">
    <label for="shared-mail">Shared Mailbox(es):</label>
    <input type="text" name="shared-mail" id="shared-mail" value="<?php echo @$form_data['shared-mail']; ?>">
    <input type="checkbox" name="execu" id="execu" <?php echo (@$form_data['execu']=="on")?"checked":""; ?>>
    <label for="execu">Departmental Executables for Jenzabar</label>    
</fieldset>

<script>
    //autofill L drive mapping based on department drop-down
    document.getElementById("dept").onchange = function() {
        autofillMapping(this, document.getElementById("dept-l"));
    };

    
</script>