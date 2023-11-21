<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];

    try {
        require_once '../connects/dblocal.inc.php';

        // Check if the phone number is already registered
        $checkQuery = "SELECT COUNT(*) FROM users WHERE phone = ?";
        $checkStmt = $pdo->prepare($checkQuery);
        $checkStmt->execute([$phone]);
        $count = $checkStmt->fetchColumn();

        if ($count > 0) {
            echo '<script>alert("User with this phone number is already registered.");</script>';
        } else {
            // Insert the new user
            $insertQuery = "INSERT INTO users (fname, lname, phone) VALUES (?, ?, ?)";
            $insertStmt = $pdo->prepare($insertQuery);
            $insertStmt->execute([$fname, $lname, $phone]);

            echo '<script>alert("User registered successfully.");</script>';
        }

        echo '<script>
            setTimeout(function() {
                window.location.href = "../tool_reg.php";
            }, 3000); 
          </script>';

        $pdo = null;
        $checkStmt = null;
        $insertStmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../tool_reg.php");
}
?>
