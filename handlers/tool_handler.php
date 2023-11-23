<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $tname = $_POST['tname'];
    $stock = $_POST['stock'];
    // $picture = $_POST['picture'];


    //Check if the file name exists

    try {
        require_once '../connects/dblocal.inc.php';

        $checkQuery = "SELECT COUNT(*) FROM tools_table WHERE tname = ?";
        $checkStmt = $pdo->prepare($checkQuery);
        $checkStmt->execute([$tname]);
        $rowCount = $checkStmt->fetchColumn();

        if ($rowCount > 0) {
            // tname already exists, notify the user
            echo '<script>alert("Tool with the same name already exists. Please choose a different name.");</script>';
            echo '<script>
                setTimeout(function() {
                    window.location.href = "../tools_reg.php";
                }, 3000); 
            </script>';
            $pdo = null;
            $checkStmt = null;
            die();
        }

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }



     // File upload handling
    $targetDirectory = "../assets/"; 
    $targetFile = $targetDirectory . basename($_FILES["picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is an actual image
    $check = getimagesize($_FILES["picture"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if the file already exists
    if (file_exists($targetFile)) {
        // If the file already exists, delete it to overwrite
        unlink($targetFile);
        // echo "Existing file deleted. ";
    }

    // Check file size (you can adjust this limit if needed)
    if ($_FILES["picture"]["size"] > 50000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // Handle the error as needed
    } else {
        // If everything is ok, try to upload the file
        if (move_uploaded_file($_FILES["picture"]["tmp_name"], $targetFile)) {
            // File uploaded successfully, proceed to insert data into the database


            try {
                require_once '../connects/dblocal.inc.php';

                    // Insert the new user
                    $insertQuery = "INSERT INTO tools_table (tname, stock, picture) VALUES (?, ?, ?);";
                    $insertStmt = $pdo->prepare($insertQuery);
                    $insertStmt->execute([$tname, $stock, $targetFile]);

                    echo '<script>alert("Tool registered successfully.");</script>';
                

                    echo '<script>
                        setTimeout(function() {
                            window.location.href = "../tools_reg.php";
                        }, 3000); 
                    </script>';

                $pdo = null;
                $checkStmt = null;
                $insertStmt = null;

                die();

          } catch (PDOException $e) {
              die("Query failed: " . $e->getMessage());
           }

        // } else {
        //     header("Location: ../tools_reg.php");
         }
            } } 
        
    ?>