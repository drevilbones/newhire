<?php

//returns data from json encoded text file if it exists
//returns false if not
function open_file($filename) { 
    
    $filename = strtolower($filename);
    $data = false;
    $openfile = fopen($filename, "r");
    if ($openfile) {
        $data = json_decode(fread($openfile, filesize($filename)), true);
        fclose($openfile);
    }
    
    return $data;
}

//writes data to a file, returns false on error
function write_file($filename, $data) {

    $filename = strtolower($filename);
    $success = false;
    $openfile = fopen($filename, "w");
    if ($openfile) {
        fwrite($openfile, json_encode($data));
        fclose($openfile);
        $success = true;
    } 
    
    return $success;
}

function sanitize(&$data) {
    foreach ($data as &$val) {
        if (is_array($val)) { sanitize($val); }
        else { $val = htmlspecialchars($val); }
        print_con($val);
    }
}

//returns a nice description based on the em_type
function make_nice($emtype) {
    switch ($emtype) {
        case "full-time":
            return "Full-Time Staff";
        case "part-time":
            return "Part-Time Staff";
        case "work-study":
            return "Work Study";
        case "online-prog":
            return "Online Program";
        case "tutor":
            return "Tutors";
        case "core-fac":
            return "Core Faculty";
        case "adjunct-fac":
            return "Senior/Adjunct Faculty";
        case "other":
            return "Other";
        default:
            return "";
    }
}

function dumper($data) {
    echo "<pre>\n";
    var_dump($data);
    echo "</pre>\n";
}

function print_con($data) {
    echo "<script>";
    echo "console.log('".json_encode($data)."');";
    echo "</script>";
}

function build_it_email(&$form_data) {
    $submitter = explode(".", $_SERVER['REMOTE_USER']);
    $submitter = ucfirst($submitter[0])." ".ucfirst($submitter[1]);
    $subEmail = $_SERVER['REMOTE_USER']."@cambridgecollege.edu";

    $filename = $form_data['fname'] . $form_data['lname'] . $form_data['jenzabarID'];

    $url  = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];
    $url .= "?f=" . $filename . "&review";

    $subject = "New Hire Form for " . $form_data['fname'] . " " . $form_data['lname'];

    $body  = "<p>There is a New Hire form available for review for new employee " . $form_data['fname'] . " " 
        . $form_data['lname'] . " submitted by ".$submitter.".</p>";
    $body .= "<p><a href='" . $url . "'>REVIEW</a></p>";

    $header  = "From:" . FROM_MAIL . " \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    return array(
        "to" => TO_MAIL,
        "subject" => $subject,
        "body" => $body,
        "header" => $header,
    );
}

function build_manager_email(&$form_data) {
    $submitter = explode(".", $_SERVER['REMOTE_USER']);
    $submitter = ucfirst($submitter[0])." ".ucfirst($submitter[1]);
    $subEmail = $_SERVER['REMOTE_USER']."@cambridgecollege.edu";

    $filename = $form_data['fname'] . $form_data['lname'] . $form_data['jenzabarID'];

    $url  = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME'];
    $url .= "?f=" . $filename;

    $subject = "New Hire Tech Form for " . $form_data['fname'] . " " . $form_data['lname'] . " submitted";

    $body  = "<p>The New Hire Technology Request Form for new employee " . $form_data['fname'] . " " 
        . $form_data['lname'] . " has been submitted to IT who will contact you soon.</p>";
    $body .= "<p>In the meantime, you may click here to <a href='" . $url . "'>EDIT</a> the form or ";
    $body .= "here to <a href='" . $url . "&review'>REVIEW</a>.</p>";
    $body .= "<p>You may reply to this email if there are any issues to open a Help Desk ticket.</p>";
    $body .= "<p>Thanks,<br>Cambridge College IT</p>";

    $header  = "From:" . FROM_MAIL . " \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    return array(
        "to" => $subEmail,
        "subject" => $subject,
        "body" => $body,
        "header" => $header,
    );
}

function send_email($email) {
    return mail($email['to'], $email['subject'], $email['body'], $email['header']);
}

?>