<?php
session_start();
if (isset($_GET['id']) && isset($_SESSION['sno'])) {
    include('../../components/database.php');
    $answerId = intval($_GET['id']); // Sanitize
    $userId = intval($_SESSION['sno']);   // Sanitize

    if (!empty($answerId) && !empty($userId)) {
        $deleteTwo = "DELETE FROM `savedcommnets` WHERE `userId`='$userId' AND `answerId`='$answerId'";
        $querry13 = mysqli_query($myconnect, $deleteTwo);

        if ($querry13) {
            header("Location: ../../pages/comments/saveComments.php");
            exit; // Stop further script execution
        } else {
            echo "Error: " . mysqli_error($myconnect); // Log the error
        }
    } else {
        echo "Invalid userId or answerId.";
    }
} else {
    echo "Parameters missing.";
}


?>