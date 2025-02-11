<?php
require "config.php";

if(isset($_POST['submit-button'])){
    print_r($_POST);die();
    // Fetching variables of the form which travels in URL
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];
    if($name !=''&& $email !=''&& $contact !=''&& $message !='')
    {
        //  To redirect form on a particular page
        header("Location: http://localhost/vanilla-html-js-css-form");
        // header("Location: https://demo.infoy.in/contact-form/");
    }
    else{
?>
        <span>
            <?="Please fill all fields.....!!!!!!!!!!!!"?>
        </span>
<?php
    }
}

