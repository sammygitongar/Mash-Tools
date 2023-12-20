<?php
    session_start();

    $con = mysqli_connect("localhost", "root", "", "mash_tools");

    if (isset($_POST["button"])){
        $tool_name = $POST["selected-tool"];
        $qty = "selected-qty[]";


    }















// if ($_SERVER['REQUEST_METHOD'] == "POST") {
//     $username = $_POST['username'];
//     $tool = $_POST['selected-tool'];
//     $qty = $_POST[`selected-qty[$tool]`];
//     // $picture = $_POST['picture'];
//     //Check if the file name exists

//            try {
//             require_once 'connects/dblocal.inc.php';

//             $query = "INSERT INTO issues (username, tool, qty) VALUES (?, ?, ?);";
//             $stmt = $pdo->prepare($query);
//             $stmt->execute([$username, $tool, $qty]);

//             $pdo = null;
//             $stmt = null;

//             header("Location: ../index.php");

//             die();


//         } catch (PDOException $e) {
//             die("Query failed: " . $e->getMessage());
//         }


//     } else {
//         header("Location: ../index.php");
//     }