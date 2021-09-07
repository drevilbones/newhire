<fieldset id="field-hardware">
            <legend>Hardware</legend>

            <div id="div-computer-radios">
                <div id="com-new-div">
                <label for="com-new"><input type="radio" name="computer" id="com-new" value="com-new">New Computer</label></div>
                <label for="com-exist">
                    <input type="radio" name="computer" id="com-exist" value="com-exist">Existing Computer
                </label>
                <label for="com-none">
                    <input type="radio" name="computer" id="com-none" value="com-none">Does Not Need Computer
                </label>
            </div>

            <div id="com-exist-div">
                <label for="com-exist-name">Previous Computer User:
                <input type="text" name="com-exist-name" id="com-exist-name"
                value="<?php echo @$form_data['com-exist-name']; ?>"></label>
            </div>

            <div id="div-phone-radios">
                <div id="phone-new-div">
                <label for="phone-new">
                    <input type="radio" name="phone" id="phone-new" value="phone-new">New Phone
                </label></div>    
                <label for="phone-exist">
                    <input type="radio" name="phone" id="phone-exist" value="phone-exist">Existing Phone
                </label>                    
                <label for="phone-none">
                    <input type="radio" name="phone" id="phone-none" value="phone-none">Does Not Need Phone
                </label>
            </div>                    

            <div id="phone-exist-div">
                <label for="phone-exist-ext">Existing Phone Extension:
                <input type="text" name="phone-exist-ext" id="phone-exist-ext"
                    value="<?php echo @$form_data['phone-exist-ext']; ?>"></label>
            </div>
</fieldset>

<script>
    //make work study new hardware options vanish
    if ("<?php echo @$form_data['em_type']; ?>" == "work-study") {
        document.getElementById("com-new-div").style.display = "none";
        document.getElementById("phone-new-div").style.display = "none";
    }

    //filling in data from saved file if we have it, if not this line will be blank
    <?php if (!empty($form_data['computer'])) { ?>
    document.getElementById("<?php echo @$form_data['computer'];?>").checked = true;
    document.getElementById("com-exist-div").style.display = 
        ("<?php echo @$form_data['computer']; ?>" == "com-exist") ? "block":"none";
    document.getElementById("<?php echo @$form_data['phone'];?>").checked = true;
    document.getElementById("phone-exist-div").style.display = 
        ("<?php echo @$form_data['phone']; ?>" == "phone-exist") ? "block":"none";
    <?php } ?>

    //display text input for existing computer user and mark as required
    document.getElementById("div-computer-radios").onclick = function() {
        testForToggle(this.querySelector('input:checked').value, 'com-exist', document.getElementById('com-exist-div'));
        if (document.getElementById('com-exist-div').style.display == "none") {
            document.getElementById('com-exist-name').required = false;
        } else {
            document.getElementById('com-exist-name').required = true;
        }
    };

    //display text input for existing phone extension and mark as required
    document.getElementById("div-phone-radios").onclick = function() {
        testForToggle(this.querySelector('input:checked').value, 'phone-exist', document.getElementById('phone-exist-div'));
        if (document.getElementById('phone-exist-div').style.display == "none ") {
            document.getElementById('phone-exist-ext').required = false;
        } else {
            document.getElementById('phone-exist-ext').required = true;
        }
    };        
</script>
