<div id="form">
    <form action="index.php" method="post" name="newsletterForm">
        <h2>Contact Us</h2>
        <span id="contact-sub">Contact us today and get a response within 24 hours!</span><br>
        
        <input type="text" id="fname" name="firstname" value="<?= $name; ?>" placeholder="Your Name">
        <span id="error-msg"><?= $name_error; ?></span>
        
        <input type="text" id="add" name="address" value="<?= $address; ?>" placeholder="Your Address">
        <span id="error-msg"><?= $address_error; ?></span>
        
        <input type="text" id="email" name="mail" value="<?= $email; ?>" placeholder="Your Email Address">
        <span id="error-msg"><?= $email_error; ?></span>

        <input type="text" id="tel" name="telephone" value="<?= $phone; ?>" placeholder="Your Phone Number">
        <span id="error-msg"><?= $phone_error; ?></span>
        
        <textarea type="text" name="message" value="<?= $message; ?>" placeholder="Type your message here..."><?php echo $message?></textarea>
        <span id="error-msg"><?= $message_error; ?></span>

        <input type="submit" value="Submit">
        <span id="success-msg"><?php echo $success?></span>
    </form>
</div>