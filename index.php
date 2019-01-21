<?php
$name_error = $address_error = $email_error = $phone_error = $message_error = $success = "";
if(isset($_POST['firstname'])) {
    $name = $_POST['firstname'];
    $address = $_POST['address'];
    $email = $_POST['mail'];
    $phone = $_POST['telephone'];
    $message = $_POST['message'];
    
    if ($name == "") {
        $name_error =  "Name is required*<br />";
    }elseif (!preg_match("/^[a-zA-Z ]*$/",$name)){
        $name_error =  "Only letters are allowed*<br />";
    }
    if ($address == "") {
        $address_error =  "Address is required*<br />";
    }
    if ($email == "") {
        $email_error =  "Email is required*<br />";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_error =  "Invalid email format*<br />";
    }
    if ($phone == "") {
        $phone_error =  "Phone is required*<br />";
    }elseif (!preg_match("/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/",$phone)){ 
        /*
            allowed format:
            123-456-7890
            (123) 456-7890
            123 456 7890
            123.456.7890
            +91 (123) 456-7890
        */
        $phone_error =  "Invalid phone number*<br />";
    }
    if ($message == ""){
        $message_error = "Message is required*<br />";
    }
    //if form is not empty show succes message and empty all inputs
    if($name != "" and $address != "" and $email != "" and $phone != "" and $message != ""){
        $success = "Message sent, thank you for contacting us!";
        $name = $address = $email = $phone = $message = "";
    }
}
?>  
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lab2</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300" rel="stylesheet">
    </head>
    <body>
        <?php
            include 'header.php';
            include 'content.php';
            include 'footer.php';
        ?>
    </body>
</html>