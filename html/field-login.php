<fieldset id="field-login">
    <legend>Network Login and Email Accounts</legend>

    <p>The information provided above in the First Name and Last Name fields will be used to create the user’s 
    network login account and email address. Please note that it is up to the hiring manager to let IT 
    know what the new user’s preference is for each account created.  For example, William Harrison may prefer
     to have his network login account read as Bill.Harrison and his email address read as 
     Bill.Harrison@cambridgecollege.edu.</p>
    <p>The information below illustrates what the login and email will be based on the information above. Please 
    edit First Name and Last Name above to alter these fields.</p>

    <label for="desired_login">Network (SSO) Login:
    <input type="text" name="desired_login" id="desired_login" readonly
        value="<?php echo @$form_data['desired_login']; ?>">
    </label>
    <label for="desired_email">Email address:
        <input type="text" name="desired_email" id="desired_email" readonly
        value="<?php echo @$form_data['desired_email']; ?>">
    </label>
</fieldset>

<script>
    //autofill login name based on f and l names
    document.getElementById("fname").oninput = function() {autofillLogin();};
    document.getElementById("lname").oninput = function() {autofillLogin();};
</script>
