<fieldset id="field-jenz-acc">
    <legend>Jenzabar Access</legend>

    <p>Note that permission to each of these modules is granted by the respective module 
        managers – not the IT Department.</p>

    <div id="jenz-mod-div1">
        <label for="jenz-reg"><input type="checkbox" name="jenz-reg" id="jenz-reg" <?php echo (@$form_data['jenz-reg']=="on")?"checked":""; ?>>
            Registration (Student Information)</label>
        <label for="jenz-reg-r"><input type="checkbox" name="jenz-reg-r" id="jenz-reg-r" <?php echo (@$form_data['jenz-reg-r']=="on")?"checked":""; ?>>
            Read Permissions</label>
        <label for="jenz-reg-w"><input type="checkbox" name="jenz-reg-w" id="jenz-reg-w" <?php echo (@$form_data['jenz-reg-w']=="on")?"checked":""; ?>>
            Write Permissions</label>
    </div>
    <div id="jenz-mod-div2">
            <label for="jenz-biz"><input type="checkbox" name="jenz-biz" id="jenz-biz" <?php echo (@$form_data['jenz-biz']=="on")?"checked":""; ?>>
                Business Office (Student Accounts)</label>
            <label for="jenz-biz-r"><input type="checkbox" name="jenz-biz-r" id="jenz-biz-r" <?php echo (@$form_data['jenz-biz-r']=="on")?"checked":""; ?>>
                Read Permissions</label>
            <label for="jenz-biz-w"><input type="checkbox" name="jenz-biz-w" id="jenz-biz-w" <?php echo (@$form_data['jenz-biz-w']=="on")?"checked":""; ?>>
                Write Permissions</label>
    </div>
    <div id="jenz-mod-div3">
            <label for="jenz-finaid"><input type="checkbox" name="jenz-finaid" id="jenz-finaid" <?php echo (@$form_data['jenz-finaid']=="on")?"checked":""; ?>>
                Financial Aid (Student Aid Details)</label>
            <label for="jenz-finaid-r"><input type="checkbox" name="jenz-finaid-r" id="jenz-finaid-r" <?php echo (@$form_data['jenz-finaid-r']=="on")?"checked":""; ?>>
                Read Permissions</label>            
            <label for="jenz-finaid-w"><input type="checkbox" name="jenz-finaid-w" id="jenz-finaid-w" <?php echo (@$form_data['jenz-finaid-w']=="on")?"checked":""; ?>>
                Write Permissions</label>
    </div>
    <div id="jenz-mod-div4">
            <label for="jenz-admiss"><input type="checkbox" name="jenz-admiss" id="jenz-admiss" <?php echo (@$form_data['jenz-admiss']=="on")?"checked":""; ?>>
                Admissions (Applicant Information)</label>
            <label for="jenz-admiss-r"><input type="checkbox" name="jenz-admiss-r" id="jenz-admiss-r" <?php echo (@$form_data['jenz-admiss-r']=="on")?"checked":""; ?>>
                Read Permissions</label>
            <label for="jenz-admiss-w"><input type="checkbox" name="jenz-admiss-w" id="jenz-admiss-w" <?php echo (@$form_data['jenz-admiss-w']=="on")?"checked":""; ?>>
                Write Permissions</label>
    </div>
    <div>
            <label for="jenz-starfish"><input type="checkbox" name="jenz-starfish" id="jenz-starfish" <?php echo (@$form_data['jenz-starfish']=="on")?"checked":""; ?>>
                Starfish</label>
    </div>
    
</fieldset>

<script>
    if (jenz_toggle) { document.getElementById("field-jenz-acc").style.display = 'block'; }
</script>