<fieldset id="field-id">
    <legend>Employee Identification</legend>

    <label for="em_type_nice">Position Type:
        <input type="text" name="em_type_nice" id="em_type_nice" readonly 
            value="<?php echo make_nice(@$form_data['em_type']); ?>">
    </label>
    <!-- hidden to preserve em_type but make nice above-->
    <input type="text" name="em_type" id="em_type" readonly hidden
            value="<?php echo @$form_data['em_type']; ?>">             
    
    <label for="fname">Preferred First Name:
    <input type="text" id="fname" name="fname" required value="<?php echo @$form_data['fname']; ?>"></label>

    <label for="lname">Preferred Last Name:
    <input type="text" id="lname" name="lname" required value="<?php echo @$form_data['lname']; ?>"></label>
    
    <label for="title">Title:
    <input type="text" name="title" id="title" required value="<?php echo @$form_data['title']; ?>"></label>

    <label for="Start Date">Start Date:
    <input type="date" name="sdate" id="sdate" required value="<?php echo @$form_data['sdate']; ?>"></label>

    <label for="dept">Department:
    <select name="dept" id="dept" required>
        <option hidden disabled value=""> -- select -- </option>
        <option value="Academic Affairs">Academic Affairs</option>
        <option value="Academic Resources">Academic Resources</option>
        <option value="Board of Trustees">Board of Trustees</option>
        <option value="Business Office">Business Office</option>
        <option value="Business Operations">Business Operations</option>
        <option value="Development Office">Development Office</option>
        <option value="Enrollment Office">Enrollment Office</option>
        <option value="Finance and Administration">Finance and Administration</option>
        <option value="Financial Aid Office">Financial Aid Office</option>
        <option value="Human Resources">Human Resources</option>
        <option value="International Office">International Office</option>
        <option value="IT">IT</option>
        <option value="Lawrence Site">Lawrence Site</option>
        <option value="Marketing & Publications">Marketing & Publications</option>
        <option value="Ontario Site (California)">Ontario Site (California)</option>
        <option value="President Office">President Office</option>
        <option value="Puerto Rico Site">Puerto Rico Site</option>
        <option value="Registrar Office">Registrar Office</option>
        <option value="Research and Evaluation">Research and Evaluation</option>
        <option value="School of Education">School of Education</option>
        <option value="Springfield Site">Springfield Site</option>
        <option value="SRDM">SRDM</option>
        <option value="Student Academic Service Office">Student Academic Service Office</option>
    </select></label>

    <label for="himngr">Hiring Manager:
    <input type="text" name="himngr" id="himngr" required value="<?php echo @$form_data['himngr']; ?>"></label>

    <label for="jenzabarID">Jenzabar ID:
    <input type="number" name="jenzabarID" id="jenzabarID" value="<?php echo @$form_data['jenzabarID']; ?>"></label>

</fieldset>

<script>
    document.getElementById("dept").value = "<?php echo @$form_data['dept']; ?>"    
</script>