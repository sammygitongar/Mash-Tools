<?php
    include 'includes/header.php';
?>

<section class="user-form-container">
    <div class="user-form">
        <div class="userhead">
            <img src="assets/images/tool.png" alt="">
            <h3>Register a new Tool</h3>
        </div>
        <form action="handlers/tool_handler.php" method="post">
            <input type="text" name="name" placeholder="Tool Name">
            <input type="number" name="stock" placeholder="Toosl in Stock (e.g. 100)" pattern="[0-9]{}" title="Please enter a valid number)" required>
            <label for="picture"><i class="uil uil-file-upload-alt"></i>Upload File</label>
            <input type="file" name="picture" id="picture" accept="image/*">
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</section>





<?php
    include 'includes/footer.php';
?>
