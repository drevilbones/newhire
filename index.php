<?php

//TODO: test for javascript and bail if not supported

require_once "html/head.php";

?>

<script>
    document.getElementById("saved").style.display = "none";
</script>

<p>To request network login and email accounts as well as technical resources from the IT Department please fill out this form as completely as possible.  This will generate an email to IT for review and processing.  Submitting this request assumes that the appropriate HR paperwork has been completed and signed.</p>

<form action="process.php" method="POST">
    <fieldset id="field-em-choose">
            <legend>Desired Position Type</legend>

            <p>To begin, please fill out the below section. The pull-down option you choose will then determine what IT 
            resources are available for your choice and the rest of the form will be built based on this. If the below 
            data matches a new hire already on file, that employees data will be loaded into the form where appropriate.</p>
        
            <label for="em_type">Desired Position Type:
            <select id="em_type" name="em_type" required>
                <option hidden disabled selected value=""> -- select -- </option>
                <option value="full-time">Full-Time Staff</option>
                <option value="part-time">Part-Time Staff</option>
                <option value="work-study">Work Study</option>
                <option value="online-prog">Online Program</option>
                <option value="tutor">Tutors</option>
                <option value="core-fac">Core Faculty</option>
                <option value="adjunct-fac">Senior/Adjunct Faculty</option>
                <option value="other">Other</option>
            </select></label>

            <label for="fname">Preferred First Name:
            <input type="text" id="fname" name="fname" required></label>

            <label for="lname">Preferred Last Name:
            <input type="text" id="lname" name="lname" required></label>

            <label for="jenzabarID">Jenzabar ID:
            <input type="number" name="jenzabarID" id="jenzabarID" required></label>
            <span class="red">*</span>Provided by HR once paperwork is completed and signed by HR
    </fieldset>

    <input type="submit" name="subButt" id="subButt" value="Continue Form">
</form>

<?php

require_once "html/foot.php";

?>