<?php
require "config.php";
// print_r($_POST);die();
if(isset($_POST['submit'])){
    echo "hi";die();
    // Fetching variables of the form which travels in URL
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    if($name !=''&& $email !=''&& $contact !=''&& $address !='')
    {
        //  To redirect form on a particular page
        header("Location: http://localhost/vanilla-html-js-css-form");
    }
    else{
?>
        <span>
            <?="Please fill all fields.....!!!!!!!!!!!!"?>
        </span>
<?php
    }
}

