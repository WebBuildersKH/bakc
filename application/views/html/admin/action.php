<?php

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array


    if (empty($_POST['namekh']))
        $errors['namekh'] = 'namekh is required.';

    if (empty($_POST['nameeng']))
        $errors['nameeng'] = 'nameeng alias is required.';

// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
    } else {

        // if there are no errors process our form, then return a message
        // show a message of success and provide a true success variable
        $data['success'] = true;
        $data['message'] = 'Success!';
        
        
//STEP 1
$data['nameeng'] = $_POST['nameeng'];
$data['namekh'] = $_POST['namekh'];
$data['dob'] = $_POST['dob'];
$data['id'] = $_POST['id'];
//STEP 2
$data['end_cert'] = $_POST['end_cert'];
$data['date_of_completion'] = $_POST['date_of_completion'];



//STEP 3



//STEP 4


        $data['compliant_des'] = implode(",",$_POST['compliant_des']);
    }

    // return all our data to an AJAX call
    echo json_encode($data);

?>