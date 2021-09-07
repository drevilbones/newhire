<?php

//error_reporting(E_ALL); //TODO: comment these lines when done debugging
//ini_set('display_errors', 1);

require_once "config.php";
require_once "utils.php";

if (isset($_GET["f"])) { //if we have a filename, open it
    $form_data = open_file("data/" . $_GET["f"] . ".json");
    $form_data['subButt'] = "NONE";
    if (isset($_GET["review"])) { $form_data['subButt'] = "Submit to IT"; }
} else if (!empty($_POST)) { //if we have post data
    $form_data = $_POST;
    $filename = "data/" . $form_data['fname'] . $form_data['lname'] . $form_data['jenzabarID'] . ".json";
    if ($form_data['subButt'] == "Save" || $form_data['subButt'] == "Submit to IT") {
        $form_data['subButt'] = "Saved";
        if (!write_file($filename, $form_data)) {
            //TODO: allow people to save even if they haven't filled all required fields
            die("Something happened when trying to write the file."); //TODO: real error handling
        }
        if ($form_data['subButt'] == "Submit to IT") { 
            if (!send_email(build_it_email($form_data))) {
                die("There was an error sending the IT notification.");
            }
            if (!send_email(build_manager_email($form_data))) {
                die("There was an error sending the manager notification.");
            }            
        }
    } else if ($_POST['subButt'] == "Continue Form") { //if we're coming from the beginning
        //look for a file based on the data given
        $form_data = open_file($filename);
        if (!$form_data) { //if we don't find one then fill in some info
            $form_data = $_POST;
            $form_data['desired_login'] = $form_data['fname'].".".$form_data["lname"];
            $form_data['desired_email'] = $form_data['desired_login'] . "@cambridgecollege.edu";
         }
    } else {
        die("Undefined error");
    }
} else { //if we have neither, redirect to index
    header('Location: index.php', true, 303);
    die();
}

//sanitize
array_walk_recursive($form_data, 'sanitize');

require_once "html/head.php";

?>

    <form action="process.php" method="POST">

<?php 

//build the form
if ($form_data['subButt'] == "Submit to IT") {
    require_once "html/submitted.php";
}

$emtype = $form_data['em_type'];
require_once "html/field-id.php";
require_once "html/field-login.php";
if ($emtype == 'work-study' || $emtype == 'full-time') {
    require_once "html/field-hardware.php";
}
if ($emtype == 'full-time') {
    require_once "html/field-software.php";
    require_once "html/field-shared.php";
}
require_once "html/field-notes.php";

?>

        <input type="submit" name="subButt" id="subButt" value="Save" >
        <input type="submit" name="subButt" id="sendButt" value="Submit to IT">

    </form>

    <script src="dynamic.js"></script>
    <script>
        <?php if ($form_data['subButt'] == "Saved") { ?>
            document.getElementById('saved').style.opacity = '0';
        <?php } else { ?>
            document.getElementById('saved').style.display = 'none';
        <?php } 
        
        if ($form_data['subButt'] == "Submit to IT") { ?>
            makeRO(document.getElementsByTagName('fieldset'));
            document.getElementById("subButt").style.display = "none";
            document.getElementById("sendButt").style.display = "none";
        <?php } ?>
    </script>

<?php

//dumper($_POST);
//dumper($form_data); //TODO: comment when done debugging

require_once "html/foot.php";

?>
