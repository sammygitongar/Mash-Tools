<?php
    include 'includes/header.php';
?>

<section class="user-form-container">
    <div class="user-form">
        <div class="userhead">
            <img src="assets/images/tool.png" alt="">
            <h3>Register a new Tool</h3>
        </div>
        <form action="handlers/tool_handler.php" method="post" enctype="multipart/form-data">
            <input type="text" name="tname" placeholder="Tool Name">
            <input type="number" name="stock" placeholder="Toosl in Stock (e.g. 100)" pattern="[0-9]{}" title="Please enter a valid number)">
            <label for="picture"><i class="uil uil-file-upload-alt"></i>Upload File</label>
            <input type="file" name="picture" id="picture" accept="image/*" required>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</section>




<script src="index.js">

</script>





<?php
    include 'includes/footer.php';
?>
