<?php
    include "action/index.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sunglobal Default Form</title>
    <meta content="noindex, nofollow" name="robots">
    <link href='assets/style.css' rel='stylesheet' type='text/css'>
</head>

<body>
    <main>
        <section class="first">
            <h2 class="grid-child-first main-header">Contact Me</h2>
            <form class="grid-child-second contact-form" action="/vanilla-html-js-css-form" id="#form" method="post" name="#form">
                <div class="form-controls">
                    <label>Name :</label>
                    <input id="name" name="name" placeholder='Your Name' type='text'>
                </div>
                <div class="form-controls">
                    <label>Email :</label>
                    <input id="email" name="email" placeholder='Valid Email Address' type='text'>
                </div>
                <div class="form-controls">
                    <label>Contact :</label>
                    <input id="contact" name="contact" placeholder='Contact' type='text'>
                </div>
                <div class="form-controls">
                    <label>Address:</label>
                    <input id="address" name="address" placeholder='Address' type='text' value="">
                </div>
                <div class="form-controls">
                    <input id='btn' name="submit" type='submit' value='Submit'>
                </div>
            </form>
        </section>
    </main>
</body>

</html>