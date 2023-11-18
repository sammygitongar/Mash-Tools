<?php
    include 'includes/header.php';
?>

<section class="user-form-container">
    <div class="user-form">
        <div class="userhead">
            <img src="assets/images/user.png" alt="">
            <h3>Register a Worker</h3>
        </div>
        <form action="handlers/user_handler.php" method="post">
            <input type="text" name="fname" placeholder="First Name">
            <input type="text" name="lname" placeholder="Last Name">
            <input type="tel" name="phone" placeholder="Telephone" pattern="[0-9]{10}" title="Please enter a valid phone number)" required>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</section>





<?php
    include 'includes/footer.php';
?>






