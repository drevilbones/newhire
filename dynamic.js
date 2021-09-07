function autofillMapping(dropDown, lDrive) {

    var mappingArr = { mappings : [
        {
        "Dept": "Academic Affairs",
        "Mapping": "Academic Affairs Office"
        },
        {
        "Dept": "Academic Resources",
        "Mapping": "Academic Resources"
        },
        {
        "Dept": "Board of Trustees",
        "Mapping": "Board of Trustees"
        },
        {
        "Dept": "Business Office",
        "Mapping": "Business Office"
        },
        {
        "Dept": "Business Operations",
        "Mapping": "Business Operations"
        },
        {
        "Dept": "Development Office",
        "Mapping": "Development Office"
        },
        {
        "Dept": "Enrollment Office",
        "Mapping": "Enrollment Office"
        },
        {
        "Dept": "Executables",
        "Mapping": "Executables"
        },
        {
        "Dept": "Finance and Administration",
        "Mapping": "Finance and Administration"
        },
        {
        "Dept": "Financial Aid Office",
        "Mapping": "Financial Aid Office"
        },
        {
        "Dept": "Human Resources",
        "Mapping": "Human Resource Office"
        },
        {
        "Dept": "IT",
        "Mapping": "Information Technology Office"
        },
        {
        "Dept": "International Office",
        "Mapping": "International Office"
        },
        {
        "Dept": "Lawrence Site",
        "Mapping": "Lawrence Site"
        },
        {
        "Dept": "Marketing & Publications",
        "Mapping": "Marketing & Pub. Offices"
        },
        {
        "Dept": "Ontario Site (California)",
        "Mapping": "Ontario Site"
        },
        {
        "Dept": "President Office",
        "Mapping": "President Office"
        },
        {
        "Dept": "Puerto Rico Site",
        "Mapping": "Puerto Rico Site"
        },
        {
        "Dept": "Registrar Office",
        "Mapping": "Registrar Office"
        },
        {
        "Dept": "Research and Evaluation",
        "Mapping": "Research and Evaluation Office"
        },
        {
        "Dept": "SRDM",
        "Mapping": "Student Records and Data Management"
        },
        {
        "Dept": "School of Education",
        "Mapping": "SOE Office"
        },
        {
        "Dept": "Springfield Site",
        "Mapping": "Springfield Site"
        },
        {
        "Dept": "Student Academic Service Office",
        "Mapping": "Student Academic Service Office"
        }
    ]};

    for (i in mappingArr.mappings) {
        if (mappingArr.mappings[i].Dept == dropDown.value) {
            lDrive.value = mappingArr.mappings[i].Mapping;
        }
    }
} //end autofillMapping

function testForToggle(testVal, keyVal, toggleOb) {
    if (testVal === keyVal) {
        toggleOb.style.display = 'block';
    } else {
        toggleOb.style.display = 'none';
    }
}

//generate login/email from fname & lname
function autofillLogin() {
    var dLogin = document.getElementById("desired_login");
    var dEmail = document.getElementById("desired_email");

    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    dLogin.value = fname.value + "." + lname.value;
    dEmail.value = fname.value + "." + lname.value + "@cambridgecollege.edu";
}

//toggle a check box
function checkEm(toCheck) {
    document.getElementById(toCheck).checked = true;
}

function uncheckEm(toUncheck) {
    document.getElementById(toUncheck).checked = false;
}

//inject a value into a form field
function inject(field, value) {
    document.getElementById(field).value = value;
}

//set input element to readonly
//TODO: change this to convert to regular text instead of a disabled form fields
//as disabled forms are ignored by accessibility software
function makeRO(elems) {
    for (i = 0; i < elems.length; i++) {
        elems[i].disabled = true;
    }
}